<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-27 08:14:00 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-27 08:44:20 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-27 08:45:39 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-27 08:45:40 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-27 08:46:55 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-27 08:47:03 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-27 08:47:03 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-27 08:47:14 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-27 08:49:57 --> Severity: Notice --> Undefined index: userfile /var/www/html/restServerAtm/application/controllers/api/Usuario.php 532
ERROR - 2019-09-27 09:15:03 --> Severity: Notice --> Undefined index: country /var/www/html/restServerAtm/application/controllers/api/Datos.php 120
ERROR - 2019-09-27 09:15:03 --> Query error: ERROR:  no existe la columna «country» en la relación «datos»
LINE 1: ... 09:06:53', "updated_at" = '2019-09-27 09:15:03', "country" ...
                                                             ^ - Invalid query: UPDATE "datos" SET "id" = 2, "id_usuario" = 4, "id_country" = NULL, "name" = 'Ronald', "apellido_paterno" = 'Acha', "apellido_materno" = 'Ramos', "ci" = '5698745', "token" = NULL, "company" = 'GAMC', "address" = 'zona norte', "phone" = '75986874', "image" = 'racha2@cochabamba.bo.png', "thumbail" = 'racha2@cochabamba.bo.thumb.png', "created_at" = '2019-09-27 09:06:53', "updated_at" = '2019-09-27 09:15:03', "country" = NULL
WHERE "id" = 2
ERROR - 2019-09-27 09:15:46 --> Query error: ERROR:  no existe la columna «country» en la relación «datos»
LINE 1: ... 09:06:53', "updated_at" = '2019-09-27 09:15:46', "country" ...
                                                             ^ - Invalid query: UPDATE "datos" SET "id" = 2, "id_usuario" = 4, "id_country" = NULL, "name" = 'Ronald', "apellido_paterno" = 'Acha', "apellido_materno" = 'Ramos', "ci" = '5698745', "token" = NULL, "company" = 'GAMC', "address" = 'zona norte', "phone" = '75986874', "image" = 'racha2@cochabamba.bo.png', "thumbail" = 'racha2@cochabamba.bo.thumb.png', "created_at" = '2019-09-27 09:06:53', "updated_at" = '2019-09-27 09:15:46', "country" = '27'
WHERE "id" = 2
ERROR - 2019-09-27 09:22:54 --> Query error: ERROR:  no existe el tipo «ilike»
LINE 1: ...e, ae.ciiu FROM tipo_actividad_economica ae WHERE ilike(LOWE...
                                                             ^ - Invalid query: SELECT ae.name as label, ae.id as value, ae.ciiu FROM tipo_actividad_economica ae WHERE ilike(LOWER(ae.name) ) '%bar%' and ae.temporal = true;
ERROR - 2019-09-27 10:42:45 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-27 10:42:52 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-27 10:47:09 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-27 11:05:32 --> Severity: Notice --> Undefined variable: img /var/www/html/restServerAtm/application/controllers/ReportLicenciaActividadEconomica.php 78
ERROR - 2019-09-27 11:25:29 --> Severity: Notice --> Undefined variable: img /var/www/html/restServerAtm/application/controllers/ReportLicenciaActividadEconomica.php 78
ERROR - 2019-09-27 11:27:55 --> Severity: Notice --> Undefined variable: img /var/www/html/restServerAtm/application/controllers/ReportLicenciaActividadEconomica.php 78
ERROR - 2019-09-27 11:29:07 --> Severity: Notice --> Undefined variable: img /var/www/html/restServerAtm/application/controllers/ReportLicenciaActividadEconomica.php 78
ERROR - 2019-09-27 11:29:44 --> Severity: Notice --> Undefined variable: img /var/www/html/restServerAtm/application/controllers/ReportLicenciaActividadEconomica.php 78
ERROR - 2019-09-27 11:31:31 --> Severity: Notice --> Undefined variable: img /var/www/html/restServerAtm/application/controllers/ReportLicenciaActividadEconomica.php 78
ERROR - 2019-09-27 11:50:24 --> Severity: Notice --> Undefined variable: img /var/www/html/restServerAtm/application/controllers/ReportLicenciaActividadEconomica.php 78
ERROR - 2019-09-27 11:51:08 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 11:51:24 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 11:51:30 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 11:51:57 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 11:52:10 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 11:54:07 --> Severity: Notice --> Undefined variable: img /var/www/html/restServerAtm/application/controllers/ReportLicenciaActividadEconomica.php 78
ERROR - 2019-09-27 11:56:05 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 11:56:16 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 11:57:04 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 11:58:02 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 11:58:15 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 11:58:42 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 11:59:09 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 12:04:30 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 12:08:37 --> Severity: Notice --> Undefined variable: img /var/www/html/restServerAtm/application/controllers/ReportLicenciaActividadEconomica.php 78
ERROR - 2019-09-27 15:30:18 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 15:30:34 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 15:31:43 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 15:32:33 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 15:33:26 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 15:35:12 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 15:35:23 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 15:36:57 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 15:39:16 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 15:39:29 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 15:40:55 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 15:43:26 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 15:43:38 --> Could not find the language line "item_was_found"
ERROR - 2019-09-27 15:46:08 --> Could not find the language line "item_was_found"
