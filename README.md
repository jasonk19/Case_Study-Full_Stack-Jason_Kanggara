# Harisenin Case Study

### Tech Stack

-   Laravel 9
-   PHP 8
-   Bootstrap 5
-   MySQL 8

### How to run

1. Clone this project
2. Create database then use database dumpfile at database/sqldump

```
mysql -u <user> -p <database> < db_dump.sql
```

3. Configure virtual environment .env
4. Run the project

```
php artisan serve
```

## Notes

**If sql dump not working**

-   Create database
-   Configure virtual environment .env
-   Migrate

```
php artisan migrate
```

-   Seed Data according to seeder class

```
php artisan db:seed --class=<SeederClass>
```

-   Run the program

```
php artisan serve
```

### Author

Jason Kanggara
