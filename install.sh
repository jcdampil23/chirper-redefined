cp ./.env.example ./.env

docker run --rm \
           -u "$(id -u):$(id -g)" \
           -v "$(pwd):/var/www/html" \
           -w /var/www/html \
           laravelsail/php83-composer:latest \
           composer install --ignore-platform-reqs
           npm install
           npm run build
           php artisan key:generate

./vendor/bin/sail up -d
