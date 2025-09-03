@echo off
echo Starting Microfinance HR System in Docker...

REM Copy Docker environment file if not exists
if not exist .env (
    copy .env.docker .env
    echo Created .env file from .env.docker template
)

REM Build and start Docker containers
docker-compose up -d --build

echo.
echo Docker containers started successfully!
echo.
echo Your application should now be running at: http://localhost
echo.
echo To view logs, run: docker-compose logs -f
echo To stop containers, run: docker-compose down
echo.
pause
