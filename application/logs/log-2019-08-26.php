<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-08-26 09:00:36 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Usuario.php 64
ERROR - 2019-08-26 09:00:36 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-26 09:01:40 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-26 09:01:46 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-26 09:05:30 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-26 09:05:36 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-26 09:18:20 --> Query error: ERROR:  no existe la relación «usuario_rol»
LINE 3: JOIN "usuario_rol" "ur" ON "usuarioid" = "ur"."id_usuario"
             ^ - Invalid query: SELECT *
FROM "usuario"
JOIN "usuario_rol" "ur" ON "usuarioid" = "ur"."id_usuario"
JOIN "rol" "r" ON "ur"."id_rol" = "r"."id"
WHERE "username" = 'admin@gmail.com'
AND "password" = 'e10adc3949ba59abbe56e057f20f883e'
ERROR - 2019-08-26 09:18:20 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-26 09:18:40 --> Query error: ERROR:  no existe la relación «usuario_rol»
LINE 3: JOIN "usuario_rol" "ur" ON "usuarioid" = "ur"."id_usuario"
             ^ - Invalid query: SELECT *
FROM "usuario"
JOIN "usuario_rol" "ur" ON "usuarioid" = "ur"."id_usuario"
JOIN "rol" "r" ON "ur"."id_rol" = "r"."id"
WHERE "username" = 'admin@gmail.com'
AND "password" = 'e10adc3949ba59abbe56e057f20f883e'
ERROR - 2019-08-26 09:18:54 --> Query error: ERROR:  no existe la columna «usuarioid»
LINE 3: JOIN "rol_usuario" "ru" ON "usuarioid" = "ru"."id_usuario"
                                   ^ - Invalid query: SELECT *
FROM "usuario"
JOIN "rol_usuario" "ru" ON "usuarioid" = "ru"."id_usuario"
JOIN "rol" "r" ON "ur"."id_rol" = "r"."id"
WHERE "username" = 'admin@gmail.com'
AND "password" = 'e10adc3949ba59abbe56e057f20f883e'
ERROR - 2019-08-26 09:19:21 --> Query error: ERROR:  falta una entrada para la tabla «ur» en la cláusula FROM
LINE 4: JOIN "rol" "r" ON "ur"."id_rol" = "r"."id"
                          ^ - Invalid query: SELECT *
FROM "usuario"
JOIN "rol_usuario" "ru" ON "usuario"."id" = "ru"."id_usuario"
JOIN "rol" "r" ON "ur"."id_rol" = "r"."id"
WHERE "username" = 'admin@gmail.com'
AND "password" = 'e10adc3949ba59abbe56e057f20f883e'
ERROR - 2019-08-26 09:19:47 --> Severity: Notice --> Undefined property: stdClass::$activo /var/www/html/restServerAtm/application/controllers/api/Usuario.php 145
ERROR - 2019-08-26 09:19:47 --> Severity: Notice --> Undefined variable: user_token /var/www/html/restServerAtm/application/controllers/api/Usuario.php 167
ERROR - 2019-08-26 09:22:56 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 196
ERROR - 2019-08-26 09:22:56 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 201
ERROR - 2019-08-26 09:22:56 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 210
ERROR - 2019-08-26 09:23:12 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 196
ERROR - 2019-08-26 09:23:12 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 201
ERROR - 2019-08-26 09:23:12 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 210
ERROR - 2019-08-26 09:24:59 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 197
ERROR - 2019-08-26 09:24:59 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 202
ERROR - 2019-08-26 09:24:59 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 211
ERROR - 2019-08-26 09:37:48 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-26 09:37:58 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-26 09:38:11 --> Could not find the language line "item_was_found"
ERROR - 2019-08-26 09:38:38 --> Query error: ERROR:  no existe la columna «num_inmueble» en la relación «actividad_economica»
LINE 1: ... 09:34:31', "updated_at" = '2019-08-26 09:38:38', "num_inmue...
                                                             ^ - Invalid query: UPDATE "actividad_economica" SET "id" = 4, "id_tipo_actividad" = 483, "id_estado" = 11, "id_usuario" = 1, "rotulo_comercial" = 'Anita', "numero" = NULL, "predio" = '0006178001000000000', "catastro" = '001', "superficie" = '95.549612', "fecha_inicio" = '25-08-2019', "comuna" = 'MOLLE', "distrito" = '4', "sub_distrito" = 'HIPODROMO', "perimetro" = NULL, "created_at" = '2019-08-26 09:34:31', "updated_at" = '2019-08-26 09:38:38', "num_inmueble" = '112367'
