# Installation 


To start off clone the project
```
git clone https://github.com/jcdampil23/chirper-redefined.git
cd chirper-redefined
```
## Install Dependencies
### Automatic setup (you will need to run an sh script for this)
```
chmod +x ./install.sh
./install.sh
```
You will need to run migrations after the containers are running as it will try to migrate to a non existent mysql container
```
./vendor/bin/sail php artisan migrate
```
### Manually installing dependencies

Copy the environment variables (you can change them if you like)
```
cp ./.env.example ./.env
```

install dependencies 
```
composer install
npm install
```

if you do not have composer and node installed locally you can run this command
```
docker run --rm \
           -u "$(id -u):$(id -g)" \
           -v "$(pwd):/var/www/html" \
           -w /var/www/html \
           laravelsail/php83-composer:latest \
           composer install --ignore-platform-reqs \
           npm install
```

## Run the program
You should now be able to use Sail with this command
```
./vendor/bin/sail up -d
```

The app should now be accessible to 127.0.0.1 or localhost
to create the tables for the database run the following command 

```
./vendor/bin/sail php artisan key:generate
./vendor/bin/sail php artisan migrate
```

## Run tests

```
./vendor/bin/sail php artisan test
```
