# laravel-v5.2-seed

Small laravel 5.2 site with authentication, events and a few views listing some models ( users and access logs )

### Installation

* git clone https://github.com/eleiva/laravel-v5.2-seed.git
* composer update 
* php artisan key:generate // Generate a key for securing sessions and other data which needs to be encrypted
* cp .env.example .env  // NOTE: please update mysql settings
* mysql> create database DB_NAME;quit;
* php artisan migrate  // Build database from migrations files
* npm install
* gulp // Generate assets
* Done!

