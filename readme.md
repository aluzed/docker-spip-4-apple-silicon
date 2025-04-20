# Dockerized SPIP 4.4.3 with Apache & MySQL

> ⚠️ This setup is compatible **only with ARM-based Apple Silicon CPUs** (e.g. M1, M2).

---

## 📦 Install

```bash
sh install.sh
```

---

## 🛠 Docker Build

```bash
docker buildx build -f ./Dockerfile .
```

## 🚀 Docker Compose

Before starting, configure your MySQL credentials (password, etc.) in `docker-compose.yml`

Then run:

```bash
docker compose up -d
```

---

## 🔧 Configuration

Visit: http://localhost:3000

Then: http://localhost:3000/spip_loader.php

Then: http://localhost:3000/ecrire

During installation, when asked for the database hostname, use `mysql` instead of `localhost`, That should do the trick ✅.

Use your credentials, `spip_user` and `spip_password`.

Default database name is `spip_db`, no need to recreate a new one.

Htaccess error is not an error as apache `a2enmod rewrite` is already enabled, just skip.
