#!/bin/bash

# Production deployment script for Microfinance HR System

# Colors for output
GREEN='\033[0;32m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Step 1: Build and start Docker containers
echo -e "${BLUE}Building and starting Docker containers...${NC}"
docker-compose up -d --build

# Step 2: Install Composer dependencies
echo -e "${BLUE}Installing Composer dependencies...${NC}"
docker-compose exec app composer install --optimize-autoloader --no-dev

# Step 3: Set up environment file
echo -e "${BLUE}Setting up environment file...${NC}"
docker-compose exec app cp .env.production .env

# Step 4: Generate application key
echo -e "${BLUE}Generating application key...${NC}"
docker-compose exec app php artisan key:generate

# Step 5: Run migrations
echo -e "${BLUE}Running database migrations...${NC}"
docker-compose exec app php artisan migrate --force

# Step 6: Cache configuration and routes for better performance
echo -e "${BLUE}Caching configuration and routes...${NC}"
docker-compose exec app php artisan config:cache
docker-compose exec app php artisan route:cache
docker-compose exec app php artisan view:cache

# Step 7: Set correct permissions
echo -e "${BLUE}Setting file permissions...${NC}"
docker-compose exec app chown -R www:www storage bootstrap/cache

echo -e "${GREEN}Deployment completed successfully!${NC}"
echo -e "Your application is now running at: ${APP_URL}"
