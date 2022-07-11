# LaraGigs app

An app for listing Laravel gigs/jobs. 

![Alt text](/public/images/screen.png "LaraGigs")

## Usage

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

### Running Then App
Upload the files to your document root, Valet folder or run 
```
php artisan serve
```

### Running The App on Docker and sail cli

Bash alias for sail setup
```
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
```

To start all of the Docker containers in the background, you may start Sail in "detached" mode:

```
sail up -d
sail php --version

```

## License

The LaraGigs app is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
