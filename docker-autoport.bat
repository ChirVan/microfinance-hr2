@echo off
echo Starting Production Laravel Docker Setup with Auto Port Selection

REM Stop any existing containers
echo Stopping any existing containers...
docker-compose -f docker-compose.prod.yml down

REM Prepare environment file
echo.
echo Copying .env.docker to .env for Docker setup...
copy .env.docker .env /Y

REM Find available ports
echo.
echo Finding available ports...
powershell -Command "$basePort = 3306; $port = $basePort; while (Test-NetConnection -ComputerName localhost -Port $port -InformationLevel Quiet -WarningAction SilentlyContinue -ErrorAction SilentlyContinue) { $port++; }; echo $port" > port.txt
set /p DB_PORT=<port.txt
del port.txt

REM Update docker-compose file with available port
echo.
echo Setting MySQL port to %DB_PORT%...
powershell -Command "(Get-Content docker-compose.prod.yml) -replace '\"3309:3306\"', '\"%DB_PORT%:3306\"' | Set-Content docker-compose.prod.yml.tmp"
move /Y docker-compose.prod.yml.tmp docker-compose.prod.yml

REM Start containers
echo.
echo Starting Docker containers...
docker-compose -f docker-compose.prod.yml up -d

REM Display access information
echo.
echo Your Laravel application should now be running at: http://localhost:8000
echo Database is accessible at localhost:%DB_PORT%
echo.
echo Username: laravel
echo Password: laravel
echo Database: laravel
echo.
echo To see application logs, run: docker-compose -f docker-compose.prod.yml logs -f app
echo.
pause
