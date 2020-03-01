<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-26 10:21:32 --> Query error: ERROR:  no existe la columna pot.id_prescripcion
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
ERROR - 2020-02-26 10:22:47 --> Query error: ERROR:  no existe la columna «prescripcion»
LINE 3: WHERE "prescripcion" = TRUE
              ^
HINT:  Probablemente quiera hacer referencia a la columna «tipo_documento.description». - Invalid query: SELECT "id", "code", "name"
FROM "tipo_documento"
WHERE "prescripcion" = TRUE
ERROR - 2020-02-26 10:34:18 --> Query error: ERROR:  no existe la columna «prescripcion»
LINE 3: WHERE "prescripcion" = TRUE
              ^
HINT:  Probablemente quiera hacer referencia a la columna «tipo_documento.description». - Invalid query: SELECT "id", "code", "name"
FROM "tipo_documento"
WHERE "prescripcion" = TRUE
ERROR - 2020-02-26 10:35:19 --> Query error: ERROR:  no existe la columna «prescripcion»
LINE 3: WHERE "prescripcion" = TRUE
              ^
HINT:  Probablemente quiera hacer referencia a la columna «tipo_documento.description». - Invalid query: SELECT "id", "code", "name"
FROM "tipo_documento"
WHERE "prescripcion" = TRUE
ERROR - 2020-02-26 10:56:04 --> Query error: ERROR:  no existe la columna «prescripcion»
LINE 3: WHERE "prescripcion" = TRUE
              ^
HINT:  Probablemente quiera hacer referencia a la columna «tipo_documento.description». - Invalid query: SELECT "id", "code", "name"
FROM "tipo_documento"
WHERE "prescripcion" = TRUE
ERROR - 2020-02-26 10:56:05 --> Query error: ERROR:  no existe la columna «prescripcion»
LINE 3: WHERE "prescripcion" = TRUE
              ^
HINT:  Probablemente quiera hacer referencia a la columna «tipo_documento.description». - Invalid query: SELECT "id", "code", "name"
FROM "tipo_documento"
WHERE "prescripcion" = TRUE
ERROR - 2020-02-26 10:56:05 --> Query error: ERROR:  no existe la columna «prescripcion»
LINE 3: WHERE "prescripcion" = TRUE
              ^
HINT:  Probablemente quiera hacer referencia a la columna «tipo_documento.description». - Invalid query: SELECT "id", "code", "name"
FROM "tipo_documento"
WHERE "prescripcion" = TRUE
ERROR - 2020-02-26 10:56:05 --> Query error: ERROR:  no existe la columna «prescripcion»
LINE 3: WHERE "prescripcion" = TRUE
              ^
HINT:  Probablemente quiera hacer referencia a la columna «tipo_documento.description». - Invalid query: SELECT "id", "code", "name"
FROM "tipo_documento"
WHERE "prescripcion" = TRUE
ERROR - 2020-02-26 10:56:05 --> Query error: ERROR:  no existe la columna «prescripcion»
LINE 3: WHERE "prescripcion" = TRUE
              ^
HINT:  Probablemente quiera hacer referencia a la columna «tipo_documento.description». - Invalid query: SELECT "id", "code", "name"
FROM "tipo_documento"
WHERE "prescripcion" = TRUE
ERROR - 2020-02-26 11:02:02 --> Query error: ERROR:  no existe la columna «prescripcion»
LINE 3: WHERE "prescripcion" = TRUE
              ^
HINT:  Probablemente quiera hacer referencia a la columna «tipo_documento.description». - Invalid query: SELECT "id", "code", "name"
FROM "tipo_documento"
WHERE "prescripcion" = TRUE
ERROR - 2020-02-26 11:03:32 --> Query error: ERROR:  no existe la columna «prescripcion»
LINE 3: WHERE "prescripcion" = TRUE
              ^
HINT:  Probablemente quiera hacer referencia a la columna «tipo_documento.description». - Invalid query: SELECT "id", "code", "name"
FROM "tipo_documento"
WHERE "prescripcion" = TRUE
ERROR - 2020-02-26 11:06:31 --> Query error: ERROR:  no existe la columna «prescripcion»
LINE 3: WHERE "prescripcion" = TRUE
              ^
