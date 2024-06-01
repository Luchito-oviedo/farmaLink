```markdown
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Comenzando

Estas instrucciones te proporcionarán una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas ya que valida el desarrollo del programador Luis Eduardo Barcasnegras para la solicitud del trabajo como desarrollador.

### Prerrequisitos

Necesitarás tener el siguiente software instalado en tu máquina:

- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Node.js y npm](https://nodejs.org/)

### Instalación

1. **Clona el repositorio:**

    ```sh
    git clone [https://github.com/tu-usuario/tu-repo.git](https://github.com/Luchito-oviedo/farmaLink.git)
    cd tu-repo
    ```

2. **Instala las dependencias:**

    ```sh
    composer install
    npm install
    npm run dev
    ```

3. **Configura tu archivo de entorno:**

    ```sh
    cp .env.example .env
    ```

4. **Genera la clave de la aplicación:**

    ```sh
    php artisan key:generate
    ```

5. **Configura tu archivo `.env`:**

    Actualiza tu base de datos y otras configuraciones de entorno en el archivo `.env`.
    con el nombre de la base de datos farmalink

### Ejecutar Migraciones

Para crear las tablas necesarias, ejecuta las migraciones de la base de datos:

```sh
php artisan migrate
```

### Ejecutar la Aplicación

Inicia el servidor de desarrollo local:

```sh
php artisan serve
```

Ahora puedes acceder al servidor en `http://localhost:8000`.

## Agradecimientos

Muchas gracias por la oportunidad comunidad FarmaLink, 
Les dejo el script a ejecutar con los datos iniciales para la prueba en la carpeta /scripts.

```
