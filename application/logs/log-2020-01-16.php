<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-16 08:17:30 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 08:17:30 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 08:31:18 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 08:31:18 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 08:31:34 --> Severity: Notice --> Undefined property: Prescripcion::$Prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-16 08:31:34 --> Severity: Notice --> Trying to get property 'model' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-16 08:31:34 --> Severity: error --> Exception: Call to a member function isDataDomicilio() on null /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-16 08:31:37 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 08:35:35 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 08:36:15 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 08:37:02 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 08:44:30 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 09:43:17 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 09:44:41 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 09:48:13 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 09:56:47 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 10:02:19 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 10:37:34 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 10:39:38 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 10:55:14 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 10:55:48 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 11:04:31 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 11:05:33 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 11:06:19 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 11:17:52 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 11:18:07 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 11:21:42 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 11:23:31 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 11:24:13 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 11:24:48 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 11:25:29 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 11:26:57 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 11:27:26 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 11:29:09 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 11:43:27 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 11:43:46 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 11:47:40 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 11:47:53 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."nit", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."nit", "pot"."numero"
 LIMIT 10
ERROR - 2020-01-16 11:53:42 --> Severity: Notice --> Undefined property: Prescripcion::$Prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-16 11:53:42 --> Severity: Notice --> Trying to get property 'model' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-16 11:53:42 --> Severity: error --> Exception: Call to a member function isDataDomicilio() on null /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-16 11:53:48 --> Query error: ERROR:  no existe la columna prl.nit
LINE 1: ...ot"."name", "p".*, "pot".*, "prl"."razon_social", "prl"."nit...
                                                             ^ - Invalid query: SELECT "pp"."fur", "pp"."token", "ptot"."name", "p".*, "pot".*, "prl"."razon_social", "prl"."nit", "prl"."telefono", "d"."zona", "d"."direccion"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptot" ON "ptot"."id" = "pot"."id_tipo_objeto_tributario"
LEFT JOIN "pres_representante_legal" as "prl" ON "prl"."id_prescripcion" = "pp"."id"
LEFT JOIN "persona" as "p" ON "p"."id_prescripcion" = "pot"."id_prescripcion"
LEFT JOIN "domicilio" as "d" ON "p"."id" = "d"."id_persona"
WHERE "pp"."token" = '2adcaa7ac21562a77197cbf613387d73'
GROUP BY "pp"."fur", "pp"."token", "ptot"."name", "prl"."razon_social", "prl"."nit", "prl"."telefono", "p"."id", "pot"."id", "d"."zona", "d"."direccion"
ERROR - 2020-01-16 11:55:12 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 11:58:22 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 12:04:06 --> Severity: Notice --> Undefined property: Prescripcion::$Prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-16 12:04:06 --> Severity: Notice --> Trying to get property 'model' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-16 12:04:06 --> Severity: error --> Exception: Call to a member function isDataDomicilio() on null /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-16 12:04:11 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 14:42:58 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 14:45:29 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 14:47:17 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 14:49:02 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 14:53:17 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 14:53:52 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 14:54:33 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 14:57:31 --> Severity: Notice --> Undefined property: Prescripcion::$Prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-16 14:57:31 --> Severity: Notice --> Trying to get property 'model' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-16 14:57:31 --> Severity: error --> Exception: Call to a member function isDataDomicilio() on null /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-16 14:57:33 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 14:59:05 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 15:12:38 --> Query error: ERROR:  no existe la columna prl.numero_documento=pres_numero
LINE 1: ...ot"."name", "p".*, "pot".*, "prl"."razon_social", "prl"."num...
                                                             ^ - Invalid query: SELECT "pp"."fur", "pp"."token", "ptot"."name", "p".*, "pot".*, "prl"."razon_social", "prl"."numero_documento=pres_numero", "prl"."telefono", "d"."zona", "d"."direccion"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptot" ON "ptot"."id" = "pot"."id_tipo_objeto_tributario"
