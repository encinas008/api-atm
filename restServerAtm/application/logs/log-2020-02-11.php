<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-11 08:44:55 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 436
ERROR - 2020-02-11 08:53:52 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 436
ERROR - 2020-02-11 08:53:56 --> Query error: ERROR:  no existe la columna prl.numero_documento
LINE 1: ...ot"."name", "p".*, "pot".*, "prl"."razon_social", "prl"."num...
                                                             ^
HINT:  Probablemente quiera hacer referencia a la columna «p.numero_documento». - Invalid query: SELECT "pp"."fur", "pp"."token", "ptot"."name", "p".*, "pot".*, "prl"."razon_social", "prl"."numero_documento" as "pres_numero", "prl"."correo_electronico", "prl"."telefono", "d"."zona", "d"."direccion"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptot" ON "ptot"."id" = "pot"."id_tipo_objeto_tributario"
LEFT JOIN "pres_representante_legal" as "prl" ON "prl"."id_prescripcion" = "pp"."id"
LEFT JOIN "persona" as "p" ON "p"."id_prescripcion" = "pot"."id_prescripcion"
LEFT JOIN "domicilio" as "d" ON "p"."id" = "d"."id_persona"
WHERE "pp"."token" = '631c14c8eafe24e106a03122332be25f'
GROUP BY "pp"."fur", "pp"."token", "ptot"."name", "prl"."razon_social", "pres_numero", "prl"."telefono", "prl"."correo_electronico", "p"."id", "pot"."id", "d"."zona", "d"."direccion"
ERROR - 2020-02-11 08:54:09 --> Query error: ERROR:  no existe la columna prl.numero_documento
LINE 1: ...ot"."name", "p".*, "pot".*, "prl"."razon_social", "prl"."num...
                                                             ^
HINT:  Probablemente quiera hacer referencia a la columna «p.numero_documento». - Invalid query: SELECT "pp"."fur", "pp"."token", "ptot"."name", "p".*, "pot".*, "prl"."razon_social", "prl"."numero_documento" as "pres_numero", "prl"."correo_electronico", "prl"."telefono", "d"."zona", "d"."direccion"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptot" ON "ptot"."id" = "pot"."id_tipo_objeto_tributario"
LEFT JOIN "pres_representante_legal" as "prl" ON "prl"."id_prescripcion" = "pp"."id"
LEFT JOIN "persona" as "p" ON "p"."id_prescripcion" = "pot"."id_prescripcion"
LEFT JOIN "domicilio" as "d" ON "p"."id" = "d"."id_persona"
WHERE "pp"."token" = '631c14c8eafe24e106a03122332be25f'
GROUP BY "pp"."fur", "pp"."token", "ptot"."name", "prl"."razon_social", "pres_numero", "prl"."telefono", "prl"."correo_electronico", "p"."id", "pot"."id", "d"."zona", "d"."direccion"
ERROR - 2020-02-11 08:54:39 --> Query error: ERROR:  no existe la columna prl.numero_documento
LINE 1: ...ot"."name", "p".*, "pot".*, "prl"."razon_social", "prl"."num...
                                                             ^
