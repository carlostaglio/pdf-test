# pdf-test
Módulo de creación de PDF realizado en Laravel

## Pasos previos

1. Contar con PHP y Composer instalados, se recomienda instalar Herd que incluye ambos:
- [click para descargar Herd](https://herd.laravel.com/windows)

2. Clonar el repositorio dentro de la carpeta Herd \Users\{usuario}\Herd

3. Dentro del directorio abrir una consola y correr el comando
```bash
  composer install
```
4. Copiar el archivo .env.example  y renombrarlo como .env
5. Configurar la contraseña de la base de datos mysql en el archivo .env. En este caso dejar sólo mysql y comentar los demás campos de base de datos
6. Colocar los siguiente comandos en la consola:

```bash
php artisan key:generate
php artisan migrate
```

## Ejecución
1. Ejecutar el comando:
```bash
php artisan serve
```
2. Por defecto el host es:
```bash
http://127.0.0.1:8000/
```

## Endpoints
```bash
GET
/                           Portada de Laravel
/test                       Muestra la página modelo del pdf de prueba
/api/test-pdf               Descarga el pdf de prueba
/formulario                 Formulario para generar pdf

POST
/api/visita-pdf             Genera el pdf de constancia de visita, solicita los campos:
{
  "empresa": string(30),
  "razon social": string(30),
  "cuit": string(30),
  "direccion": string(50),
  "localidad": string(30),
  "motivo": string(rutina|capacitacion|ambiente|otros),
  "observaciones": string(3000),
}
```

## Autor

- [@carlostaglio](https://github.com/carlostaglio)

