
### Requisitos:
1. Tener instalado xampp o equivalente (Se uso la version 8.2.4).
2. Tener instalado node.js (Se uso la version 18.17.1 LTS).
3. Tener instalado vs code o equivalente.


### Pasos para ejectuar el proyecto:
1. Crear una base de datos en mysql con nombre "crud-app".
2. Abrir una consola de preferencia en el editor de codigo.
3. Ejecutar las migraciones con el comando "php artisan migrate".
4. En caso de fallar el paso anterior ejecutar el comando "php artisan migrate:reset" y repetir el paso 3.
5. Ejecutar el comando "php artisan serve" para iniciar el servidor.
6. Abrir una segunda consola y ejecutar el comando "npm run dev", dejar corriendo en 2do plano.
6. Inicio de sesion y registro estan funcionando, cree un usuario para poder acceder al CRUD.
7. Una vez logeado ya puede validar el funcionamiento del listar, crear, editar y eliminar.


### A tener en cuenta:
1. Se trabajo con las credenciales por defecto de mysql.
2. Por la tematica de estudiantes se opto de que al momento de registrar se pueda subir una imagen
con un peso no mayor a 4mb ademas de que esta debe tener formato jpeg, png o jpg.
3. La foto es el unico campo no requirido al registrar.
4. Se habilito paginado por cada 3 registros.