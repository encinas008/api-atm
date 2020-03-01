<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-08 08:34:30 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 08:34:33 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 08:42:54 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 08:42:57 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 08:51:26 --> Severity: error --> Exception: syntax error, unexpected ')', expecting ']' /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 141
ERROR - 2020-01-08 08:52:28 --> Severity: error --> Exception: syntax error, unexpected ')', expecting ']' /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 144
ERROR - 2020-01-08 08:53:44 --> Severity: error --> Exception: syntax error, unexpected ')', expecting ']' /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 148
ERROR - 2020-01-08 08:53:53 --> Severity: error --> Exception: syntax error, unexpected ')', expecting ']' /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 148
ERROR - 2020-01-08 08:54:43 --> Severity: error --> Exception: syntax error, unexpected ')', expecting ']' /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 148
ERROR - 2020-01-08 08:56:30 --> Severity: error --> Exception: syntax error, unexpected ')', expecting ']' /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 148
ERROR - 2020-01-08 08:57:13 --> Severity: error --> Exception: syntax error, unexpected ')', expecting ']' /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 149
ERROR - 2020-01-08 08:59:24 --> Severity: error --> Exception: syntax error, unexpected ')', expecting ']' /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 149
ERROR - 2020-01-08 08:59:31 --> Severity: error --> Exception: syntax error, unexpected ')', expecting ']' /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 149
ERROR - 2020-01-08 09:01:04 --> Severity: error --> Exception: syntax error, unexpected ')', expecting ']' /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 148
ERROR - 2020-01-08 09:05:45 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 09:05:51 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 09:06:01 --> Severity: Notice --> Undefined variable: declaracion_jurada /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 141
ERROR - 2020-01-08 09:06:01 --> Severity: Notice --> Trying to get property 'id_actividad_economica' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 141
ERROR - 2020-01-08 09:06:36 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 09:06:39 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 09:06:51 --> Severity: Notice --> Undefined variable: declaracion_jurada /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 141
ERROR - 2020-01-08 09:06:51 --> Severity: Notice --> Trying to get property 'id_actividad_economica' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 141
ERROR - 2020-01-08 09:08:01 --> Severity: error --> Exception: syntax error, unexpected '$prescripcion' (T_VARIABLE) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 142
ERROR - 2020-01-08 09:08:09 --> Severity: error --> Exception: syntax error, unexpected '$prescripcion' (T_VARIABLE) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 142
ERROR - 2020-01-08 09:08:38 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 09:08:41 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 09:08:52 --> Query error: ERROR:  la sintaxis de entrada no es válida para integer: «da15a032870dd8073710c3ea240c4687»
LINE 3: WHERE "id" = 'da15a032870dd8073710c3ea240c4687'
                     ^ - Invalid query: SELECT *
FROM "pres_prescripcion"
WHERE "id" = 'da15a032870dd8073710c3ea240c4687'
ERROR - 2020-01-08 09:20:10 --> 404 Page Not Found: api/PresRepresentanteLegal/getByIdPrescripcion
ERROR - 2020-01-08 09:23:26 --> 404 Page Not Found: api/PresRepresentanteLegal/getByIdPrescripcion
ERROR - 2020-01-08 09:25:32 --> Severity: error --> Exception: syntax error, unexpected '378' (T_LNUMBER), expecting variable (T_VARIABLE) /var/www/html/restServerAtm/application/models/PresRepresentanteLegal_model.php 22
ERROR - 2020-01-08 09:30:02 --> 404 Page Not Found: Model/PresRepresentanteLegal
ERROR - 2020-01-08 09:30:41 --> 404 Page Not Found: Model/PresRepresentanteLegal
ERROR - 2020-01-08 09:30:53 --> 404 Page Not Found: Model/PresRepresentanteLegal
ERROR - 2020-01-08 10:18:13 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 10:18:13 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 10:30:30 --> Severity: error --> Exception: syntax error, unexpected 'if' (T_IF) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 145
ERROR - 2020-01-08 10:30:33 --> Severity: error --> Exception: syntax error, unexpected 'if' (T_IF) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 145
ERROR - 2020-01-08 11:29:25 --> Query error: ERROR:  no existe la columna ptot.id_tipo_objeto_tributario
LINE 3: ...utario" "ptot" ON "pres_objeto_tributario"."id" = "ptot"."id...
                                                             ^ - Invalid query: SELECT "pres_objeto_tributario".*
