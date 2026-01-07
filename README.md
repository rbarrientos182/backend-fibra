🐘 API de Gestión de Evidencias - Backend (Laravel)
Este es el servicio robusto desarrollado en PHP 8.x y Laravel 12 que sirve como motor de datos para el sistema de evidencias de Fibra Óptica. Utiliza Laravel Sanctum para una autenticación ligera y segura.

🛠️ Tecnologías utilizadas
PHP 8.x

Laravel Framework

Laravel Sanctum (Autenticación API)

MySQL / MariaDB

Artisan CLI

📋 Características del API
🔐 Sanctum Auth: Gestión de sesiones mediante Single Page Application (SPA) o Mobile Tokens.

📂 File Storage: Uso del sistema de archivos Storage de Laravel con links simbólicos para alto rendimiento.

⚡ Form Requests: Validaciones centralizadas y limpias para los datos de los técnicos.

🛠️ Eloquent ORM: Relaciones eficientes entre Técnicos y sus Evidencias.

🧹 API Resources: Transformación de datos para asegurar que el Frontend reciba exactamente lo que necesita.

🚀 Instalación y Configuración
Sigue estos pasos para configurar tu entorno de desarrollo:

1. Preparar el proyecto

# Clonar el proyecto
git clone https://github.com/tu-usuario/backend-laravel-fibra.git
cd backend-laravel-fibra

# Instalar dependencias de Composer
composer install

2. Configuración de Entorno
# Copiar el archivo de ejemplo
cp .env.example .env

# Generar la llave de la aplicación
php artisan key:generate

Nota: Configura tus credenciales de base de datos en el archivo .env antes de continuar.

3. Base de Datos y Enlace de Archivos

# Ejecutar migraciones y seeders (datos iniciales)
php artisan migrate --seed

# Crear el enlace simbólico para las imágenes
php artisan storage:link

4. Iniciar el servidor
php artisan serve

La API estará disponible por defecto en: http://127.0.0.1:8000/api/

📂 Endpoints Principales

Método,Endpoint,Descripción
POST,/api/login,Autenticación y retorno de Bearer Token
GET,/api/evidencias,Listado de capturas (Solo autenticados)
POST,/api/evidencias,Registro de nueva evidencia y carga de archivos
GET,/api/stats,Datos estadísticos para el Dashboard

📁 Estructura de Archivos Clave

app/Http/Controllers: Lógica del sistema.

app/Http/Requests: Validaciones de tamaño y tipo de imagen.

database/migrations: Estructura de la tabla de evidencias.

storage/app/public: Ubicación física de las fotos subidas.

🛠️ Comandos Útiles

Limpiar caché: php artisan config:clear

Refrescar Base de Datos: php artisan migrate:fresh --seed