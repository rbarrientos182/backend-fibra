🐘 API de Gestión de Evidencias - Backend (Laravel)Este es el servicio robusto desarrollado en PHP 8.x y Laravel 11 que sirve como motor de datos para el sistema de evidencias de Fibra Óptica. Utiliza Laravel Sanctum para una autenticación ligera y segura.🛠️ Tecnologías utilizadasPHP 8.xLaravel FrameworkLaravel Sanctum (Autenticación API)MySQL / MariaDBArtisan CLI📋 Características del API🔐 Sanctum Auth: Gestión de sesiones mediante Single Page Application (SPA) o Mobile Tokens.📂 File Storage: Uso del sistema de archivos Storage de Laravel con links simbólicos para alto rendimiento.⚡ Form Requests: Validaciones centralizadas y limpias para los datos de los técnicos.🛠️ Eloquent ORM: Relaciones eficientes entre Técnicos y sus Evidencias.🧹 API Resources: Transformación de datos para asegurar que el Frontend reciba exactamente lo que necesita.🚀 Instalación y ConfiguraciónSigue estos pasos para configurar tu entorno de desarrollo:1. Preparar el proyectoBash# Clonar el proyecto
git clone https://github.com/tu-usuario/backend-laravel-fibra.git
cd backend-laravel-fibra

# Instalar dependencias de Composer
composer install
2. Configuración de EntornoBash# Copiar el archivo de ejemplo
cp .env.example .env

# Generar la llave de la aplicación
php artisan key:generate
Nota: Configura tus credenciales de base de datos en el archivo .env antes de continuar.3. Base de Datos y Enlace de ArchivosBash# Ejecutar migraciones y seeders (datos iniciales)
php artisan migrate --seed

# Crear el enlace simbólico para las imágenes
php artisan storage:link
4. Iniciar el servidorBashphp artisan serve
La API estará disponible por defecto en: http://127.0.0.1:8000/api/📂 Endpoints PrincipalesMétodoEndpointDescripciónPOST/api/loginAutenticación y retorno de Bearer TokenGET/api/evidenciasListado de capturas (Solo autenticados)POST/api/evidenciasRegistro de nueva evidencia y carga de archivosGET/api/statsDatos estadísticos para el Dashboard📁 Estructura de Archivos Claveapp/Http/Controllers: Lógica del sistema.app/Http/Requests: Validaciones de tamaño y tipo de imagen.database/migrations: Estructura de la tabla de evidencias.storage/app/public: Ubicación física de las fotos subidas.🛠️ Comandos ÚtilesLimpiar caché: php artisan config:clearRefrescar Base de Datos: php artisan migrate:fresh --seed