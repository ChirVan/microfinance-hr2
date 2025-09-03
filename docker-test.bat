@echo off
echo Simple Docker Test

echo Step 1: Testing Docker is running...
docker --version

echo Step 2: Stopping any existing containers...
docker stop microfinance-test 2>nul
docker rm microfinance-test 2>nul

echo Step 3: Running a simple Nginx container...
docker run -d -p 8080:80 --name microfinance-test nginx:alpine

echo Step 4: Verifying container is running...
docker ps

echo.
echo If you see a container named "microfinance-test" above, Docker is working!
echo You can access it at http://localhost:8080
echo.
echo To stop the container, run: docker stop microfinance-test
echo.
pause
