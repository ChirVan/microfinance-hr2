# Docker Configuration Guide

This document explains how to deploy the Microfinance HR application using Docker.

## Prerequisites

- Docker and Docker Compose installed on your server
- Git to clone the repository

## Available Docker Scripts

1. **docker-easy.bat** - Simple development setup with basic configuration
2. **docker-prod.bat** - Production-ready setup with environment configuration

## Port Configuration

The Docker setup uses the following ports:

- **8000**: Laravel Application (web access)
- **3309**: MySQL Database (external access)

If you're experiencing port conflicts, you can modify these in the Docker Compose files.

## Running in Development Mode

```bash
.\docker-easy.bat
```

## Running in Production Mode

```bash
.\docker-prod.bat
```

## Manual Setup

If you prefer to run the commands manually:

1. Copy the environment file:
   ```bash
   copy .env.docker .env
   ```

2. Start the containers:
   ```bash
   docker-compose -f docker-compose.prod.yml up -d
   ```

3. Access the application at http://localhost:8000

## Database Connection

- **Host**: localhost (from your machine) or db (from inside Docker)
- **Port**: 3309 (from your machine) or 3306 (from inside Docker)
- **Database**: laravel
- **Username**: laravel
- **Password**: laravel

## Troubleshooting

### Port Conflicts

If you encounter port conflicts with existing services like XAMPP:

1. Modify the ports in the docker-compose files
2. Update the corresponding batch files with the new port information

### Container Access

To access a running container:

```bash
docker exec -it microfinance-hr2-app-1 bash
```

### Viewing Logs

To see application logs:

```bash
docker-compose -f docker-compose.prod.yml logs -f app
```
