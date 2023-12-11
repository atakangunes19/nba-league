
# INSIDER NBA LEAGUE

Demo Video
```shell
https://drive.google.com/file/d/1suBqJr5oPK4zGz1ZGxauPIrPMvzCuN1C/view?usp=sharing
```

Requirements
```shell
"php": "^8.1",
"laravel/framework": "^10.0",
"node": "^16.15.0",
"npm": "^9.0.0"
```


Installation Steps
```shell
git clone https://github.com/atakangunes19/nba-league
cd nba-league
composer install
.ENV => DB_DATABASE='nba-league'
php artisan migrate
php artisan db:seed --class=ClubSeeder
npm run build
php artisan serve
npm run dev
```
