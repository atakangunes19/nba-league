
# INSIDER NBA LEAGUE

Requirements
```shell


"php": "^8.1",
"laravel/framework": "^10.0",
"node": "^16.15.0",
"npm": "^9.0.0"
```


Installation Steps
```shell
git clone https://github.com/
cd 
composer install
.ENV => DB_DATABASE='nba-league'
php artisan migrate
php artisan db:seed --class=ClubSeeder
npm run build
php artisan serve
```
