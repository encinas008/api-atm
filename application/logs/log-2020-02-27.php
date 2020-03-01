<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-27 08:49:07 --> Query error: ERROR:  no existe la columna pot.id_prescripcion
LINE 5: ... "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_...
                                                             ^ - Invalid query: SELECT COUNT(*) AS "numrows"
FROM (
SELECT "fur", "ptop"."name", "prl"."razon_social"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "ptop"."name", "prl"."razon_social"
) CI_count_all_results
ERROR - 2020-02-27 08:54:58 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 131
ERROR - 2020-02-27 08:54:58 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 136
ERROR - 2020-02-27 09:20:26 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 138
ERROR - 2020-02-27 09:20:26 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 143
ERROR - 2020-02-27 09:24:20 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 138
ERROR - 2020-02-27 09:24:20 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 143
ERROR - 2020-02-27 09:28:26 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE), expecting function (T_FUNCTION) or const (T_CONST) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 143
ERROR - 2020-02-27 09:28:54 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE), expecting function (T_FUNCTION) or const (T_CONST) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 143
ERROR - 2020-02-27 09:35:24 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE), expecting function (T_FUNCTION) or const (T_CONST) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 142
ERROR - 2020-02-27 09:35:38 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE), expecting function (T_FUNCTION) or const (T_CONST) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 142
ERROR - 2020-02-27 09:37:23 --> Severity: error --> Exception: syntax error, unexpected ')' /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 111
ERROR - 2020-02-27 09:38:44 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 139
ERROR - 2020-02-27 09:38:44 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 144
ERROR - 2020-02-27 09:58:48 --> Query error: ERROR:  no existe la columna pot.id_prescripcion
LINE 5: ... "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_...
                                                             ^ - Invalid query: SELECT COUNT(*) AS "numrows"
FROM (
SELECT "fur", "ptop"."name", "prl"."razon_social"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "ptop"."name", "prl"."razon_social"
) CI_count_all_results
ERROR - 2020-02-27 09:59:03 --> Query error: ERROR:  no existe la columna pot.id_prescripcion
LINE 5: ... "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_...
                                                             ^ - Invalid query: SELECT COUNT(*) AS "numrows"
