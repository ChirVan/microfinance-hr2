@echo off
echo Fixing Docker Container Access Issues

REM Step 1: Stop containers
echo Step 1: Stopping containers...
docker-compose -f docker-compose.fixed.yml down

REM Step 2: Create a test index.php file
echo Step 2: Creating test index.php file...
echo ^<?php phpinfo(); ?^> > public\index.php.test

REM Step 3: Rebuild with debug container
echo Step 3: Creating debug container...
echo services:> docker-compose.debug.yml
echo   app:>> docker-compose.debug.yml
echo     image: php:8.2-apache>> docker-compose.debug.yml
echo     container_name: microfinance-hr-debug>> docker-compose.debug.yml
echo     ports:>> docker-compose.debug.yml
echo       - "8080:80">> docker-compose.debug.yml
echo     volumes:>> docker-compose.debug.yml
echo       - ./public:/var/www/html>> docker-compose.debug.yml
echo     environment:>> docker-compose.debug.yml
echo       - APACHE_DOCUMENT_ROOT=/var/www/html>> docker-compose.debug.yml

echo Step 4: Starting debug container...
docker-compose -f docker-compose.debug.yml up -d

echo.
echo Try accessing http://localhost:8080/index.php.test
echo If this works but your Laravel app doesn't, it's a Laravel configuration issue.
echo If this also fails, it's an Apache/Docker configuration issue.
echo.

echo Press any key to continue when ready to fix permissions...
pause > nul

echo Step 5: Fixing permissions...
docker exec microfinance-hr-debug bash -c "chmod -R 755 /var/www/html && chown -R www-data:www-data /var/www/html"

echo.
echo Try accessing http://localhost:8080/index.php.test again.
echo Press any key when ready to cleanup...
pause > nul

echo Step 6: Cleaning up...
docker-compose -f docker-compose.debug.yml down
del public\index.php.test
del docker-compose.debug.yml

echo.
echo Debug process complete. Now we'll apply what we learned to fix the main container.
echo.
pause
