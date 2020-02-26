# Trabajo_servidor

Pasos para la instalacion

Instalamos composer

composer install

Copiamos el .env.example y hacemos los cambios en el .env

cp .env.example .env

En el .env hay que cambiar el DB_DATABASE y poner la base de datos correspondiente que se haya creado previamente
y en DB_USERNAME y DB_PASSWORD nuestro usuario y contraseña de nuestro mysql

Generamos una key

php artisan key:generate

Generamos un jwt

php artisan jwt:generate

Corremos la migracion y las seeder

php artisan migrate --seed

Iniciamos el servidor

php artisan serve

Y accedemos al servidor con esta direccion http://localhost:8000