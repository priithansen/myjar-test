# FE developer test task implementation

## Instructions for setting up the test app

### Environment

1. Git clone the repo
2. # cd api/
3. # composer install
4. # php vendor/bin/homestead make
5. # vagrant up

### Laravel test data

1. # vagrant ssh (migrations will not work from outside the virtual machine)
2. # cd api/
3. # cp .env.example .env
3. # php artisan migrate
4. # php artisan db:seed

All ready to visit: http://192.168.10.10/myjar