HINT:  Probablemente quiera hacer referencia a la columna «p.numero_documento». - Invalid query: SELECT "pp"."fur", "pp"."token", "ptot"."name", "p".*, "pot".*, "prl"."razon_social", "prl"."numero_documento" as "pres_numero", "prl"."correo_electronico", "prl"."telefono", "d"."zona", "d"."direccion"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptot" ON "ptot"."id" = "pot"."id_tipo_objeto_tributario"
LEFT JOIN "pres_representante_legal" as "prl" ON "prl"."id_prescripcion" = "pp"."id"
LEFT JOIN "persona" as "p" ON "p"."id_prescripcion" = "pot"."id_prescripcion"
LEFT JOIN "domicilio" as "d" ON "p"."id" = "d"."id_persona"
WHERE "pp"."token" = '631c14c8eafe24e106a03122332be25f'
GROUP BY "pp"."fur", "pp"."token", "ptot"."name", "prl"."razon_social", "pres_numero", "prl"."telefono", "prl"."correo_electronico", "p"."id", "pot"."id", "d"."zona", "d"."direccion"
ERROR - 2020-02-11 09:00:58 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 09:01:03 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 09:02:42 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 09:02:43 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 09:02:46 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 09:02:47 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 09:02:50 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 218
ERROR - 2020-02-11 09:03:13 --> Severity: error --> Exception: Cannot use object of type stdClass as array /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 154
ERROR - 2020-02-11 09:06:43 --> Severity: error --> Exception: Cannot use object of type stdClass as array /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 154
ERROR - 2020-02-11 09:29:34 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE), expecting function (T_FUNCTION) or const (T_CONST) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 185
ERROR - 2020-02-11 09:30:07 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE), expecting function (T_FUNCTION) or const (T_CONST) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 185
ERROR - 2020-02-11 09:34:42 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 175
ERROR - 2020-02-11 09:34:43 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 175
ERROR - 2020-02-11 09:34:44 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 175
ERROR - 2020-02-11 09:34:44 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 175
ERROR - 2020-02-11 09:34:44 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 175
ERROR - 2020-02-11 09:39:39 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 175
ERROR - 2020-02-11 09:39:40 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 175
ERROR - 2020-02-11 09:39:40 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 175
ERROR - 2020-02-11 09:39:40 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 175
ERROR - 2020-02-11 09:39:40 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 175
ERROR - 2020-02-11 09:39:40 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 175
ERROR - 2020-02-11 09:39:40 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 175
ERROR - 2020-02-11 09:51:03 --> Severity: Notice --> Undefined index: id_tipo_documento /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 171
ERROR - 2020-02-11 09:51:38 --> Query error: ERROR:  no existe la columna prl.numero_documento
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."num...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."numero_documento", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."numero_documento", "pot"."numero"
 LIMIT 10
ERROR - 2020-02-11 09:51:49 --> Query error: ERROR:  no existe la columna prl.numero_documento
LINE 1: ...me", "prl"."razon_social" as "nombre", "pp"."id", "prl"."num...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."numero_documento", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."numero_documento", "pot"."numero"
 LIMIT 10
ERROR - 2020-02-11 09:53:18 --> Query error: ERROR:  no existe la columna prl.numero_documento
LINE 6: ...ur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."num...
                                                             ^ - Invalid query: SELECT "fur", "token", "ptop"."name", "prl"."razon_social" as "nombre", "pp"."id", "prl"."num_docum_repre", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "nombre", "pp"."id", "prl"."numero_documento", "pot"."numero"
 LIMIT 10
ERROR - 2020-02-11 09:53:53 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 441
ERROR - 2020-02-11 09:53:55 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 09:55:21 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 10:02:23 --> Severity: Notice --> Undefined index: id_tipo_documento /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 172
ERROR - 2020-02-11 10:03:08 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 442
ERROR - 2020-02-11 10:03:09 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 10:03:28 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 442
ERROR - 2020-02-11 10:03:36 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 10:03:58 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 10:13:11 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 10:13:11 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 10:13:13 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 218
ERROR - 2020-02-11 10:17:14 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 443
ERROR - 2020-02-11 10:17:33 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 10:29:14 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 10:32:20 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 10:37:21 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 443
ERROR - 2020-02-11 10:37:23 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 10:50:20 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 10:50:20 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 10:50:21 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 10:50:23 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 218
ERROR - 2020-02-11 10:50:48 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 10:50:48 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 10:50:50 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 218
ERROR - 2020-02-11 10:51:57 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 10:51:57 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 10:51:59 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 218
ERROR - 2020-02-11 10:59:56 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 10:59:56 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 10:59:58 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 218
ERROR - 2020-02-11 11:00:50 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 11:01:30 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 11:01:30 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 11:01:32 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 218
ERROR - 2020-02-11 11:02:47 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 11:02:47 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 11:02:49 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 218
ERROR - 2020-02-11 11:02:53 --> Query error: ERROR:  no existe la columna «numero_documento» en la relación «pres_representante_legal»
LINE 1: ...= '2020-02-11 11:02:53', "id_tipo_documento" = 1, "numero_do...
                                                             ^ - Invalid query: UPDATE "pres_representante_legal" SET "id" = 309, "id_prescripcion" = 475, "id_usuario" = NULL, "razon_social" = 'LUZ CLARITA', "telefono" = '4444444', "celular" = NULL, "correo_electronico" = 'luz@gmail.com', "num_docum_repre" = '222222', "created_at" = '2020-02-11 10:02:23', "updated_at" = '2020-02-11 11:02:53', "id_tipo_documento" = 1, "numero_documento" = '222222'