FROM "pres_objeto_tributario"
JOIN "pres_tipo_objeto_tributario" "ptot" ON "pres_objeto_tributario"."id" = "ptot"."id_tipo_objeto_tributario"
WHERE "id_prescripcion" = '378'
ERROR - 2020-01-08 11:36:20 --> Severity: Notice --> Undefined variable: pres_objeto_gestion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 148
ERROR - 2020-01-08 11:51:13 --> Severity: error --> Exception: syntax error, unexpected '$pres_objeto_tributario' (T_VARIABLE) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 154
ERROR - 2020-01-08 11:51:37 --> Severity: error --> Exception: syntax error, unexpected '$pres_objeto_tributario' (T_VARIABLE) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 154
ERROR - 2020-01-08 11:52:33 --> Severity: error --> Exception: Call to undefined method CI_DB_pdo_pgsql_driver::result() /var/www/html/restServerAtm/application/models/PresObjetoTributario_model.php 27
ERROR - 2020-01-08 11:55:16 --> Severity: error --> Exception: Call to undefined method CI_DB_pdo_pgsql_driver::row() /var/www/html/restServerAtm/application/models/PresObjetoTributario_model.php 28
ERROR - 2020-01-08 11:58:40 --> Severity: error --> Exception: Call to undefined method CI_DB_pdo_pgsql_driver::result() /var/www/html/restServerAtm/application/models/PresObjetoTributario_model.php 27
ERROR - 2020-01-08 15:15:58 --> Severity: Warning --> Use of undefined constant lenth - assumed 'lenth' (this will throw an Error in a future version of PHP) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 152
ERROR - 2020-01-08 15:15:58 --> Severity: Notice --> Array to string conversion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 152
ERROR - 2020-01-08 15:18:08 --> Severity: Warning --> Use of undefined constant lenth - assumed 'lenth' (this will throw an Error in a future version of PHP) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 152
ERROR - 2020-01-08 15:18:08 --> Severity: Notice --> Array to string conversion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 152
ERROR - 2020-01-08 15:18:08 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 155
ERROR - 2020-01-08 15:18:08 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 155
ERROR - 2020-01-08 15:20:33 --> Severity: Warning --> Use of undefined constant lenth - assumed 'lenth' (this will throw an Error in a future version of PHP) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 152
ERROR - 2020-01-08 15:20:33 --> Severity: Notice --> Array to string conversion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 152
ERROR - 2020-01-08 15:20:33 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 156
ERROR - 2020-01-08 15:20:33 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 156
ERROR - 2020-01-08 15:21:18 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 156
ERROR - 2020-01-08 15:21:18 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 156
ERROR - 2020-01-08 15:22:44 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 156
ERROR - 2020-01-08 15:22:44 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 156
ERROR - 2020-01-08 15:23:28 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 156
ERROR - 2020-01-08 15:23:28 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 156
ERROR - 2020-01-08 15:34:09 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 156
ERROR - 2020-01-08 15:34:09 --> Severity: 4096 --> Object of class stdClass could not be converted to string /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 156
ERROR - 2020-01-08 16:36:56 --> Severity: Compile Error --> Cannot redeclare PresObjetoTributario_model::getByIdObjetoTributario() /var/www/html/restServerAtm/application/models/PresObjetoTributario_model.php 33
ERROR - 2020-01-08 16:37:10 --> Severity: Compile Error --> Cannot redeclare PresObjetoTributario_model::getByIdObjetoTributario() /var/www/html/restServerAtm/application/models/PresObjetoTributario_model.php 33
ERROR - 2020-01-08 16:38:01 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 16:38:03 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 16:49:52 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 16:49:54 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 17:00:44 --> Severity: Notice --> Trying to get property 'gestion' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 166
ERROR - 2020-01-08 17:00:54 --> Severity: Notice --> Trying to get property 'gestion' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 166
ERROR - 2020-01-08 17:09:02 --> Severity: error --> Exception: syntax error, unexpected '$pres_objeto_gestion' (T_VARIABLE) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 168
ERROR - 2020-01-08 17:09:33 --> Severity: error --> Exception: syntax error, unexpected '$pres_objeto_gestion' (T_VARIABLE) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 165
ERROR - 2020-01-08 17:09:59 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 160
ERROR - 2020-01-08 17:09:59 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/core/MY_model.php 35
ERROR - 2020-01-08 17:11:12 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 160
ERROR - 2020-01-08 17:11:12 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/core/MY_model.php 35
ERROR - 2020-01-08 17:15:30 --> Severity: error --> Exception: syntax error, unexpected '$pres_objeto_gestion' (T_VARIABLE) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 168
ERROR - 2020-01-08 17:16:06 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 167
ERROR - 2020-01-08 17:16:06 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 167
ERROR - 2020-01-08 17:16:06 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 168
ERROR - 2020-01-08 17:16:06 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 168
ERROR - 2020-01-08 17:16:06 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 169
ERROR - 2020-01-08 17:16:06 --> Severity: Notice --> Trying to get property 'gestion' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 169
ERROR - 2020-01-08 17:16:06 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 170
ERROR - 2020-01-08 17:16:06 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 170
ERROR - 2020-01-08 17:17:46 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 17:17:49 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 17:19:05 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 17:19:08 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 17:38:06 --> Severity: error --> Exception: Cannot use object of type stdClass as array /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 169
ERROR - 2020-01-08 17:38:52 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 17:38:54 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 17:40:47 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 17:40:49 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 17:41:24 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 17:41:26 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 17:56:44 --> Severity: error --> Exception: syntax error, unexpected '$pres_representante_legal_in' (T_VARIABLE) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 142
ERROR - 2020-01-08 17:56:58 --> Severity: error --> Exception: syntax error, unexpected '$pres_representante_legal_in' (T_VARIABLE) /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 142
ERROR - 2020-01-08 17:57:43 --> Severity: error --> Exception: Cannot use object of type stdClass as array /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 171
ERROR - 2020-01-08 17:59:01 --> Severity: error --> Exception: Cannot use object of type stdClass as array /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 171
ERROR - 2020-01-08 18:11:51 --> Severity: error --> Exception: Cannot use object of type stdClass as array /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 156
ERROR - 2020-01-08 18:16:02 --> Severity: error --> Exception: Cannot use object of type stdClass as array /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 156
ERROR - 2020-01-08 18:36:59 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 18:37:05 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 18:40:37 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 18:40:40 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 21:47:20 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 21:48:42 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 21:56:23 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 21:56:30 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 22:03:18 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 22:08:20 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 22:08:23 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 22:08:26 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 22:10:26 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 22:11:02 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 22:11:08 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 22:11:12 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 22:19:59 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 22:20:37 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 22:21:23 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 22:33:28 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 22:37:16 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 22:37:29 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 22:41:01 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 22:43:00 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 22:43:19 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 22:43:23 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 22:46:18 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 22:48:27 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 22:48:28 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 22:48:31 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 22:49:12 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 22:49:16 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 23:43:51 --> Could not find the language line "successfully getting"
ERROR - 2020-01-08 23:55:51 --> Could not find the language line "successfully getting"
