# diarioelnacional_Possenti

Página Web de Diario - Curso de Fullstack Jr (UNLPam, Argentina Programa 4.0)

Este documento proporciona una descripción detallada del proyecto final desarrollado como parte del Curso de Fullstack Jr ofrecido por la Universidad Nacional de La Pampa (UNLPam) en el programa Argentina Programa 4.0. El proyecto consiste en la creación de una página web de un diario con funcionalidades de Frontend y Backend utilizando:

•	Bootstrap 5
•	estilos css personalizados
•	PHP
•	MySQL.

Estructura del Proyecto
Base de Datos

La aplicación utiliza una base de datos MySQL denominada diariodb, que consta de dos tablas:
usuarios: Almacena la información de los administradores del sistema, sus campos: id_usuario, nombre, apellido, usuario, password.

noticias: Contiene la información sobre las noticias, sus campos: id_noticia, id_usuario, título, copete, cuerpo, imagen, fecha, categoría.


Características Principales

El proyecto incluye las siguientes características destacadas:

URL Distintas: El portal y el sistema administrativo tienen URLs separadas para un acceso diferenciado.

Administradores del Sistema: Los administradores se almacenan en la base de datos y pueden realizar diversas acciones, como listar, dar de alta, eliminar, editar y resetear contraseñas.

Gestión de Noticias: Permite la administración completa de noticias, incluyendo listar, crear, editar y eliminar.

Orden de Noticias: Las noticias en el portal se presentan desde la más reciente hasta la más antigua.

Límite de Noticias: En el portal se muestran hasta un máximo de 10 noticias, con las más nuevas reemplazando automáticamente a las más antiguas si existen más de 10 noticias en la base de datos.

Página de Noticia Completa: Permite ver una noticia completa en una página separada, respetando el diseño del portal de inicio. Incluye la visualización del autor de la noticia.

Contraseñas Encriptadas: Las contraseñas de los administradores se almacenan en la base de datos de forma segura mediante encriptación.

Innovación Creativa Libre

Se utilizó tecnología Ajax para verificar la disponibilidad de nombres de usuario en tiempo real al crear nuevos usuarios.


Conclusión

Este proyecto final representa un logro significativo en la implementación de una página web de un diario con funcionalidades Fullstack utilizando PHP y MySQL. Las características cumplen con las consignas del curso.
Este proyecto ha sido realizado como parte del Curso de Fullstack Jr en el marco del programa Argentina Programa 4.0, proporcionando una valiosa experiencia en el desarrollo de aplicaciones web Fullstack.

Equipo de Desarrollo: Agustin Galasso, Lucas Possenti.
