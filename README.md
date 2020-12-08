## Desarrollo Web

Este es un proyecto ejemplo para el desarrollo en un sistema web utilizando Laravel (v8).

## Nombre del proyecto
juanchos-pizza

## Descripción del objetivo del proyecto

El objetivo de la página es que el dueño del establecimiento tenga una 
herramienta que sea fácil de entender, que pueda controlar y sobre todo 
para mejorar su negocio, al mismo tiempo tener otra forma de publicidad 
y  poder llegar a más personas para crecer poco a poco.

## Integrantes
1. Edgar Guzmán
2. Diego Ramirez

## Instalación

1. Clonar proyecto `git clone https://github.com/edgarernesto99/PF-juanchos-pizza.git` y cambiarse a directorio `cd PF-juanchos-pizza`
2. Instalar dependiencias mediante composer: `composer install`
3. Crear archivo de variables de entorno: `cp .env.example .env`
4. Crear llave: `php artisan key:generate`
5. Configurar nombre de base de datos en _.env_ y ejecutar migraciones: `php artisan migrate`
6. Crear link a public\storage: `php artisan storage:link`

## Licencia

[MIT license](https://opensource.org/licenses/MIT).
