# Sistema de Administración de Restaurantes (SAR)

Este proyecto es una aplicación desarrollada en Laravel 11 para gestionar la información de mesas, clientes y reservas en un restaurante. Incluye autenticación de usuarios mediante Laravel Breeze.

## Requisitos Previos

Antes de empezar, asegúrate de tener instalados los siguientes programas en tu sistema:

- [PHP](https://www.php.net/) (versión 8.0 o superior)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) y [npm](https://www.npmjs.com/)
- [MySQL](https://www.mysql.com/) o cualquier otra base de datos compatible

## Instalación

Sigue estos pasos para configurar y ejecutar el proyecto:

1. **Clona el repositorio:**
   ```bash
   git clone https://github.com/tu_usuario/nombre-del-repositorio.git
   cd nombre-del-repositorio
Instala las dependencias de PHP:

bash
Copiar código
composer install
Copia el archivo .env.example a .env:

bash
Copiar código
cp .env.example .env
Configura las variables de entorno en el archivo .env: Abre el archivo .env y configura los valores para tu base de datos. Por ejemplo:

env
Copiar código
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_la_base_de_datos
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
Genera la clave de aplicación:

bash
Copiar código
php artisan key:generate
Ejecuta las migraciones para crear las tablas en la base de datos:

bash
Copiar código
php artisan migrate
Instala las dependencias de JavaScript:

bash
Copiar código
npm install
Compila los archivos de JavaScript y CSS:

bash
Copiar código
npm run dev
Ejecución
Inicia el servidor de desarrollo:

bash
Copiar código
php artisan serve
Accede a la aplicación: Abre tu navegador web y ve a http://127.0.0.1:8000.

Registro e inicio de sesión:

Puedes registrarte como nuevo usuario o iniciar sesión con las credenciales que hayas creado.
Funcionalidades
Gestión de Mesas

Crear, leer, actualizar y eliminar mesas.
Gestión de Clientes

Crear, leer, actualizar y eliminar clientes.
Gestión de Reservas

Crear, leer, actualizar y eliminar reservas.
