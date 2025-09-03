# Docker Setup Guide for Microfinance HR

This guide explains the various Docker setup options available in this project.

## Docker Configuration Files

1. **docker-compose.easy.yml**: Basic setup for development environments
2. **docker-compose.prod.yml**: Production-ready setup with networking and healthchecks
3. **Dockerfile**: Custom application image definition (for advanced usage)

## Startup Scripts

1. **docker-easy.bat**: Simple Docker startup for development
2. **docker-prod.bat**: Production Docker setup with proper environment configuration
3. **docker-autoport.bat**: Advanced setup that automatically selects available ports (recommended)

## Port Configuration

The Docker setup uses the following default ports:

- **8000**: Laravel Application (web access)
- **3309**: MySQL Database (external access)

If you're experiencing port conflicts, use the `docker-autoport.bat` script, which will automatically find available ports.

## Running the Application

### Option 1: Auto Port Selection (Recommended)

```bash
.\docker-autoport.bat
```

This script will:
1. Find an available port for MySQL
2. Configure Docker Compose to use that port
3. Start the containers
4. Display connection information

### Option 2: Production Setup

```bash
.\docker-prod.bat
```

### Option 3: Development Setup

```bash
.\docker-easy.bat
```

## Troubleshooting

### Container is not starting

Check for port conflicts by running:
```
netstat -ano | findstr :3309
```

### Application can't connect to database

Make sure the MySQL container is healthy:
```
docker ps
```

Look for "healthy" status for the database container.

### Access denied errors

Verify the environment variables match between your .env file and Docker Compose configuration.

## Accessing Containers

To access the Laravel application container:
```
docker exec -it microfinance-hr2-app-1 bash
```

To access the MySQL container:
```
docker exec -it microfinance-hr2-db-1 bash
```

## Database Connection Information

- **Host**: localhost (from host machine) or db (from within containers)
- **Port**: Varies (check script output, default is 3309)
- **Database**: laravel
- **Username**: laravel
- **Password**: laravel