WHERE "id" = 309
ERROR - 2020-02-11 11:03:12 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 443
ERROR - 2020-02-11 11:03:16 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 11:03:23 --> Query error: ERROR:  no existe la columna «numero_documento» en la relación «pres_representante_legal»
LINE 1: ...= '2020-02-11 11:03:23', "id_tipo_documento" = 1, "numero_do...
                                                             ^ - Invalid query: UPDATE "pres_representante_legal" SET "id" = 309, "id_prescripcion" = 475, "id_usuario" = NULL, "razon_social" = 'LUZ CLARITA', "telefono" = '4444444', "celular" = NULL, "correo_electronico" = 'luz@gmail.com', "num_docum_repre" = '222222', "created_at" = '2020-02-11 10:02:23', "updated_at" = '2020-02-11 11:03:23', "id_tipo_documento" = 1, "numero_documento" = '222222'
WHERE "id" = 309
ERROR - 2020-02-11 11:03:33 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 443
ERROR - 2020-02-11 11:03:37 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 11:03:42 --> Query error: ERROR:  no existe la columna «numero_documento» en la relación «pres_representante_legal»
LINE 1: ...= '2020-02-11 11:03:42', "id_tipo_documento" = 1, "numero_do...
                                                             ^ - Invalid query: UPDATE "pres_representante_legal" SET "id" = 309, "id_prescripcion" = 475, "id_usuario" = NULL, "razon_social" = 'LUZ CLARITA', "telefono" = '4444444', "celular" = NULL, "correo_electronico" = 'luz@gmail.com', "num_docum_repre" = '222222', "created_at" = '2020-02-11 10:02:23', "updated_at" = '2020-02-11 11:03:42', "id_tipo_documento" = 1, "numero_documento" = '222222'
WHERE "id" = 309
ERROR - 2020-02-11 11:03:55 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 443
ERROR - 2020-02-11 11:03:57 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 11:04:11 --> Query error: ERROR:  no existe la columna «numero_documento» en la relación «pres_representante_legal»
LINE 1: ...= '2020-02-11 11:04:11', "id_tipo_documento" = 1, "numero_do...
                                                             ^ - Invalid query: UPDATE "pres_representante_legal" SET "id" = 309, "id_prescripcion" = 475, "id_usuario" = NULL, "razon_social" = 'LUZ CLARITA', "telefono" = '4444444', "celular" = NULL, "correo_electronico" = 'luz@gmail.com', "num_docum_repre" = '222222', "created_at" = '2020-02-11 10:02:23', "updated_at" = '2020-02-11 11:04:11', "id_tipo_documento" = 1, "numero_documento" = '222222'
WHERE "id" = 309
ERROR - 2020-02-11 11:04:29 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 443
ERROR - 2020-02-11 11:04:32 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 11:04:43 --> Query error: ERROR:  no existe la columna «numero_documento» en la relación «pres_representante_legal»
LINE 1: ...= '2020-02-11 11:04:43', "id_tipo_documento" = 1, "numero_do...
                                                             ^ - Invalid query: UPDATE "pres_representante_legal" SET "id" = 309, "id_prescripcion" = 475, "id_usuario" = NULL, "razon_social" = 'LUZ CLARITA', "telefono" = '4444444', "celular" = NULL, "correo_electronico" = 'luz@gmail.com', "num_docum_repre" = '222222', "created_at" = '2020-02-11 10:02:23', "updated_at" = '2020-02-11 11:04:43', "id_tipo_documento" = 1, "numero_documento" = '222222'
