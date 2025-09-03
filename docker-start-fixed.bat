@echo off
echo Starting Simplified Microfinance HR Docker Setup

REM Create storage directory if it doesn't exist
if not exist "public\storage" (
    mkdir "public\storage"
    echo Created public/storage directory
)

REM Stop and remove existing containers
echo Stopping any existing containers...
docker-compose -f docker-compose.fixed.yml down

REM Copy .env file if it doesn't exist
if not exist ".env" (
    copy .env.docker .env
    echo Created .env file from .env.docker template
)

REM Generate Laravel key if needed
echo Checking for Laravel app key...
findstr /C:"APP_KEY=" .env | findstr /V /C:"APP_KEY=" > nul
if %errorlevel% equ 0 (
    echo Generating Laravel app key...
    docker run --rm -v "%cd%:/var/www" microfinance-hr-app php artisan key:generate
)

REM Build and start the fixed Docker setup
echo Building and starting containers...
docker-compose -f docker-compose.fixed.yml up -d --build

echo.
echo Containers should be starting. Check Docker Desktop or run:
echo docker ps
echo.
echo Access your application at: http://localhost:8080
echo.
pause
