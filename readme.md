# Wordpress Docker Starter


![version](https://img.shields.io/badge/DevOps-Docker-blue.svg?maxAge=2592000)

## Folder Structure

```
├── Dockerfile
├── conf
│   └── sites-available
│       └── 000-wordpress.conf
├── docker-compose.yml
├── readme.md
├── sql
└── wp
```


## Install Wordpress by Browser

1. Up environment

```
docker-compose up -d
```

2. Open browser:

![Wordpress Installer](https://drive.google.com/uc?id=1B4uxR0MiSru4m1anIcIp_UU1oaeh3w-0)

## Install Wordpress by WP-CLI

1. Up environment

```
docker-compose up -d
```
2. WP-CLI install

```
docker run --rm -v $PWD:/var/www/html --user xfs --network wordpress_net wordpress:cli wp core install --url=localhost:8080 --title="Wordpress is Ready\!" --admin_user=root --admin_password=root --admin_email=info@myemail.com
```

## Create database backup

```
docker exec wordpress-db /usr/bin/mysqldump -u root --password=root wordpress_db > sql/backup.sql
```

## Run with your database.

In `docker-compose` file docker-entrypoint is defined as

```
volumes:
     - ./wp/:/var/www/html/wp
     - .data:/var/lib/mysql
     - ./sql/backup.sql:/docker-entrypoint-initdb.d/backup.sql
```

```
docker-compose up -d
```