WHERE "id" = 4
ERROR - 2019-08-26 09:39:32 --> Query error: ERROR:  no existe la columna «numero» en la relación «domicilio_actividad_economica»
LINE 1: ...lio_actividad_economica" ("avenida", "direccion", "numero", ...
                                                             ^ - Invalid query: INSERT INTO "domicilio_actividad_economica" ("avenida", "direccion", "numero", "zona", "edificio", "bloque", "piso", "dpto_of_local", "telefono", "celular", "latitud", "longitud", "coordinate", "image", "id_actividad_economica", "id_usuario", "created_at", "updated_at") VALUES ('on', '1', '1', '7', '1', '1', '1', '1', '1', '1', '7.186518431228971', '58.50708402034266', '799999.5723408844,8074603.030642818', '', 4, 1, '2019-08-26 09:39:32', '2019-08-26 09:39:32')
ERROR - 2019-08-26 09:39:38 --> Query error: ERROR:  no existe la columna «numero» en la relación «domicilio_actividad_economica»
LINE 1: ...lio_actividad_economica" ("avenida", "direccion", "numero", ...
                                                             ^ - Invalid query: INSERT INTO "domicilio_actividad_economica" ("avenida", "direccion", "numero", "zona", "edificio", "bloque", "piso", "dpto_of_local", "telefono", "celular", "latitud", "longitud", "coordinate", "image", "id_actividad_economica", "id_usuario", "created_at", "updated_at") VALUES ('on', '1', '1', '7', '1', '1', '1', '1', '1', '1', '7.186518431228971', '58.50708402034266', '799999.5723408844,8074603.030642818', '', 4, 1, '2019-08-26 09:39:38', '2019-08-26 09:39:38')
ERROR - 2019-08-26 09:52:45 --> Could not find the language line "item_was_found"
ERROR - 2019-08-26 10:05:08 --> Severity: error --> Exception: Class 'PHPJasper\Exception\InvalidInputFile' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 71
ERROR - 2019-08-26 10:10:44 --> Severity: error --> Exception: Class 'PHPJasper\Exception\InvalidInputFile' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 71
ERROR - 2019-08-26 10:11:54 --> Severity: error --> Exception: Class 'PHPJasper\Exception\InvalidInputFile' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 71
ERROR - 2019-08-26 10:13:23 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ',' or ')' /var/www/html/restServerAtm/application/controllers/api/Report.php 60
ERROR - 2019-08-26 16:47:07 --> Severity: Notice --> Undefined property: Report::$ActividadEconomica_model /var/www/html/restServerAtm/application/controllers/api/Report.php 68
ERROR - 2019-08-26 16:47:08 --> Severity: error --> Exception: Call to a member function getById() on null /var/www/html/restServerAtm/application/controllers/api/Report.php 68
ERROR - 2019-08-26 16:47:57 --> Severity: Notice --> Undefined property: Report::$ActividadEconomica_model /var/www/html/restServerAtm/application/controllers/api/Report.php 68
ERROR - 2019-08-26 16:47:57 --> Severity: error --> Exception: Call to a member function getById() on null /var/www/html/restServerAtm/application/controllers/api/Report.php 68
ERROR - 2019-08-26 16:56:25 --> 404 Page Not Found: api/Declaraciones-juradas/aprobar
ERROR - 2019-08-26 16:56:54 --> 404 Page Not Found: api/Declaraciones-juradas/aprobar
ERROR - 2019-08-26 18:17:20 --> Could not find the language line "item_was_found"
ERROR - 2019-08-26 18:24:23 --> Could not find the language line "item_was_found"
