# Moodia

Moodia es el nombre de la aplicación presentada como Trabajo Fin de Ciclo para el Grado Superior de Aplicaciones Web del <a href="https://github.com/CPIFPAlanTuring">CPIFP Alan Turing </a>de Málaga.

Los requisitos principales del proyecto son la realización del backend de la aplicación en Laravel y MySQL y para el frontend que la aplicación esté realizada en React. En mi aplicación, existen los roles Usuario y Administrador, cada uno con sus permisos adaptados y protección de rutas mediante autenticación JWT.

<a href="https://github.com/CPIFPAlanTuring/2daw-tfc-2324/wiki">Requisitos completos del proyecto.</a>

## Proyecto

El proyecto se encuentra alojado en dos instancias EC2 del laboratorio de pruebas de AWS.

- Repositorio frontend en React: <a href="https://github.com/Juanma-Gutierrez/frontend-moodia">Github</a>
- Repositorio backend en Laravel: <a href="https://github.com/Juanma-Gutierrez/backend-moodia">Github</a>
- Documentación del proyecto: <a href="https://juanma-gutierrez.notion.site/Documento-oficial-del-proyecto-TFC-Moodia-11bcb31b28838095a3dff81dc902218b?pvs=4">Notion</a>
- Video demostración de la aplicación: <a href="https://www.youtube.com/watch?v=9Qua3hluos0">Youtube</a>

## **Resumen del Backend de Moodia**

El backend de **Moodia** está desarrollado en **Laravel 11**, un framework PHP moderno que permite la creación de aplicaciones web robustas y escalables. Esta **API REST** está diseñada para gestionar los estados de ánimo de los usuarios a través de publicaciones diarias, con autenticación basada en **Laravel Sanctum** y **JWT**. Se utiliza **MySQL** como sistema de gestión de base de datos y se han definido modelos, controladores, migraciones y seeders para estructurar y gestionar los datos.

## Capturas de pantalla de la aplicación en formato escritorio
<img src="https://github.com/user-attachments/assets/fa4798e7-3af7-4f73-8a08-c1435772ab44" width="800px">
<img src="https://github.com/user-attachments/assets/7a3bbf0f-a351-459f-8b2f-2eb83eea2e50" width="800px">
<img src="https://github.com/user-attachments/assets/05f4b72e-4a73-41d8-9d5b-43dbc7d7a183" width="800px">
<img src="https://github.com/user-attachments/assets/f4ac6973-318d-404d-94fc-464eb9b861fe" width="800px">
<img src="https://github.com/user-attachments/assets/c619e082-1151-4ebd-8519-f255554f3490" width="800px">
<img src="https://github.com/user-attachments/assets/e0ebd4c5-6d0f-4a63-8275-e864f29744ca" width="800px">
<img src="https://github.com/user-attachments/assets/cf09f98f-4901-4576-b9c6-7968fd44a48d" width="800px">
<img src="https://github.com/user-attachments/assets/9feb6d5f-a7bc-49a6-895b-f7c200abea7c" width="800px">

## Capturas de pantalla de la aplicación en formato móvil

<img src="https://github.com/user-attachments/assets/c79a5c43-5235-4b48-8ff7-b26ccf8820a8" width="300px">
<img src="https://github.com/user-attachments/assets/62320da4-b8b1-4ec5-86a9-d2be882d9d85" width="300px">
<img src="https://github.com/user-attachments/assets/e3b01dd5-ca03-4735-9566-2588db1e5332" width="300px">
<img src="https://github.com/user-attachments/assets/fb952cf8-9a17-4dde-956f-8c90093d95ac" width="300px">
<img src="https://github.com/user-attachments/assets/e13fe26c-bd12-4637-b03d-fda140e1f633" width="300px">
<img src="https://github.com/user-attachments/assets/265f1f48-9834-493f-b7c1-c4535ae89717" width="300px">

## **Estructura del Backend**

El backend se organiza en varias capas, cada una con una función específica. A continuación, se describen sus principales componentes:

### **1. Modelos**

Los modelos en Laravel representan las tablas en la base de datos y se encargan de gestionar las relaciones entre los datos.

### **Modelos principales:**

- `User.php`
    - Representa a los usuarios registrados en la aplicación.
    - Implementa la autenticación con **JWT**, permitiendo a los usuarios iniciar sesión y mantener su sesión activa.
    - Relación uno a uno con `ExtendedUser`.
    - Relación uno a muchos con `Post` (a través de `ExtendedUser`).
- `ExtendedUser.php`
    - Almacena información adicional de los usuarios, como su fecha de nacimiento, estado civil, género, rol y empleo.
    - Se enlaza con `User` mediante una relación uno a uno.