WHERE "id" = 309
ERROR - 2020-02-11 11:04:56 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 443
ERROR - 2020-02-11 11:04:58 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 11:05:08 --> Query error: ERROR:  no existe la columna «numero_documento» en la relación «pres_representante_legal»
LINE 1: ...= '2020-02-11 11:05:08', "id_tipo_documento" = 1, "numero_do...
                                                             ^ - Invalid query: UPDATE "pres_representante_legal" SET "id" = 309, "id_prescripcion" = 475, "id_usuario" = NULL, "razon_social" = 'LUZ CLARITA', "telefono" = '4444444', "celular" = NULL, "correo_electronico" = 'luz@gmail.com', "num_docum_repre" = '222222', "created_at" = '2020-02-11 10:02:23', "updated_at" = '2020-02-11 11:05:08', "id_tipo_documento" = 1, "numero_documento" = '222222'
WHERE "id" = 309
ERROR - 2020-02-11 11:05:15 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 443
ERROR - 2020-02-11 11:05:18 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 11:05:29 --> Query error: ERROR:  no existe la columna «numero_documento» en la relación «pres_representante_legal»
LINE 1: ...= '2020-02-11 11:05:29', "id_tipo_documento" = 1, "numero_do...
                                                             ^ - Invalid query: UPDATE "pres_representante_legal" SET "id" = 309, "id_prescripcion" = 475, "id_usuario" = NULL, "razon_social" = 'LUZ CLARITA', "telefono" = '4444444', "celular" = NULL, "correo_electronico" = 'luz@gmail.com', "num_docum_repre" = '222222', "created_at" = '2020-02-11 10:02:23', "updated_at" = '2020-02-11 11:05:29', "id_tipo_documento" = 1, "numero_documento" = '222222'
WHERE "id" = 309
ERROR - 2020-02-11 11:13:13 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 443
ERROR - 2020-02-11 11:13:15 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 11:13:28 --> Query error: ERROR:  no existe la columna «numero_documento» en la relación «pres_representante_legal»
LINE 1: ...= '2020-02-11 11:13:28', "id_tipo_documento" = 1, "numero_do...
                                                             ^ - Invalid query: UPDATE "pres_representante_legal" SET "id" = 309, "id_prescripcion" = 475, "id_usuario" = NULL, "razon_social" = 'LUZ CLARITA', "telefono" = '4444444', "celular" = NULL, "correo_electronico" = 'luz@gmail.com', "num_docum_repre" = '222222', "created_at" = '2020-02-11 10:02:23', "updated_at" = '2020-02-11 11:13:28', "id_tipo_documento" = 1, "numero_documento" = '222222'
WHERE "id" = 309
ERROR - 2020-02-11 11:13:39 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 443
ERROR - 2020-02-11 11:13:44 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 11:13:52 --> Query error: ERROR:  no existe la columna «numero_documento» en la relación «pres_representante_legal»
LINE 1: ...= '2020-02-11 11:13:52', "id_tipo_documento" = 1, "numero_do...
                                                             ^ - Invalid query: UPDATE "pres_representante_legal" SET "id" = 309, "id_prescripcion" = 475, "id_usuario" = NULL, "razon_social" = 'LUZ CLARITA', "telefono" = '4444444', "celular" = NULL, "correo_electronico" = 'luz@gmail.com', "num_docum_repre" = '222222', "created_at" = '2020-02-11 10:02:23', "updated_at" = '2020-02-11 11:13:52', "id_tipo_documento" = 1, "numero_documento" = '222222'
