# Proyecto de cursos

Proyecto para gestión de cursos, hecho a través del framework de PHP en Yii2.

## Instalación

 1. Clonar este repositorio utilizando el comando  ``https://github.com/AndreyPootMay/cursos.git``
 2. Ahora utilizando *composer* por medio de la línea de comandos, dirigirse al repositorio y correr el siguiente comando `composer install`.

## Configuración local

Con el proyecto clonado y las dependencias descargadas se debe iniciar el proyecto en el entorno adecuado.

1.  Ejecutar el comando `php init` para iniciar la aplicación en el entorno adecuado.
    
2.  Crear una nueva base de datos y ajustar la configuración de `components['db']` en el archivo `common/config/main-local.php` con los datos de la base de datos.

## RBAC

Primero y antes que nada hay que leer y entender [Autenticación](https://www.yiiframework.com/doc/guide/2.0/es/security-authentication) y [Autorización](https://www.yiiframework.com/doc/guide/2.0/es/security-authorization) especialmente [Control de Acceso Basado en Roles (RBAC)](https://www.yiiframework.com/doc/guide/2.0/es/security-authorization#rbac) de la guía de Yii2.

#### Construir los datos de Autorización

Construir los datos de autorización implica las siguientes tareas:

-   Definir roles y permisos;
-   Establecer relaciones entre roles y permisos;
-   Definir reglas;
-   Asociar reglas con roles y permisos;
-   Asignar roles a usuarios.

Esta guía en [Yii 2.0 Cookbook](https://yii2-cookbook.readthedocs.io/security-rbac/) explica cómo implementar y este [video](https://www.youtube.com/watch?v=vLb8YATO-HU) puede ser de buena referencia.

## Referencias
- [Documentación oficial de Yii 2.](https://www.yiiframework.com/doc/guide/2.0/es)
- [Íconos vía Font Awesome.](https://fontawesome.com/)
- [Modelo Vista Controlador - Video explicativo.](https://capacitateparaelempleo.org/pages.php?r=.tema&tagID=6725&load=6795)
-   [Yii2 Framework - RBAC Tutorial with Example | Part 1.](https://www.youtube.com/watch?v=7-jo8LKCnUk)
-   [Yii2 Framework RBAC Tutorial with Example | Part2 | Rules.](https://www.youtube.com/watch?v=rzoQoB9N3v8)
-  [Bootstrap 4.](https://getbootstrap.com/docs/4.0/getting-started/introduction/)
