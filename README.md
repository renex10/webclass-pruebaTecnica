<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://www.webclass.cl/wp-content/uploads/2023/10/cropped-cropped-cropped-webclass-logo-746x192-1-1.png" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://www.webclass.cl/wp-content/uploads/2023/10/cropped-cropped-cropped-webclass-logo-746x192-1-1.png" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Nombre del Proyecto

sistema educacional 
## Instalación

Sigue estos pasos para instalar y configurar el proyecto:

1. **Clona el repositorio:**

   ```bash
   git clone https://github.com/renex10/webclass-pruebaTecnica.git
   cd webclass-pruebaTecnica

2. instalar las despendecias del backend

```bash
composer install
```

3. Copia el archivo .env.example y renómbralo a .env: 
```bash
cp .env.example .env
```

4. Genera la clave de aplicación:
```bash
php artisan key:generate
```

5. Ejecuta las migraciones y siembras la base de datos:
```bash
php artisan migrate:refresh --seed
```

6. Instala las dependencias de frontend:
```bash
npm install
```

7. Compila los los estilos de tailwind y alpine js para el dashboard:
```bash
npm run build
```
8. servidor de desarrollo 
```bash
php artisan serve
```



###credenciales adicionales una vez agregadas los seeder, estas credenciales estan agregadas ya por defecto###

            'name'=> richard,
            'email'=> richard@gmail.com,
            'password'=>richard
  

     
            'name'=>fernando,
            'email'=>fernando@gmail.com,
            'password'=>fernando'
        