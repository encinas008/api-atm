<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-08-13 09:04:00 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-13 09:04:01 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-13 10:05:39 --> Query error: ERROR:  no existe la columna ta.name
LINE 1: SELECT "declaracion_jurada".*, "ta"."name" as "tipo_activida...
                                       ^
HINT:  Probablemente quiera hacer referencia a la columna «es.name». - Invalid query: SELECT "declaracion_jurada".*, "ta"."name" as "tipo_actividad", "es"."name" as "estado"
FROM "declaracion_jurada"
JOIN "actividad_economica" "ta" ON "declaracion_jurada"."id_actividad_economica" = "ta"."id"
JOIN "estado" as "es" ON "declaracion_jurada"."id_estado" = "es"."id"
ORDER BY "id" DESC
 LIMIT 10
ERROR - 2019-08-13 10:05:39 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-13 10:05:50 --> Query error: ERROR:  no existe la columna ta.name
LINE 1: SELECT "declaracion_jurada".*, "ta"."name" as "tipo_activida...
                                       ^
HINT:  Probablemente quiera hacer referencia a la columna «es.name». - Invalid query: SELECT "declaracion_jurada".*, "ta"."name" as "tipo_actividad", "es"."name" as "estado"
FROM "declaracion_jurada"
JOIN "actividad_economica" "ta" ON "declaracion_jurada"."id_actividad_economica" = "ta"."id"
JOIN "estado" as "es" ON "declaracion_jurada"."id_estado" = "es"."id"
ORDER BY "id" DESC
 LIMIT 10
ERROR - 2019-08-13 10:05:50 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-13 10:15:34 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-13 10:15:50 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-13 10:15:58 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-13 10:16:40 --> Query error: ERROR:  no existe la columna ae.name
LINE 1: SELECT ae.name as label, ae.id as value, ae.ciiu FROM activi...
               ^ - Invalid query: SELECT ae.name as label, ae.id as value, ae.ciiu FROM actividad_economica ae WHERE to_tsvector(LOWER(ae.name) ) @@ to_tsquery(LOWER('venta'));
ERROR - 2019-08-13 10:16:40 --> Query error: ERROR:  no existe la columna ae.name
LINE 1: SELECT ae.name as label, ae.id as value, ae.ciiu FROM activi...
               ^ - Invalid query: SELECT ae.name as label, ae.id as value, ae.ciiu FROM actividad_economica ae WHERE to_tsvector(LOWER(ae.name) ) @@ to_tsquery(LOWER('ventas'));
ERROR - 2019-08-13 10:16:40 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-13 10:26:48 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:26:48 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:26:48 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:26:48 --> Query error: ERROR:  error de sintaxis en o cerca de «0»
LINE 1: 0venta'));
        ^ - Invalid query: 0venta'));
ERROR - 2019-08-13 10:26:48 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:26:48 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:26:48 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:26:48 --> Query error: ERROR:  error de sintaxis en o cerca de «0»
LINE 1: 0ventas'));
        ^ - Invalid query: 0ventas'));
