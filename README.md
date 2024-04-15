## Installation steps

To startup the project you will need to run these commands in your local shell

```
git clone https://github.com/jcdampil23/chirper-redefined.git
cd chirper
./vendor/bin/sail up
```

The app should now be accessible to 127.0.0.1 or localhost
to create the tables for the database run the following command 

```
./vendor/bin/sail php artisan migrate

```

## Run tests

```
./vendor/bin/sail php artisan test
```