HINT:  Probablemente quiera hacer referencia a la columna «tipo_documento.description». - Invalid query: SELECT "id", "code", "name"
FROM "tipo_documento"
WHERE "prescripcion" = TRUE
ERROR - 2020-02-26 11:43:03 --> Severity: Notice --> Undefined property: Recaudaciones::$db_recaudaciones /var/www/html/restServerAtm/application/controllers/api/Recaudaciones.php 51
ERROR - 2020-02-26 11:43:03 --> Severity: error --> Exception: Call to a member function select() on null /var/www/html/restServerAtm/application/controllers/api/Recaudaciones.php 51
ERROR - 2020-02-26 11:47:02 --> Query error: ERROR:  no existe la columna «id_prescripcion» en la relación «persona»
LINE 1: ..."nombre", "apellido_paterno", "apellido_materno", "id_prescr...
                                                             ^ - Invalid query: INSERT INTO "persona" ("numero_documento", "expedido_en", "nombre", "apellido_paterno", "apellido_materno", "id_prescripcion", "created_at", "updated_at") VALUES ('8672749', 'CB', 'VICTOR HUGO', 'ZURITA', 'Merida', 1, '2020-02-26 11:47:02', '2020-02-26 11:47:02')
ERROR - 2020-02-26 12:13:44 --> Query error: ERROR:  no existe la columna «id_prescripcion» en la relación «persona»
LINE 1: ..."nombre", "apellido_paterno", "apellido_materno", "id_prescr...
                                                             ^ - Invalid query: INSERT INTO "persona" ("numero_documento", "expedido_en", "nombre", "apellido_paterno", "apellido_materno", "id_prescripcion", "created_at", "updated_at") VALUES ('8672749', 'CB', 'VICTOR HUGO', 'ZURITA', 'Merida', 2, '2020-02-26 12:13:44', '2020-02-26 12:13:44')
ERROR - 2020-02-26 12:14:31 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 101
ERROR - 2020-02-26 12:14:31 --> Query error: ERROR:  no existe la columna «id_tipo_documento» en la relación «pres_representante_legal»
LINE 1: INSERT INTO "pres_representante_legal" ("id_tipo_documento",...
                                                ^ - Invalid query: INSERT INTO "pres_representante_legal" ("id_tipo_documento", "num_docum_repre", "razon_social", "telefono", "correo_electronico", "id_prescripcion", "created_at", "updated_at") VALUES ('1', '8547754', 'Carla Montes', '7777777', 'carla@gmail.com', 3, '2020-02-26 12:14:31', '2020-02-26 12:14:31')
ERROR - 2020-02-26 14:54:41 --> Query error: ERROR:  no existe la columna «id_tipo_documento» en la relación «pres_representante_legal»
LINE 1: INSERT INTO "pres_representante_legal" ("id_tipo_documento",...
                                                ^ - Invalid query: INSERT INTO "pres_representante_legal" ("id_tipo_documento", "num_docum_repre", "razon_social", "telefono", "correo_electronico", "id_prescripcion", "created_at", "updated_at") VALUES ('1', '8547754', 'Carla Montes', '7777777', 'carla@gmail.com', 4, '2020-02-26 14:54:41', '2020-02-26 14:54:41')
ERROR - 2020-02-26 15:15:09 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 120
ERROR - 2020-02-26 15:15:09 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 125
ERROR - 2020-02-26 15:23:43 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 119
ERROR - 2020-02-26 15:23:43 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 124
ERROR - 2020-02-26 15:26:11 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 119
ERROR - 2020-02-26 15:26:11 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 124
ERROR - 2020-02-26 15:38:43 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 121
ERROR - 2020-02-26 15:38:43 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 126
ERROR - 2020-02-26 15:54:08 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 122
ERROR - 2020-02-26 15:54:08 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 127
ERROR - 2020-02-26 16:02:06 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 117
ERROR - 2020-02-26 16:02:06 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 117
ERROR - 2020-02-26 16:02:06 --> Query error: ERROR:  no existe la columna «id_tipo_documento» en la relación «pres_representante_legal»
LINE 1: INSERT INTO "pres_representante_legal" ("id_tipo_documento",...
                                                ^ - Invalid query: INSERT INTO "pres_representante_legal" ("id_tipo_documento", "num_docum_repre", "razon_social", "telefono", "correo_electronico", "id_prescripcion", "created_at", "updated_at") VALUES ('1', '8547754', 'Carla Montes', '7777777', 'carla@gmail.com', NULL, '2020-02-26 16:02:06', '2020-02-26 16:02:06')
ERROR - 2020-02-26 16:10:38 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 127
ERROR - 2020-02-26 16:10:38 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 132
ERROR - 2020-02-26 16:12:53 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 127
ERROR - 2020-02-26 16:12:53 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 132
ERROR - 2020-02-26 22:30:03 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 131
ERROR - 2020-02-26 22:30:03 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 136
