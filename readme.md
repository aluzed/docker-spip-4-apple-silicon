# Dockerized Spip 4.4.3 with Apache and Mysql

This project run only on ARM Apple Silicon CPUs.

## Docker build

```
docker buildx build -f ./Dockerfile .
```

## Docker compose

Configure your mysql account (password, etc...) in `docker-compose.yml`

```
docker compose up -d
```

## Configure

Visit: http://localhost:3000
Then: http://localhost:3000/spip_loader.php
Then: http://localhost:3000/ecrire

Configure with your docker configuration:

For the database hostname, replace `localhost` with `mysql`, there you should be good to go.