- `Post.php`
    - Representa las publicaciones que los usuarios realizan diariamente.
    - Cada publicación contiene un título, un mensaje, una puntuación (`score`) que indica el estado de ánimo del usuario y categorías asociadas.
    - Relación muchos a muchos con `Category` a través de la tabla `HasCategory`.
- `Category.php`
    - Define las categorías de las publicaciones (ej. "Trabajo", "Ejercicio", "Relaciones", etc.).
    - Relación muchos a muchos con `Post` mediante `HasCategory`.
- `Challenge.php`
    - Almacena retos o desafíos diarios para los usuarios.
    - Relación con `Category` para clasificar los desafíos.
- `InspiringPhrase.php`
    - Contiene frases inspiradoras que se pueden mostrar a los usuarios.
    - Relación con `Category` para organizar las frases.
- `Role.php`
    - Gestiona los roles de los usuarios dentro del sistema (ej. usuario estándar, administrador).

### **2. Controladores**

Los controladores gestionan la lógica de negocio de la aplicación, procesando las peticiones de los clientes (React) y devolviendo las respuestas correspondientes.

### **Controladores principales:**

- `AuthController.php`
    - Implementa la autenticación con JWT.
    - Funciones principales:
        - `register()`: Registra un usuario, almacena sus datos en `users` y `extended_user`, y devuelve un token JWT.
        - `login()`: Verifica las credenciales del usuario y genera un token JWT.
        - `logout()`: Invalida el token actual del usuario.
        - `me()`: Devuelve la información del usuario autenticado.
- `UserController.php`
    - Gestiona la información de los usuarios.
    - `getUsersWithAvgScores()`: Obtiene una lista de usuarios con su información extendida y el puntaje promedio de sus publicaciones.
- `PostController.php`
    - Maneja las publicaciones de los usuarios.
    - Funciones principales:
        - `list()`: Devuelve todas las publicaciones de un usuario autenticado.
        - `store()`: Crea una nueva publicación con sus categorías asociadas.
        - `get()`: Obtiene una publicación específica.
        - `update()`: Permite editar una publicación existente.
        - `destroy()`: Elimina una publicación.
- `CategoryController.php`
    - Devuelve todas las categorías disponibles.
- `ChallengeController.php`
    - Recupera la lista de desafíos disponibles.
- `InspiringPhraseController.php`
    - Devuelve frases inspiradoras almacenadas en la base de datos.

### **3. Migraciones y Seeders**

Las migraciones definen la estructura de la base de datos, mientras que los seeders insertan datos iniciales para su uso en desarrollo.

### **Migraciones clave:**

- `create_users_table.php`: Crea la tabla de usuarios.
- `create_extended_user_table.php`: Almacena información adicional de los usuarios.
- `create_post_table.php`: Define la estructura de las publicaciones.
- `create_category_table.php`: Crea la tabla de categorías.
- `create_challenge_table.php`: Define la estructura de los desafíos.
- `create_inspiring_phrase_table.php`: Estructura para almacenar frases inspiradoras.

### **Seeders principales:**

- `UserSeeder.php`: Crea usuarios de prueba.
- `PostSeeder.php`: Genera publicaciones de prueba.
- `CategorySeeder.php`: Inserta categorías predefinidas.
- `ChallengeSeeder.php`: Agrega desafíos a la base de datos.
- `InspiringPhraseSeeder.php`: Inserta frases inspiradoras.

### **4. Rutas API**

Las rutas de la API están definidas en `routes/api.php` y permiten acceder a los diferentes endpoints del sistema.

### **Endpoints principales:**

| Método | Ruta | Descripción |
| --- | --- | --- |
| POST | `/api/register` | Registra un nuevo usuario |
| POST | `/api/login` | Inicia sesión y devuelve un token JWT |
| POST | `/api/logout` | Cierra sesión del usuario |
| GET | `/api/me` | Obtiene la información del usuario autenticado |
| GET | `/api/posts` | Lista todas las publicaciones del usuario |
| POST | `/api/posts` | Crea una nueva publicación |
| GET | `/api/posts/{id}` | Obtiene los detalles de una publicación |
| PUT | `/api/posts/{id}` | Actualiza una publicación |
| DELETE | `/api/posts/{id}` | Elimina una publicación |
| GET | `/api/categories` | Obtiene todas las categorías |
| GET | `/api/challenges` | Recupera todos los desafíos |
| GET | `/api/inspiring-phrases` | Obtiene frases inspiradoras |

### **5. Seguridad y Autenticación**

- Se utiliza **JWT (JSON Web Token)** para gestionar la autenticación de los usuarios.
- Se han implementado **middlewares** para proteger rutas sensibles y evitar accesos no autorizados.
- Los usuarios solo pueden ver y modificar sus propias publicaciones.
