# Laboratorio

## Requisitos Previos

Antes de comenzar a trabajar en este proyecto, asegúrate de tener instalado lo siguiente en tu sistema:

-   laravel 10
-   node 20.11
-   php 8.2.12
-   composer
-   xampp (mysql, apache)

## Instalación

1. Despues de clonar el proyecto

2. Navega al directorio del proyecto:
   bash
   cd laboratorio

3. Instala las dependencias usando Composer:
   bash
   composer install

3.1 Si marca error "git was not found in your PATH, skipping source download" se corrige modificando el archivo php.ini en la parte de cambiando la linea ";extension=zip" por "extension=zip"

4. Monte la base de datos en Xampp (mysql), el scrip esta en raiz del proyecto con nombre Script copy.sql

5. Configura el archivo .env con las credenciales de la base de datos y creando la key del proyecto.
   bash
   php artisan key:generate

6. Para iniciar el proyecto, primero es necesario tener en ejecución XAMPP
   bash
   php artisan serve
7. Abre tu navegador y visita http://127.0.0.1/8000 para ver la aplicación en funcionamiento.
