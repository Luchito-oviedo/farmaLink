
<div align="center"><img src="fondos-pantallapc-gamer.jpg" alt="Imagen de Cabecera"></div>

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
    git clone https://github.com/Luchito-oviedo/farmaLink.git
    cd farmaLink
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

    Actualiza tu base de datos y otras configuraciones de entorno en el archivo `.env`, con el nombre de la base de datos `farmalink`.

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
Les dejo el script a ejecutar con los datos iniciales para la prueba en la carpeta `/scripts`.
```
