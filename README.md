# Jop-posting(small linkedin :) app

![image](https://github.com/AbdelrahmanShaheen/Linux-Commands/assets/77184432/11600e81-37f2-424a-bab4-5b6c5553c105)

## Features

-   Filter job post by tag
-   Search for a job post using (title,tag,desc)
-   Pagination
-   Authentication & Authorization
-   List all jobs
-   Post a job
-   Delete and Edit a job post
-   Login/Logout/SignUp
-   List all/one post as a gust

### Database Setup

This app uses MySQL. To use something different, open up config/Database.php and change the default driver.

To use MySQL, make sure you install it, setup a database and then add your db credentials(database, username and password) to the .env.example file and rename it to .env

### Migrations

To create all the nessesary tables and columns, run the following

```
php artisan migrate
```

### Seeding The Database

To add the dummy listings with a single user, run the following

```
php artisan db:seed
```

### File Uploading

When uploading listing files, they go to "storage/app/public". Create a symlink with the following command to make them publicly accessible.

```
php artisan storage:link
```

### Running The App

Upload the files to your document root, Valet folder or run

```
php artisan serve
```