FROM (
SELECT "fur", "ptop"."name", "prl"."razon_social"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "ptop"."name", "prl"."razon_social"
) CI_count_all_results
ERROR - 2020-02-27 10:09:04 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 139
ERROR - 2020-02-27 10:09:04 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 144
ERROR - 2020-02-27 15:05:49 --> Severity: Notice --> Undefined variable: var /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 105
ERROR - 2020-02-27 15:05:49 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 138
ERROR - 2020-02-27 15:05:49 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 143
ERROR - 2020-02-27 15:08:18 --> Query error: ERROR:  no existe la columna «num_docum_repre» en la relación «persona»
LINE 1: INSERT INTO "persona" ("id_tipo_documento", "num_docum_repre...
                                                    ^ - Invalid query: INSERT INTO "persona" ("id_tipo_documento", "num_docum_repre", "razon_social", "telefono", "correo_electronico", "created_at", "updated_at") VALUES ('1', '7575757', 'lopez', '7777777', 'rafael@gmail.com', '2020-02-27 15:08:18', '2020-02-27 15:08:18')
ERROR - 2020-02-27 15:39:23 --> Query error: ERROR:  no existe la columna pot.id_prescripcion
LINE 5: ... "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_...
                                                             ^ - Invalid query: SELECT COUNT(*) AS "numrows"
FROM (
SELECT "fur", "ptop"."name", "prl"."razon_social"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "ptop"."name", "prl"."razon_social"
) CI_count_all_results
ERROR - 2020-02-27 16:34:27 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 140
ERROR - 2020-02-27 16:34:27 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 145
ERROR - 2020-02-27 16:36:56 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 140
ERROR - 2020-02-27 16:36:56 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 145
ERROR - 2020-02-27 16:38:35 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 140
ERROR - 2020-02-27 16:38:35 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 145
ERROR - 2020-02-27 16:59:48 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 140
ERROR - 2020-02-27 16:59:48 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 145
ERROR - 2020-02-27 17:31:32 --> Severity: Notice --> Undefined index: id_tipo_documento /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 108
ERROR - 2020-02-27 17:31:32 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 140
ERROR - 2020-02-27 17:31:32 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 145
ERROR - 2020-02-27 17:36:50 --> Query error: ERROR:  no existe la columna «ci» en la relación «persona»
LINE 1: INSERT INTO "persona" ("id_tipo_documento", "ci", "nombre", ...
                                                    ^ - Invalid query: INSERT INTO "persona" ("id_tipo_documento", "ci", "nombre", "apellido_paterno", "apellido_materno", "created_at", "updated_at") VALUES ('1', '1234567', 'ROBER', 'ROBER', 'ROBER', '2020-02-27 17:36:50', '2020-02-27 17:36:50')
ERROR - 2020-02-27 17:50:39 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 140
ERROR - 2020-02-27 17:50:39 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 145
ERROR - 2020-02-27 17:57:13 --> Query error: ERROR:  no existe la columna pot.id_prescripcion
LINE 5: ... "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_...
                                                             ^ - Invalid query: SELECT COUNT(*) AS "numrows"
FROM (
SELECT "fur", "ptop"."name", "prl"."razon_social"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "ptop"."name", "prl"."razon_social"
) CI_count_all_results
ERROR - 2020-02-27 17:57:14 --> Query error: ERROR:  no existe la columna pot.id_prescripcion
LINE 5: ... "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_...
                                                             ^ - Invalid query: SELECT COUNT(*) AS "numrows"
FROM (
SELECT "fur", "ptop"."name", "prl"."razon_social"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "ptop"."name", "prl"."razon_social"
) CI_count_all_results
ERROR - 2020-02-27 17:57:14 --> Query error: ERROR:  no existe la columna pot.id_prescripcion
LINE 5: ... "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_...
                                                             ^ - Invalid query: SELECT COUNT(*) AS "numrows"
FROM (
SELECT "fur", "ptop"."name", "prl"."razon_social"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "ptop"."name", "prl"."razon_social"
) CI_count_all_results
ERROR - 2020-02-27 17:57:14 --> Query error: ERROR:  no existe la columna pot.id_prescripcion
LINE 5: ... "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_...
                                                             ^ - Invalid query: SELECT COUNT(*) AS "numrows"
FROM (
SELECT "fur", "ptop"."name", "prl"."razon_social"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "ptop"."name", "prl"."razon_social"
) CI_count_all_results
ERROR - 2020-02-27 22:31:11 --> Severity: error --> Exception: syntax error, unexpected '$pres_prescripcion' (T_VARIABLE) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 106
ERROR - 2020-02-27 22:31:23 --> Severity: error --> Exception: syntax error, unexpected '$pres_prescripcion' (T_VARIABLE) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 106
ERROR - 2020-02-27 22:32:38 --> Severity: Notice --> Undefined variable: pres_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 106
ERROR - 2020-02-27 22:38:10 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 145
ERROR - 2020-02-27 22:38:10 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 150
ERROR - 2020-02-27 22:41:43 --> Severity: Notice --> Undefined index: fur /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 104
ERROR - 2020-02-27 22:41:43 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 145
ERROR - 2020-02-27 22:41:43 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 150
ERROR - 2020-02-27 22:42:31 --> Severity: Notice --> Undefined index: fur /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 104
ERROR - 2020-02-27 22:42:31 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 145
ERROR - 2020-02-27 22:42:31 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 150
ERROR - 2020-02-27 22:43:59 --> Severity: Notice --> Trying to get property 'fur' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 104
ERROR - 2020-02-27 22:43:59 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 145
ERROR - 2020-02-27 22:43:59 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 150
ERROR - 2020-02-27 22:44:49 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 145
ERROR - 2020-02-27 22:44:49 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 150
ERROR - 2020-02-27 22:58:39 --> Severity: Notice --> Undefined variable: insert_juridicos /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 121
ERROR - 2020-02-27 22:58:39 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 145
ERROR - 2020-02-27 22:58:39 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 150
ERROR - 2020-02-27 23:09:28 --> Query error: ERROR:  no existe la columna «id_tipo_documento» en la relación «pres_persona_juridica»
LINE 1: INSERT INTO "pres_persona_juridica" ("id_tipo_documento", "n...
                                             ^ - Invalid query: INSERT INTO "pres_persona_juridica" ("id_tipo_documento", "nit", "razon_social", "created_at", "updated_at") VALUES ('2', '123456789009', 'encias srl', '2020-02-27 23:09:28', '2020-02-27 23:09:28')
ERROR - 2020-02-27 23:24:21 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 151
ERROR - 2020-02-27 23:24:21 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 156
ERROR - 2020-02-27 23:25:43 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 151
ERROR - 2020-02-27 23:25:43 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 156
ERROR - 2020-02-27 23:36:18 --> Severity: Notice --> Undefined index: id_tipo_documento /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 112
ERROR - 2020-02-27 23:36:18 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 151
ERROR - 2020-02-27 23:36:18 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 156
ERROR - 2020-02-27 23:41:02 --> Query error: ERROR:  no existe la columna pot.id_prescripcion
LINE 5: ... "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_...
                                                             ^ - Invalid query: SELECT COUNT(*) AS "numrows"
FROM (
SELECT "fur", "ptop"."name", "prl"."razon_social"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "ptop"."name", "prl"."razon_social"
) CI_count_all_results
ERROR - 2020-02-27 23:41:34 --> Severity: Notice --> Undefined index: id_tipo_documento /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 112
ERROR - 2020-02-27 23:41:34 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 151
ERROR - 2020-02-27 23:41:34 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 156
ERROR - 2020-02-27 23:42:47 --> Query error: ERROR:  no existe la columna «code» en la relación «persona»
LINE 1: INSERT INTO "persona" ("id_tipo_documento", "code", "numero_...
                                                    ^ - Invalid query: INSERT INTO "persona" ("id_tipo_documento", "code", "numero_documento", "nombre", "apellido_paterno", "apellido_materno", "created_at", "updated_at") VALUES ('1', 'CI', '2323232', 'rerer', 'ererer', 'ererer', '2020-02-27 23:42:47', '2020-02-27 23:42:47')
ERROR - 2020-02-27 23:50:24 --> Severity: Notice --> Undefined variable: insert_juridicos /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 121
ERROR - 2020-02-27 23:50:24 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 151
ERROR - 2020-02-27 23:50:24 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 156
ERROR - 2020-02-27 23:54:38 --> Severity: Notice --> Trying to get property 'code' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 116
ERROR - 2020-02-27 23:54:38 --> Severity: Notice --> Undefined variable: var /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 125
ERROR - 2020-02-27 23:54:38 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 152
ERROR - 2020-02-27 23:54:38 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 157
ERROR - 2020-02-27 23:54:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/restServerAtm/system/core/Exceptions.php:271) /var/www/html/restServerAtm/system/core/Common.php 570
ERROR - 2020-02-27 23:57:35 --> Severity: Notice --> Undefined variable: insert_juridicos /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 123
ERROR - 2020-02-27 23:57:35 --> Severity: Notice --> Undefined variable: var /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 126
ERROR - 2020-02-27 23:57:35 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 153
ERROR - 2020-02-27 23:57:35 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 158
ERROR - 2020-02-27 23:57:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/restServerAtm/system/core/Exceptions.php:271) /var/www/html/restServerAtm/system/core/Common.php 570
ERROR - 2020-02-27 23:58:05 --> Severity: Notice --> Undefined variable: var /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 126
ERROR - 2020-02-27 23:58:05 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 153
ERROR - 2020-02-27 23:58:05 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 158
ERROR - 2020-02-27 23:59:18 --> Query error: ERROR:  no existe la columna «id_tipo_documento» en la relación «pres_persona_juridica»
LINE 1: INSERT INTO "pres_persona_juridica" ("id_tipo_documento", "n...
                                             ^ - Invalid query: INSERT INTO "pres_persona_juridica" ("id_tipo_documento", "nit", "razon_social", "created_at", "updated_at") VALUES ('2', '34343434343405', 'sociedad anonima', '2020-02-27 23:59:18', '2020-02-27 23:59:18')
