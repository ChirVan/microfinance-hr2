@echo off
echo Starting Production Laravel Docker Setup
echo Stopping any existing containers...
docker-compose -f docker-compose.easy.yml down

echo.
echo Copying .env.docker to .env for Docker setup...
copy .env.docker .env /Y

echo.
echo Starting Docker containers...
docker-compose -f docker-compose.easy.yml up -d

echo.
echo Your Laravel application should now be running at: http://localhost:8000
echo Database is accessible at localhost:3309
echo.
echo Username: laravel
echo Password: laravel
echo Database: laravel
echo.
echo To see application logs, run: docker-compose -f docker-compose.easy.yml logs -f app
echo.
pause
