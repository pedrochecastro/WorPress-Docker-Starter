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


## Installing Wordpress

### Browser Assistant

1. Up environment

```
docker-compose up -d
```
2. Download a wordpress fresh installation a copy all files in wp directory:
![Copy wordpress files](https://drive.google.com/uc?id=1nvHYmrc2sGgcNJwO6XoVyJJNzPwebVjJ)

3. Open browser:

![Wordpress Installer](https://drive.google.com/uc?id=1B4uxR0MiSru4m1anIcIp_UU1oaeh3w-0)

4. Complete installation.
> You can set up database connection in docker-compose

> Database host is the container name where the database is running: wordpress-db

![Wordpress db setup](https://drive.google.com/uc?id=1nvbgqps2L_SqkXSG0aMM-PvI4z7QFYub)

### WP-CLI

1. Up environment
```
docker-compose up -d
```

2. Download wordpress
```
docker run --rm -v $PWD/wp:/var/www/html/wp --user xfs  --network wordpress_net wordpress:cli wp core download --path=wp
```

3. Create  wp-config file

```
docker run --rm -v $PWD/wp:/var/www/html/wp --user xfs --network wordpress_net wordpress:cli wp config create --dbname=wordpress_db --dbuser=admin --dbpass=dbpass --dbhost=wordpress-db --path=wp
```

4. Install wordpress.

```
docker run --rm -v $PWD/wp:/var/www/html/wp --user xfs --network wordpress_net wordpress:cli wp core install --url=localhost:8080 --title="Wordpress is Ready\!" --admin_user=root --admin_password=root --admin_email=info@myemail.com --path=wp
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


