<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-02 08:26:29 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 08:26:29 --> Could not find the language line "gestion"
ERROR - 2020-01-02 08:26:35 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 08:59:13 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 08:59:13 --> Could not find the language line "gestion"
ERROR - 2020-01-02 08:59:19 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 09:00:26 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 09:00:26 --> Could not find the language line "gestion"
ERROR - 2020-01-02 09:00:31 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 09:05:40 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ')' /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 400
ERROR - 2020-01-02 09:05:45 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ')' /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 400
ERROR - 2020-01-02 09:06:12 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ')' /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 400
ERROR - 2020-01-02 09:06:39 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ')' /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 400
ERROR - 2020-01-02 09:06:57 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ')' /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 400
ERROR - 2020-01-02 09:07:02 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ')' /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 400
ERROR - 2020-01-02 09:07:18 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ')' /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 400
ERROR - 2020-01-02 09:10:37 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 09:10:37 --> Could not find the language line "gestion"
ERROR - 2020-01-02 09:10:46 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 09:25:00 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 09:25:00 --> Could not find the language line "gestion"
ERROR - 2020-01-02 09:25:05 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 09:31:32 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 09:31:32 --> Could not find the language line "gestion"
ERROR - 2020-01-02 09:57:25 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 09:57:25 --> Could not find the language line "gestion"
ERROR - 2020-01-02 09:57:25 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 09:57:25 --> Could not find the language line "gestion"
ERROR - 2020-01-02 09:57:25 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 09:57:25 --> Could not find the language line "gestion"
ERROR - 2020-01-02 09:57:25 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 09:57:25 --> Could not find the language line "gestion"
ERROR - 2020-01-02 09:57:50 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 09:57:50 --> Could not find the language line "gestion"
ERROR - 2020-01-02 09:58:02 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 10:02:53 --> Query error: ERROR:  error de sintaxis en o cerca de «"d"»
LINE 8: ...ptot"."name", "p"."id", "pot"."numero, d"."zona," "d"."direc...
                                                             ^ - Invalid query: SELECT "pp"."fur", "ptot"."name", "p".*, "pot"."numero", "d"."zona", "d"."direccion"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptot" ON "ptot"."id" = "pot"."id_tipo_objeto_tributario"
JOIN "persona" as "p" ON "p"."id_prescripcion" = "pot"."id_prescripcion"
JOIN "domicilio" as "d" ON "p"."id" = "d"."id_persona"
WHERE "pp"."token" = 'da15a032870dd8073710c3ea240c4687'
GROUP BY "pp"."fur", "ptot"."name", "p"."id", "pot"."numero, d"."zona," "d"."direccion"
ERROR - 2020-01-02 10:03:10 --> Query error: ERROR:  error de sintaxis en o cerca de «"d"»
LINE 8: ...ptot"."name", "p"."id", "pot"."numero, d"."zona," "d"."direc...
                                                             ^ - Invalid query: SELECT "pp"."fur", "ptot"."name", "p".*, "pot"."numero", "d"."zona", "d"."direccion"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptot" ON "ptot"."id" = "pot"."id_tipo_objeto_tributario"
JOIN "persona" as "p" ON "p"."id_prescripcion" = "pot"."id_prescripcion"
JOIN "domicilio" as "d" ON "p"."id" = "d"."id_persona"
WHERE "pp"."token" = 'da15a032870dd8073710c3ea240c4687'
GROUP BY "pp"."fur", "ptot"."name", "p"."id", "pot"."numero, d"."zona," "d"."direccion"
ERROR - 2020-01-02 10:05:10 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 10:05:10 --> Could not find the language line "gestion"
ERROR - 2020-01-02 10:20:13 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 10:20:13 --> Could not find the language line "gestion"
ERROR - 2020-01-02 10:20:16 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 10:21:00 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 10:21:00 --> Could not find the language line "gestion"
ERROR - 2020-01-02 10:22:21 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 10:22:22 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 10:22:22 --> Could not find the language line "gestion"
ERROR - 2020-01-02 10:22:23 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 10:22:23 --> Could not find the language line "gestion"
ERROR - 2020-01-02 10:22:25 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 10:23:22 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 10:23:22 --> Could not find the language line "gestion"
ERROR - 2020-01-02 10:23:24 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 10:24:16 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 10:24:16 --> Could not find the language line "gestion"
ERROR - 2020-01-02 10:24:19 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 10:33:34 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 10:33:34 --> Could not find the language line "gestion"
ERROR - 2020-01-02 10:33:37 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 10:34:01 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 10:34:01 --> Could not find the language line "gestion"
ERROR - 2020-01-02 10:34:04 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 10:47:31 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 10:47:31 --> Could not find the language line "gestion"
ERROR - 2020-01-02 10:47:38 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:20:03 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:20:03 --> Could not find the language line "gestion"
ERROR - 2020-01-02 11:20:14 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:22:47 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:22:47 --> Could not find the language line "gestion"
ERROR - 2020-01-02 11:22:52 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:26:24 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:26:24 --> Could not find the language line "gestion"
ERROR - 2020-01-02 11:26:27 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:26:53 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:26:53 --> Could not find the language line "gestion"
ERROR - 2020-01-02 11:26:55 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:30:57 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:31:00 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:31:19 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:31:21 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:33:56 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:34:05 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:45:34 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:45:48 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:46:57 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:48:52 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:48:55 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:48:57 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:49:27 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:49:30 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:51:16 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:51:28 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:52:07 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:52:10 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:52:54 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:53:31 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:53:33 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:53:36 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:54:47 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 11:54:55 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 15:40:16 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 15:46:41 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 16:46:45 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 16:46:48 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 16:47:26 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 16:47:29 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 16:49:41 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 16:49:44 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 16:56:09 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 16:58:23 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 16:58:25 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 16:58:32 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 16:58:43 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 16:58:55 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 16:59:13 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 16:59:39 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:03:21 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:03:24 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:12:34 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:12:50 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:20:40 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:20:42 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:21:21 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:21:32 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:22:51 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:23:09 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:26:09 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:26:12 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:29:13 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:29:19 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:30:41 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:30:44 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:35:28 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:35:31 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:36:11 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:36:15 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:37:30 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:37:35 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:39:31 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:39:35 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:40:37 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:40:40 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:41:00 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:41:03 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:47:16 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:47:32 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:48:31 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:48:34 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:49:27 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:49:32 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:50:57 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:51:01 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:52:58 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:55:43 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:55:46 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 17:55:49 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:05:40 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:05:44 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:16:44 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:16:48 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:22:46 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:22:50 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:22:50 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:22:53 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:24:35 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:24:47 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:24:47 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:25:11 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:25:36 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:25:39 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:26:03 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:26:05 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:29:30 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:29:43 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:29:43 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:29:47 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:33:13 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:33:16 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:33:23 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:33:29 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:34:10 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:34:28 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:34:54 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:34:58 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:35:54 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:35:57 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:36:15 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:36:45 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:36:45 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:36:48 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:37:31 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:37:33 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:37:33 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:37:36 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:37:47 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:37:50 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:39:11 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:39:14 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:39:15 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 18:39:17 --> Could not find the language line "successfully getting"
ERROR - 2020-01-02 22:15:27 --> Could not find the language line "successfully getting"