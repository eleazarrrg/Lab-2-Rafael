# 🌊 Proyecto Laravel – Login en Laravel
**Universidad Tecnológica de Panamá**  
**Facultad de Ingeniería En Sistemas Computacionales – Campus Víctor Levi Sasso**  
**Asignatura:** Ingeniería Web – II Semestre 2025  
**Instructor:** Ing. Irina Fong  

<p align="center">
  <img src="https://www.xtrafondos.com/wallpapers/personajes-de-anime-one-piece-13167.jpg" alt="Banner One Piece" width="900">
</p>

Este repositorio documenta el **Laboratorio #2 – Implementación del Login en Laravel**, donde se aplica la arquitectura **Modelo–Vista–Controlador (MVC)**.  
El objetivo es comprender la importancia de la documentación en proyectos de desarrollo de software, reforzar el aprendizaje de MVC y evidenciar el proceso de configuración e implementación de un módulo de autenticación (login) en Laravel.

<p align="center">
  <img src="https://utp.ac.pa/sites/default/files/documentos/2023/imagen/logo_utp-rgb_2022.png" alt="Logo Universidad Tecnológica de Panamá" height="90">
</p>

---

## 📋 Tabla de Contenido
- [Requisitos](#-requisitos)
- [Instalación](#%EF%B8%8F-instalación)
- [Arquitectura MVC](#%EF%B8%8F-arquitectura-mvc)
- [Resultado del laboratorio](#-resultado-del-laboratorio)
- [Base de Datos](#-base-de-datos)
- [Dificultades y Soluciones](#-dificultades-y-soluciones)
- [Referencias](#-referencias)
- [Fecha de Ejecución](#-fecha-de-ejecución)
- [Autor](#-autor)

---

## 🛠️ Requisitos

Antes de iniciar, asegúrate de tener instalado:

- [PHP 8.x](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Node.js y npm](https://nodejs.org/) (para compilar los assets con Vite)
- [MySQL o MariaDB](https://www.mysql.com/) (base de datos)
- [WAMP/XAMPP](https://www.wampserver.com/) u otro stack para servidor local
- [Git](https://git-scm.com/)

### Instalación de dependencias
```bash
composer install
npm install
```

---

## ⚙️ Instalación y comandos utilizados

1. **Clonar el repositorio:**
   ```bash
   git clone https://github.com/tuusuario/ejemplo-lab2.git
   cd ejemplo-lab2
   ```

2. **Instalar dependencias de PHP:**
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
   > Editar el archivo `.env` con las credenciales de base de datos.

5. **Generar la clave de la aplicación:**
   ```bash
   php artisan key:generate
   ```

6. **Instalar autenticación y compilar assets:**
   ```bash
   composer require laravel/ui
   php artisan ui bootstrap --auth
   npm install && npm run dev
   php artisan migrate
   ```

7. **Levantar el servidor de desarrollo:**
   ```bash
   php artisan serve
   ```
   El proyecto estará disponible en: **[http://localhost:8000](http://localhost:8000)**

---

## 🗂️ Arquitectura MVC

- **Models (`app/Models/`)**: Representan las tablas de la base de datos.
- **Views (`resources/views/`)**: Vistas Blade para la interfaz de usuario.
- **Controllers (`app/Http/Controllers/`)**: Lógica entre el modelo y la vista.
- **Routes (`routes/web.php`)**: Define las rutas que conectan con los controladores.

---

## 🖼️ Resultado del laboratorio

Incluye aquí una **captura de pantalla** de la página de login funcionando.  
Puedes añadir más imágenes si deseas mostrar diferentes pantallas.

---

## 🗃️ Base de Datos

- Configuración en el archivo `.env`:
  ```
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=login_laravel
  DB_USERNAME=root
  DB_PASSWORD=
  ```

- Migraciones ejecutadas:
  ```bash
  php artisan migrate
  ```

- Se adjunta un **respaldo (backup)** en la carpeta `/database/backup/` del repositorio.

---

## 🚧 Dificultades y Soluciones

**Dificultad 1 – Tablas creadas con MyISAM en lugar de InnoDB**  
- *Problema:* Las migraciones generaban tablas con motor MyISAM, impidiendo usar claves foráneas.  
- *Causa:* El motor por defecto en MySQL/MariaDB estaba configurado como MyISAM.  
- *Solución:* Cambié el motor a InnoDB desde phpMyAdmin, eliminé la base de datos y volví a ejecutar `php artisan migrate`.

**Dificultad 2 – Node / npm / npx no reconocidos aun usando nvm-windows**  
- *Problema:* Los comandos `node -v`, `npm -v`, `npx -v` no funcionaban en PowerShell.  
- *Causa:* Enlaces simbólicos (NVM_SYMLINK) y variables de entorno PATH mal configuradas.  
- *Solución:* Reinstalé y activé la versión con `nvm install` y `nvm use`, ajusté el PATH y eliminé instalaciones antiguas de Node.

**Dificultad 3 – Políticas de PowerShell bloqueando scripts .ps1 de npm/npx**  
- *Problema:* Al ejecutar `npm install` o `npm run dev`, aparecía el error “npm.ps1 no se puede cargar…”.  
- *Causa:* La política de PowerShell impedía la ejecución de scripts sin firma.  
- *Solución:* Ejecuté PowerShell como administrador y cambié la política con:  
  ```powershell
  Set-ExecutionPolicy -Scope CurrentUser -ExecutionPolicy RemoteSigned -Force
  ```

---

## ✨ Aprendizajes

- **Comprender la infraestructura subyacente**  
  Aprendí que Laravel depende de la configuración de base de datos, sistema operativo y extensiones. Un simple detalle, como que MySQL use MyISAM, puede bloquear migraciones.

- **Dominio de entornos y versiones**  
  El uso de nvm-windows demostró la importancia de gestionar versiones de Node.js y documentar rutas y dependencias para mantener estabilidad y portabilidad.

- **Seguridad y políticas del sistema**  
  Ajustar las Execution Policies de PowerShell mostró cómo equilibrar seguridad y productividad en el desarrollo.

> En conjunto, estas experiencias me dieron mayor confianza para montar y cuidar proyectos desde cero, resolviendo problemas de infraestructura y no solo de código.

---

## 🔗 Referencias

1. [Documentación oficial de Laravel](https://laravel.com/docs)
2. [Guía de Autenticación Laravel UI](https://laravel.com/docs/8.x/authentication)
3. [Video de Profesora Irina](https://www.youtube.com/watch?v=GZMGyYNq3hE)

---

## 📅 Fecha de ejecución

- **Inicio del laboratorio:** 22 de septiembre de 2025  
- **Finalización:** *Aún en proceso, seguiremos trabajando!*

---

## 👨‍💻 Autor

> Este laboratorio ha sido desarrollado por el estudiante de la **Universidad Tecnológica de Panamá**:

- **Nombre:** Rafael Gómez  
- **Correo:** *rafael.gomez2@utp.ac.pa*  
- **Curso:** Ingeniería Web  
- **Instructor del laboratorio:** Ing. Irina Fong  

---

<p align="center">
  Hecho con ❤️ por Rafael 💗 Gleismar, mi esposa 💗
</p>