ERROR - 2019-08-13 10:28:09 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:28:09 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:28:09 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:28:10 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:28:10 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:28:10 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:28:14 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:28:14 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:28:14 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:28:14 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:28:14 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:28:14 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:29:16 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:29:16 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:29:16 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:29:16 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:29:16 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:29:16 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:29:22 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:29:22 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:29:22 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:29:22 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:29:22 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:29:22 --> Severity: Warning --> A non-numeric value encountered /var/www/html/restServerAtm/application/models/TipoActividadEconomica_model.php 28
ERROR - 2019-08-13 10:31:06 --> Query error: ERROR:  inserción o actualización en la tabla «declaracion_jurada» viola la llave foránea «fk_declarac_relations_activida»
DETAIL:  La llave (id_actividad_economica)=(72) no está presente en la tabla «actividad_economica». - Invalid query: INSERT INTO "declaracion_jurada" ("fur", "id_actividad_economica", "id_estado", "id_solicitante", "token", "created_at", "updated_at") VALUES ('96111', '72', 1, 1, '7a36330cdd16acfa742d2dd4132d7b25', '2019-08-13 10:31:06', '2019-08-13 10:31:06')
ERROR - 2019-08-13 10:37:47 --> Severity: Notice --> Undefined index: actividad_economica /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 179
ERROR - 2019-08-13 10:39:19 --> Severity: Notice --> Undefined index: actividad_economica /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 179
ERROR - 2019-08-13 10:47:28 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-13 10:48:35 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-13 10:48:47 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-13 10:49:01 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-13 10:58:52 --> Query error: ERROR:  no existe la columna «id_declaracion_jurada» en la relación «domicilio_actividad_economica»
LINE 1: ..., "celular", "latitud", "longitud", "coordinate", "id_declar...
                                                             ^ - Invalid query: INSERT INTO "domicilio_actividad_economica" ("avenida", "direccion", "numero", "zona", "edificio", "bloque", "piso", "dpto_of_local", "telefono", "celular", "latitud", "longitud", "coordinate", "id_declaracion_jurada", "created_at", "updated_at") VALUES ('on', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', '', '', 7, '2019-08-13 10:58:52', '2019-08-13 10:58:52')
ERROR - 2019-08-13 11:03:29 --> Severity: error --> Exception: Call to undefined method ActividadEconomica_model::getByToken() /var/www/html/restServerAtm/application/controllers/api/DomicilioActividadEconomica.php 98
ERROR - 2019-08-13 11:04:20 --> Severity: Notice --> Undefined property: stdClass::$id_actividad_aconomica /var/www/html/restServerAtm/application/controllers/api/DomicilioActividadEconomica.php 98
ERROR - 2019-08-13 11:04:20 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/DomicilioActividadEconomica.php 99
ERROR - 2019-08-13 11:05:26 --> Severity: Notice --> Undefined property: stdClass::$id_actividad_aconomica /var/www/html/restServerAtm/application/controllers/api/DomicilioActividadEconomica.php 99
ERROR - 2019-08-13 11:05:26 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/DomicilioActividadEconomica.php 100
ERROR - 2019-08-13 11:17:25 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, string given /var/www/html/restServerAtm/application/controllers/api/DomicilioActividadEconomica.php 141
ERROR - 2019-08-13 11:18:15 --> Severity: error --> Exception: Cannot use object of type stdClass as array /var/www/html/restServerAtm/application/core/MY_model.php 14
ERROR - 2019-08-13 11:19:00 --> Severity: error --> Exception: Cannot use object of type stdClass as array /var/www/html/restServerAtm/application/core/MY_model.php 14
ERROR - 2019-08-13 11:28:09 --> Query error: ERROR:  no existe la columna «id_declaracion_jurada»
LINE 3: WHERE "id_declaracion_jurada" = 10
              ^ - Invalid query: SELECT *
FROM "domicilio_actividad_economica"
WHERE "id_declaracion_jurada" = 10
ERROR - 2019-08-13 11:28:21 --> Query error: ERROR:  no existe la columna «id_declaracion_jurada»
LINE 3: WHERE "id_declaracion_jurada" = 10
              ^ - Invalid query: SELECT *
FROM "domicilio_actividad_economica"
WHERE "id_declaracion_jurada" = 10
ERROR - 2019-08-13 11:38:57 --> Could not find the language line "tipo_actividad_economica"
ERROR - 2019-08-13 11:51:07 --> Severity: Notice --> Undefined variable: out_dj /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 245
ERROR - 2019-08-13 11:51:07 --> Severity: Notice --> Trying to get property 'id_actividad_economica' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 245
ERROR - 2019-08-13 11:51:07 --> Severity: Warning --> Creating default object from empty value /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 246
ERROR - 2019-08-13 11:51:07 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/restServerAtm/application/core/MY_model.php 26
ERROR - 2019-08-13 11:51:07 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/restServerAtm/application/core/MY_model.php 29
ERROR - 2019-08-13 11:51:07 --> Severity: Notice --> Undefined variable: out_dj /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 249
ERROR - 2019-08-13 11:51:07 --> Severity: Notice --> Trying to get property 'id_solicitante' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 249
ERROR - 2019-08-13 11:51:07 --> Severity: Warning --> Creating default object from empty value /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 250
ERROR - 2019-08-13 11:51:07 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/restServerAtm/application/core/MY_model.php 26
ERROR - 2019-08-13 11:51:07 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/restServerAtm/application/core/MY_model.php 29
ERROR - 2019-08-13 11:51:07 --> Severity: Notice --> Undefined variable: out_dj /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 253
ERROR - 2019-08-13 11:51:07 --> Could not find the language line "no_item_was_has_add"
ERROR - 2019-08-13 11:51:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/restServerAtm/system/core/Exceptions.php:271) /var/www/html/restServerAtm/system/core/Common.php 570
ERROR - 2019-08-13 11:51:49 --> Severity: Notice --> Trying to get property 'id_tipo_actividad' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 118
ERROR - 2019-08-13 11:51:49 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 135
ERROR - 2019-08-13 11:51:56 --> Severity: Notice --> Trying to get property 'id_tipo_actividad' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 118
ERROR - 2019-08-13 11:51:56 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 135
ERROR - 2019-08-13 11:53:02 --> Severity: Notice --> Trying to get property 'id_tipo_actividad' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 118
ERROR - 2019-08-13 11:53:02 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 135
ERROR - 2019-08-13 11:53:44 --> Severity: Notice --> Undefined variable: out_dj /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 245
ERROR - 2019-08-13 11:53:44 --> Severity: Notice --> Trying to get property 'id_actividad_economica' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 245
ERROR - 2019-08-13 11:53:44 --> Severity: Warning --> Creating default object from empty value /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 246
ERROR - 2019-08-13 11:53:44 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/restServerAtm/application/core/MY_model.php 26
ERROR - 2019-08-13 11:53:44 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/restServerAtm/application/core/MY_model.php 29
ERROR - 2019-08-13 11:53:44 --> Severity: Notice --> Undefined variable: out_dj /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 249
ERROR - 2019-08-13 11:53:44 --> Severity: Notice --> Trying to get property 'id_solicitante' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 249
ERROR - 2019-08-13 11:53:44 --> Severity: Warning --> Creating default object from empty value /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 250
ERROR - 2019-08-13 11:53:44 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/restServerAtm/application/core/MY_model.php 26
ERROR - 2019-08-13 11:53:44 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/restServerAtm/application/core/MY_model.php 29
ERROR - 2019-08-13 11:53:44 --> Severity: Notice --> Undefined variable: out_dj /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 253
ERROR - 2019-08-13 11:53:44 --> Could not find the language line "no_item_was_has_add"
ERROR - 2019-08-13 11:53:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/restServerAtm/system/core/Exceptions.php:271) /var/www/html/restServerAtm/system/core/Common.php 570
ERROR - 2019-08-13 11:55:30 --> Severity: Notice --> Undefined variable: out_dj /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 246
ERROR - 2019-08-13 11:55:30 --> Severity: Notice --> Trying to get property 'id_actividad_economica' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 246
ERROR - 2019-08-13 11:55:30 --> Severity: Warning --> Creating default object from empty value /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 247
ERROR - 2019-08-13 11:55:30 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/restServerAtm/application/core/MY_model.php 26
ERROR - 2019-08-13 11:55:30 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/restServerAtm/application/core/MY_model.php 29
ERROR - 2019-08-13 11:55:30 --> Severity: Notice --> Undefined variable: out_dj /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 250
ERROR - 2019-08-13 11:55:30 --> Severity: Notice --> Trying to get property 'id_solicitante' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 250
ERROR - 2019-08-13 11:55:30 --> Severity: Warning --> Creating default object from empty value /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 251
ERROR - 2019-08-13 11:55:30 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/restServerAtm/application/core/MY_model.php 26
ERROR - 2019-08-13 11:55:30 --> Severity: Notice --> Undefined property: stdClass::$id /var/www/html/restServerAtm/application/core/MY_model.php 29
ERROR - 2019-08-13 11:55:30 --> Could not find the language line "no_item_was_has_add"
ERROR - 2019-08-13 11:55:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/restServerAtm/system/core/Exceptions.php:271) /var/www/html/restServerAtm/system/core/Common.php 570
ERROR - 2019-08-13 12:00:53 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 12:01:44 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 12:02:19 --> 404 Page Not Found: api/Domicilio-actividad-economica/get-by-tokey-lic
ERROR - 2019-08-13 12:39:23 --> 404 Page Not Found: api/Domicilio-actividad-economica/get-by-tokey-lic
ERROR - 2019-08-13 12:39:23 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-13 12:40:25 --> 404 Page Not Found: api/Domicilio-actividad-economica/get-by-tokey-lic
ERROR - 2019-08-13 12:40:25 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-13 12:41:29 --> 404 Page Not Found: api/Domicilio-actividad-economica/get-by-tokey-lic
ERROR - 2019-08-13 12:41:29 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-13 12:43:16 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 12:43:16 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-13 12:43:30 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 12:43:30 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-13 12:43:38 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 12:43:38 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-13 12:43:38 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 12:43:39 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 12:43:39 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 12:43:39 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 12:43:39 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 12:43:39 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 12:44:02 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 12:44:19 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 12:44:43 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 12:46:17 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 12:46:34 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 12:46:44 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 12:46:50 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 12:48:43 --> Severity: error --> Exception: Call to undefined method DomicilioActividadEconomica::getTokenVerified() /var/www/html/restServerAtm/application/controllers/api/DomicilioActividadEconomica.php 43
ERROR - 2019-08-13 12:50:28 --> 404 Page Not Found: api/Domicilio-actividad-economica/get-by-token-lic
ERROR - 2019-08-13 12:50:36 --> 404 Page Not Found: api/Domicilio-actividad-economica/get-by-token-lic
ERROR - 2019-08-13 12:51:49 --> Severity: error --> Exception: Call to undefined method DomicilioActividadEconomica::getTokenVerified() /var/www/html/restServerAtm/application/controllers/api/DomicilioActividadEconomica.php 43
ERROR - 2019-08-13 12:52:50 --> Severity: error --> Exception: Call to undefined method DomicilioActividadEconomica_model::getByIdDeclaracionJurada() /var/www/html/restServerAtm/application/controllers/api/DomicilioActividadEconomica.php 51
ERROR - 2019-08-13 12:55:11 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 12:55:32 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 12:56:47 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 12:57:18 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 12:57:51 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 12:58:43 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 12:59:14 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 15:16:31 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 15:17:32 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 16:02:40 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 16:03:46 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 16:04:05 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 16:05:34 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 16:07:15 --> Could not find the language line "no_item_was_has_add"
ERROR - 2019-08-13 16:08:00 --> Could not find the language line "no_item_was_has_add"
ERROR - 2019-08-13 16:08:56 --> Could not find the language line "no_item_was_has_add"
ERROR - 2019-08-13 16:08:57 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 16:21:43 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 18:29:22 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-13 18:29:31 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-13 18:40:10 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-13 18:40:19 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-08-13 18:56:04 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 18:56:10 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 19:22:12 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 19:26:04 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 19:33:51 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 19:34:19 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 19:35:41 --> Could not find the language line "item_was_found"
ERROR - 2019-08-13 19:37:42 --> Could not find the language line "item_was_found"