WHERE "id" = 309
ERROR - 2020-02-11 11:15:46 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 443
ERROR - 2020-02-11 11:15:51 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 11:16:00 --> Query error: ERROR:  no existe la columna «numero_documento» en la relación «pres_representante_legal»
LINE 1: ...= '2020-02-11 11:16:00', "id_tipo_documento" = 1, "numero_do...
                                                             ^ - Invalid query: UPDATE "pres_representante_legal" SET "id" = 309, "id_prescripcion" = 475, "id_usuario" = NULL, "razon_social" = 'LUZ CLARITA', "telefono" = '4444444', "celular" = NULL, "correo_electronico" = 'luz@gmail.com', "num_docum_repre" = '222222', "created_at" = '2020-02-11 10:02:23', "updated_at" = '2020-02-11 11:16:00', "id_tipo_documento" = 1, "numero_documento" = '222222'
WHERE "id" = 309
ERROR - 2020-02-11 11:16:19 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 11:16:21 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 218
ERROR - 2020-02-11 11:16:23 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 443
ERROR - 2020-02-11 11:16:26 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 11:16:36 --> Query error: ERROR:  no existe la columna «numero_documento» en la relación «pres_representante_legal»
LINE 1: ...= '2020-02-11 11:16:36', "id_tipo_documento" = 1, "numero_do...
                                                             ^ - Invalid query: UPDATE "pres_representante_legal" SET "id" = 309, "id_prescripcion" = 475, "id_usuario" = NULL, "razon_social" = 'LUZ CLARITA', "telefono" = '4444444', "celular" = NULL, "correo_electronico" = 'luz@gmail.com', "num_docum_repre" = '222222', "created_at" = '2020-02-11 10:02:23', "updated_at" = '2020-02-11 11:16:36', "id_tipo_documento" = 1, "numero_documento" = '222222'
WHERE "id" = 309
ERROR - 2020-02-11 11:17:12 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 11:17:14 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 218
ERROR - 2020-02-11 11:17:16 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 443
ERROR - 2020-02-11 11:17:18 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 11:17:24 --> Query error: ERROR:  no existe la columna «numero_documento» en la relación «pres_representante_legal»
LINE 1: ...= '2020-02-11 11:17:24', "id_tipo_documento" = 1, "numero_do...
                                                             ^ - Invalid query: UPDATE "pres_representante_legal" SET "id" = 309, "id_prescripcion" = 475, "id_usuario" = NULL, "razon_social" = 'LUZ CLARITA', "telefono" = '4444444', "celular" = NULL, "correo_electronico" = 'luz@gmail.com', "num_docum_repre" = '222222', "created_at" = '2020-02-11 10:02:23', "updated_at" = '2020-02-11 11:17:24', "id_tipo_documento" = 1, "numero_documento" = '222222'
WHERE "id" = 309
ERROR - 2020-02-11 11:19:12 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 11:26:14 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 443
ERROR - 2020-02-11 11:26:16 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 11:27:42 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 11:27:42 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 11:27:44 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 218
ERROR - 2020-02-11 11:27:49 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 11:27:51 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 218
ERROR - 2020-02-11 11:27:51 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 11:27:53 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 218
ERROR - 2020-02-11 14:15:15 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 14:15:19 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 218
ERROR - 2020-02-11 14:26:19 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 14:30:10 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 443
ERROR - 2020-02-11 14:30:15 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 14:30:34 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 443
ERROR - 2020-02-11 14:30:39 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 14:30:43 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 14:31:00 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 443
ERROR - 2020-02-11 14:31:10 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 15:07:23 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 15:09:01 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 15:13:11 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 15:16:20 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 443
ERROR - 2020-02-11 15:16:26 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 15:16:34 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 443
ERROR - 2020-02-11 15:16:35 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 15:16:49 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 443
ERROR - 2020-02-11 15:16:52 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 15:16:52 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 15:17:05 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 443
ERROR - 2020-02-11 15:17:07 --> Could not find the language line "successfully getting"
ERROR - 2020-02-11 15:49:57 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 443
ERROR - 2020-02-11 15:50:02 --> Could not find the language line "successfully getting"
