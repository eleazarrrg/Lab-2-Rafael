# Proyecto Laravel

<p align="center">
  <img src="https://www.xtrafondos.com/wallpapers/personajes-de-anime-one-piece-13167.jpg" alt="Banner One Piece" width="900">
</p>

Este repositorio contiene el proyecto **Laravel** desarrollado como parte del **Laboratorio 2** de la asignatura *Sistemas Operativos / Ingeniería de Software*.

<p align="center">
  <img src="https://utp.ac.pa/sites/default/files/documentos/2023/imagen/logo_utp-rgb_2022.png" alt="Logo Universidad Tecnológica de Panamá" height="90">
</p>

---

## 📋 Tabla de Contenido
- [Requisitos](#-requisitos)
- [Instalación](#%EF%B8%8F-instalación)
- [Estructura del repositorio](#-estructura-del-repositorio)
- [Notas importantes](#-notas-importantes)
- [Autor](#-autor)

---

## 🛠️ Requisitos

Antes de iniciar, asegúrate de tener instalado:

- [PHP 8.x](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Node.js y npm](https://nodejs.org/) (para compilar los assets con Vite)
- [MySQL o MariaDB](https://www.mysql.com/) (base de datos)
- [WAMP/XAMPP](https://www.wampserver.com/) u otro stack para servidor local

---

## ⚙️ Instalación

1. **Clonar el repositorio:**
   ```bash
   git clone https://github.com/tuusuario/ejemplo-lab2.git
   cd ejemplo-lab2
   ```

2. **Instalar dependencias de PHP con Composer:**
   ```bash
   composer install
   ```

3. **Instalar dependencias de Node:**
   ```bash
   npm install
   ```

4. **Configurar el archivo de entorno:**
   ```bash
   cp .env.example .env
   ```
   > Edita el `.env` con tus credenciales de base de datos (DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD).

5. **Generar la clave de la aplicación:**
   ```bash
   php artisan key:generate
   ```

6. **Ejecutar migraciones:**
   ```bash
   php artisan migrate
   ```

7. **Levantar el servidor de desarrollo:**
   ```bash
   php artisan serve
   ```
   El proyecto estará disponible en: **[http://localhost:8000](http://localhost:8000)**

---

## 📂 Estructura del repositorio

| Carpeta / Archivo        | Descripción                                                              |
|--------------------------|--------------------------------------------------------------------------|
| `app/`                   | Lógica principal de la aplicación (modelos, controladores).              |
| `resources/views/`       | Vistas Blade.                                                            |
| `routes/web.php`         | Definición de rutas web.                                                 |
| `database/migrations/`   | Migraciones para crear tablas.                                           |
| `public/`                | Archivos públicos (CSS, JS compilados, imágenes).                        |

---

## 💡 Notas importantes

- No se debe subir el archivo `.env` al repositorio.
- Los directorios `vendor/` y `node_modules/` están ignorados por `.gitignore`.
- Para compartir variables de entorno, usa el archivo `.env.example`.

---

## 👨‍💻 Autor

- **Rafael Gómez**  
  Estudiante de Ingeniería de Software, Universidad Tecnológica de Panamá

---

<p align="center">
  Hecho con ❤️ por Rafael — Laravel + Vite
</p>
