# Games4All · Tienda de videojuegos con Drupal

Proyecto académico en equipo (Universidad de Cádiz, 2024): tienda online de videojuegos construida con el CMS **Drupal**.

Trabajo en equipo de tres personas.

## Funcionalidades

- Catálogo de videojuegos y página de inicio de la tienda.
- Menú principal y menús de administración.
- Gestión de pedidos con filtros.
- Tarjetas de pago de los usuarios, con un **módulo propio** ([`modules/custom/add_card_block`](modules/custom/add_card_block)) que añade un bloque para registrar nuevas tarjetas.
- Sistema de descuentos.

## Mi aportación

Configuración inicial del proyecto, página de inicio, menús de administración y principal, descuentos, filtro de pedidos y gestión de tarjetas.

## Tecnologías

Drupal · PHP · Composer · MySQL · Twig

## Instalación local

1. Clona el repositorio y ejecuta `composer install`.
2. Crea una base de datos MySQL y configura la conexión en `sites/default/settings.php`.
3. Sirve la carpeta raíz con Apache o con `php -S localhost:8080` y completa el instalador de Drupal.

> Proyecto relacionado: [ci4-g4a](https://github.com/joseob97/ci4-g4a), la misma tienda desarrollada con CodeIgniter 4.