LEFT JOIN "pres_representante_legal" as "prl" ON "prl"."id_prescripcion" = "pp"."id"
LEFT JOIN "persona" as "p" ON "p"."id_prescripcion" = "pot"."id_prescripcion"
LEFT JOIN "domicilio" as "d" ON "p"."id" = "d"."id_persona"
WHERE "pp"."token" = '2adcaa7ac21562a77197cbf613387d73'
GROUP BY "pp"."fur", "pp"."token", "ptot"."name", "prl"."razon_social", "prl"."numero_documento=pres_numero", "prl"."telefono", "p"."id", "pot"."id", "d"."zona", "d"."direccion"
ERROR - 2020-01-16 15:12:59 --> Query error: ERROR:  no existe la columna prl.numero_documento=pres_numero
LINE 1: ...ot"."name", "p".*, "pot".*, "prl"."razon_social", "prl"."num...
                                                             ^ - Invalid query: SELECT "pp"."fur", "pp"."token", "ptot"."name", "p".*, "pot".*, "prl"."razon_social", "prl"."numero_documento=pres_numero", "prl"."telefono", "d"."zona", "d"."direccion"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptot" ON "ptot"."id" = "pot"."id_tipo_objeto_tributario"
LEFT JOIN "pres_representante_legal" as "prl" ON "prl"."id_prescripcion" = "pp"."id"
LEFT JOIN "persona" as "p" ON "p"."id_prescripcion" = "pot"."id_prescripcion"
LEFT JOIN "domicilio" as "d" ON "p"."id" = "d"."id_persona"
WHERE "pp"."token" = '2adcaa7ac21562a77197cbf613387d73'
GROUP BY "pp"."fur", "pp"."token", "ptot"."name", "prl"."razon_social", "prl"."numero_documento=pres_numero", "prl"."telefono", "p"."id", "pot"."id", "d"."zona", "d"."direccion"
ERROR - 2020-01-16 15:17:46 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 15:17:53 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 15:19:09 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 15:22:47 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 15:23:04 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 15:25:59 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 15:37:34 --> Query error: ERROR:  error de sintaxis en o cerca de «.»
LINE 1: ..._documento" as "pres_numero", "prl"."correo" "prl"."telefono...
                                                             ^ - Invalid query: SELECT "pp"."fur", "pp"."token", "ptot"."name", "p".*, "pot".*, "prl"."razon_social", "prl"."numero_documento" as "pres_numero", "prl"."correo" "prl"."telefono", "d"."zona", "d"."direccion"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptot" ON "ptot"."id" = "pot"."id_tipo_objeto_tributario"
LEFT JOIN "pres_representante_legal" as "prl" ON "prl"."id_prescripcion" = "pp"."id"
LEFT JOIN "persona" as "p" ON "p"."id_prescripcion" = "pot"."id_prescripcion"
LEFT JOIN "domicilio" as "d" ON "p"."id" = "d"."id_persona"
WHERE "pp"."token" = '2adcaa7ac21562a77197cbf613387d73'
GROUP BY "pp"."fur", "pp"."token", "ptot"."name", "prl"."razon_social", "pres_numero", "prl"."telefono", "prl"."correo", "p"."id", "pot"."id", "d"."zona", "d"."direccion"
ERROR - 2020-01-16 15:43:10 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 15:45:19 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 15:47:58 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 15:50:38 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 15:53:17 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 16:17:12 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 16:25:49 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 16:27:07 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 16:34:16 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 16:34:29 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 16:35:53 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 16:38:32 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 16:39:13 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 16:40:39 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 16:44:28 --> Severity: Notice --> Undefined property: Prescripcion::$Prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-16 16:44:28 --> Severity: Notice --> Trying to get property 'model' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-16 16:44:28 --> Severity: error --> Exception: Call to a member function isDataDomicilio() on null /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-16 16:44:37 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 16:52:14 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 16:52:14 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 16:53:03 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 16:53:53 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 16:55:15 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 16:59:16 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 17:08:36 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 17:10:31 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 17:13:29 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 17:23:27 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 17:28:15 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 17:28:58 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 17:29:34 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 17:33:25 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 17:35:32 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 17:51:35 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 17:57:35 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 18:11:07 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 18:12:33 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 18:16:02 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 18:17:44 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 18:22:49 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 18:23:37 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 18:24:04 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 18:25:01 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 18:25:27 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 18:27:22 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 18:31:26 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 18:34:24 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 18:35:53 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 18:38:20 --> Could not find the language line "successfully getting"
ERROR - 2020-01-16 18:38:54 --> Could not find the language line "successfully getting"
