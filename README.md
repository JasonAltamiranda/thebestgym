# The Best Gym - Sistema de Gestión

Sistema web para la gestión de un gimnasio. Permite administrar socios, planes, pagos, asistencias, clases con cupos y turnos, instructores y usuarios del sistema, con vistas diferentes según el rol.

Proyecto realizado en equipo como trabajo académico.

## Funcionalidades

**Administrador y recepción**
- Panel con métricas: socios activos, asistencias y pagos
- Gestión de socios y de planes de membresía
- Registro de asistencias y de pagos, con historial
- Gestión de usuarios e instructores
- Envío de credenciales por email a nuevos usuarios y socios

**Socios**
- Consulta del plan, vencimiento y estado
- Reserva, cancelación y modificación de turnos en clases, con control de cupos
- Objetivos y seguimiento
- Edición del perfil y del contacto de emergencia

## Tecnologías

- Frontend: HTML5, CSS3 y JavaScript (sin frameworks)
- Backend: PHP con PDO
- Base de datos: MySQL / MariaDB
- Email: PHPMailer
- Íconos: Font Awesome 6.4

## Estructura

```
index.html, script.js, styles.css   Interfaz y lógica del cliente
api/                                Endpoints PHP (socios, planes, pagos, clases, etc.)
sql/                                Estructura y datos de ejemplo de la base de datos
db_connection.php                   Conexión a la base de datos
email_config.php, EmailService.php  Configuración y envío de emails
```

## Cómo ejecutarlo

1. Instalar [XAMPP](https://www.apachefriends.org/) e iniciar Apache y MySQL.
2. Copiar la carpeta del proyecto dentro de `htdocs`.
3. Crear la base de datos e importar `sql/database_structure.sql` y, si querés datos de prueba, `sql/database_data.sql`.
4. Revisar los datos de conexión (host, puerto, usuario y base) en `db_connection.php`. El proyecto está configurado para el puerto 3307.
5. Abrir el proyecto desde `http://localhost/` en el navegador.

### Configuración de email (opcional)

Los datos de envío están en `email_config.php`. Para usar Gmail:

1. Activar la verificación en 2 pasos en tu cuenta de Google.
2. Ir a Seguridad > Contraseñas de aplicaciones y generar una para este proyecto.
3. Cargar tu email y esa contraseña de aplicación en `email_config.php`.

Con Outlook/Hotmail o Yahoo se usa el puerto 587 y el servidor SMTP de cada proveedor.

## Datos de demostración

Todos los datos, usuarios y credenciales incluidos en el repositorio (archivos SQL y configuración) son de demostración.

## Equipo

Proyecto desarrollado en conjunto con [GonzaloArayaa](https://github.com/GonzaloArayaa).
