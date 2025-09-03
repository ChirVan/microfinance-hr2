@echo off
echo Starting Simple Laravel Docker Setup

REM Stop any existing containers
echo Stopping any existing containers...
docker-compose -f docker-compose.easy.yml down

REM Make sure we have a .env file
if not exist ".env" (
    echo Creating .env file from example...
    copy .env.example .env
)

REM Start the containers
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
pause
