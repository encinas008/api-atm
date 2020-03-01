<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-15 08:52:49 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 09:07:32 --> Severity: Notice --> Undefined property: DomicilioPres::$PresRepresentanteLegal_model /var/www/html/restServerAtm/application/controllers/api/DomicilioPres.php 141
ERROR - 2020-01-15 09:07:32 --> Severity: error --> Exception: Call to a member function getByIdPrescripcion() on null /var/www/html/restServerAtm/application/controllers/api/DomicilioPres.php 141
ERROR - 2020-01-15 09:10:03 --> Severity: Notice --> Undefined property: DomicilioPres::$PresRepresentanteLegal_model /var/www/html/restServerAtm/application/controllers/api/DomicilioPres.php 143
ERROR - 2020-01-15 09:10:03 --> Severity: error --> Exception: Call to a member function getByIdPrescripcion() on null /var/www/html/restServerAtm/application/controllers/api/DomicilioPres.php 143
ERROR - 2020-01-15 09:27:23 --> Severity: Notice --> Undefined variable: pres_representante_legal_in /var/www/html/restServerAtm/application/controllers/api/DomicilioPres.php 145
ERROR - 2020-01-15 09:27:23 --> Severity: Notice --> Undefined variable: pres_representante_legal_in /var/www/html/restServerAtm/application/controllers/api/DomicilioPres.php 146
ERROR - 2020-01-15 09:41:41 --> Query error: ERROR:  no existe la columna «id_persona» en la relación «persona»
LINE 1: UPDATE "persona" SET "id" = 322, "id_persona" = 333, "id_usu...
                                         ^ - Invalid query: UPDATE "persona" SET "id" = 322, "id_persona" = 333, "id_usuario" = NULL, "avenida" = NULL, "calle" = NULL, "pasaje" = NULL, "plaza_plazuela" = NULL, "direccion" = 'RWERWERWER', "numero" = NULL, "zona" = 'ZONA TEST', "edificio" = NULL, "bloque" = NULL, "piso" = NULL, "dpto_of_local" = NULL, "telefono" = NULL, "celular" = NULL, "latitud" = NULL, "longitud" = NULL, "image" = NULL, "coordinate" = NULL, "created_at" = '2019-12-14 10:52:25', "updated_at" = '2020-01-15 09:41:41'
WHERE "id" = 322
ERROR - 2020-01-15 09:55:31 --> Query error: ERROR:  no existe la columna «id_persona» en la relación «persona»
LINE 1: UPDATE "persona" SET "id" = 322, "id_persona" = 333, "id_usu...
                                         ^ - Invalid query: UPDATE "persona" SET "id" = 322, "id_persona" = 333, "id_usuario" = NULL, "avenida" = NULL, "calle" = NULL, "pasaje" = NULL, "plaza_plazuela" = NULL, "direccion" = 'RWERWERWER', "numero" = NULL, "zona" = 'ZONA TEST', "edificio" = NULL, "bloque" = NULL, "piso" = NULL, "dpto_of_local" = NULL, "telefono" = NULL, "celular" = NULL, "latitud" = NULL, "longitud" = NULL, "image" = NULL, "coordinate" = NULL, "created_at" = '2019-12-14 10:52:25', "updated_at" = '2020-01-15 09:55:31'
WHERE "id" = 322
ERROR - 2020-01-15 10:02:45 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 10:02:47 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 10:13:07 --> Severity: Notice --> Undefined property: Prescripcion::$Prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-15 10:13:07 --> Severity: Notice --> Trying to get property 'model' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-15 10:13:07 --> Severity: error --> Exception: Call to a member function isDataDomicilio() on null /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-15 10:13:12 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 10:13:16 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 10:16:14 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 10:16:16 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 10:23:58 --> Severity: Notice --> Undefined variable: prescripcion /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 116
ERROR - 2020-01-15 10:23:58 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 116
ERROR - 2020-01-15 10:24:00 --> Severity: Notice --> Undefined variable: pres_objeto_gestion_in /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 124
ERROR - 2020-01-15 10:24:00 --> Severity: Warning --> sizeof(): Parameter must be an array or an object that implements Countable /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 124
ERROR - 2020-01-15 10:27:21 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 10:27:27 --> Severity: Notice --> Undefined variable: prescripcion /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 117
ERROR - 2020-01-15 10:27:27 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 117
ERROR - 2020-01-15 10:27:27 --> Severity: Notice --> Undefined variable: pres_objeto_gestion_in /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 125
ERROR - 2020-01-15 10:27:27 --> Severity: Warning --> sizeof(): Parameter must be an array or an object that implements Countable /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 125
ERROR - 2020-01-15 10:30:30 --> Severity: Notice --> Undefined variable: pres_objeto_gestion_in /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 126
ERROR - 2020-01-15 10:30:30 --> Severity: Warning --> sizeof(): Parameter must be an array or an object that implements Countable /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 126
ERROR - 2020-01-15 10:31:39 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:31:39 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:31:39 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:31:39 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:31:39 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:31:39 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:31:39 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:31:39 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:31:39 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:31:39 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:31:39 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:31:39 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:31:39 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:31:39 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:31:39 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:31:39 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:31:39 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:31:39 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:35:11 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:35:11 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:35:11 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:35:11 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:35:11 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:35:11 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:35:11 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:35:11 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:35:11 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:35:11 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:35:11 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:35:11 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:35:11 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:35:11 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:35:11 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:35:11 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:35:11 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:35:11 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:38:11 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:38:11 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:38:11 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:38:11 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:38:11 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:38:11 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:38:11 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:38:11 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:38:11 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:38:11 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:38:11 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:38:11 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:38:11 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:38:11 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:38:11 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:38:11 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:38:11 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:38:11 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:40:23 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:40:23 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:40:23 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:40:23 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:40:23 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:40:23 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:40:23 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:40:23 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:40:23 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:40:23 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:40:23 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:40:23 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:40:23 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:40:23 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:40:23 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:40:23 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:40:23 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:40:23 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:42:26 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:42:26 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:42:26 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:42:26 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:42:26 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:42:26 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:42:26 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:42:26 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:42:26 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:42:26 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:42:26 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:42:26 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:42:26 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:42:26 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:42:26 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:42:26 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:42:26 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:42:26 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:43:35 --> Severity: Notice --> Undefined variable: pres_objeto_gestion /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 126
ERROR - 2020-01-15 10:43:35 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:43:35 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:43:35 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:43:35 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:43:35 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:43:35 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:43:35 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:43:35 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:43:35 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:43:35 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:43:35 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:43:35 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:43:35 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:43:35 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:43:35 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:43:35 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:43:35 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:43:35 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:43:54 --> Severity: Notice --> Undefined variable: pres_objeto_gestion /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 126
ERROR - 2020-01-15 10:43:54 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:43:54 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:43:54 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:43:54 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:43:54 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:43:54 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:43:54 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:43:54 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:43:54 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:43:54 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:43:54 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:43:54 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:43:54 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:43:54 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:43:54 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:43:54 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:43:54 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:43:54 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:44:03 --> Severity: Notice --> Undefined variable: pres_objeto_gestion /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 126
ERROR - 2020-01-15 10:44:03 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:44:03 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:44:03 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:44:03 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:44:03 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:44:03 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:44:03 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:44:03 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:44:03 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:44:03 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:44:03 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:44:03 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:44:03 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:44:03 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 128
ERROR - 2020-01-15 10:44:03 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:44:03 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:44:03 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:44:03 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:45:17 --> Severity: Notice --> Undefined variable: pres_objeto_gestion /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 127
ERROR - 2020-01-15 10:45:17 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:45:17 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:45:17 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:45:17 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:45:17 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:45:17 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:45:17 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:45:17 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:45:17 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:45:17 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:45:17 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:45:17 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:45:17 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:45:17 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:45:17 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:45:17 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:45:17 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:45:17 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:45:27 --> Severity: Notice --> Undefined variable: pres_objeto_gestion /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 127
ERROR - 2020-01-15 10:45:27 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:45:27 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:45:27 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:45:27 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:45:27 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:45:27 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:45:27 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:45:27 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:45:27 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:45:27 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:45:27 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:45:27 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:45:27 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:45:27 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:45:27 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:45:27 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:45:27 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:45:27 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:46:21 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:46:21 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:46:21 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:46:21 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:46:21 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:46:21 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:46:21 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:46:21 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:46:21 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:46:21 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:46:21 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:46:21 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:46:21 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:46:21 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:46:21 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:46:21 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:46:21 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:46:21 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:50:05 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:50:05 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:50:05 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:50:05 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:50:05 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:50:05 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:50:05 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:50:05 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:50:05 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:50:05 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:50:05 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:50:05 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:50:05 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:50:05 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:50:05 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:50:53 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:50:53 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:50:53 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:50:53 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:50:53 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:50:53 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:50:53 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:50:53 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:50:53 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:50:53 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:50:53 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:50:53 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:50:53 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:50:53 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:50:53 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:51:23 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:51:23 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:51:23 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:51:23 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:51:23 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:51:23 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:51:23 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:51:23 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:51:23 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:51:23 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:51:23 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:51:23 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:51:23 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:51:23 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:51:23 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:51:39 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:51:39 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:51:39 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:51:39 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:51:39 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:51:39 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:51:39 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:51:39 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:51:39 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:51:39 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:51:39 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 129
ERROR - 2020-01-15 10:51:39 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:51:39 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:51:39 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:51:39 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 132
ERROR - 2020-01-15 10:52:59 --> Severity: error --> Exception: syntax error, unexpected '$pres_objeto_tributario_in' (T_VARIABLE) /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 120
ERROR - 2020-01-15 10:53:50 --> Severity: error --> Exception: syntax error, unexpected '$pres_objeto_tributario_in' (T_VARIABLE) /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 120
ERROR - 2020-01-15 10:53:58 --> Severity: error --> Exception: syntax error, unexpected '$pres_objeto_tributario_in' (T_VARIABLE) /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 120
ERROR - 2020-01-15 10:54:14 --> Severity: error --> Exception: syntax error, unexpected '$pres_objeto_tributario_in' (T_VARIABLE) /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 120
ERROR - 2020-01-15 10:55:13 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:55:13 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:55:13 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:55:13 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:55:13 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:55:13 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:55:13 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:55:13 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:55:13 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:55:13 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:55:13 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:55:13 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:55:13 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:55:13 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:55:13 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:55:13 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:55:13 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:55:13 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:55:55 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:55:55 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:55:55 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:55:55 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:55:55 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:55:55 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:55:55 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:55:55 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:55:55 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:55:55 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:55:55 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:55:55 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:55:55 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:55:55 --> Severity: Notice --> Trying to get property 'id_tipo_objeto_tributario' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 130
ERROR - 2020-01-15 10:55:55 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:55:55 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:55:55 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:55:55 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:57:09 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:57:09 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:57:09 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:57:09 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:57:09 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:57:09 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:57:09 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:57:09 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:57:09 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:57:09 --> Severity: Notice --> Trying to get property 'numero' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 131
ERROR - 2020-01-15 10:57:09 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:57:09 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:57:50 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:57:50 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:57:50 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:57:50 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:57:50 --> Severity: Notice --> Undefined offset: 0 /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:57:50 --> Severity: Notice --> Trying to get property 'id_prescripcion' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:58:36 --> Severity: Notice --> Undefined index: id_prescripcion /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:58:36 --> Severity: Notice --> Undefined index: id_prescripcion /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:58:36 --> Severity: Notice --> Undefined index: id_prescripcion /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:59:29 --> Severity: Notice --> Undefined index: id_prescripcion /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:59:29 --> Severity: Notice --> Undefined index: id_prescripcion /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 10:59:29 --> Severity: Notice --> Undefined index: id_prescripcion /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 11:00:45 --> Severity: Notice --> Undefined index: id_prescripcion /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 11:00:45 --> Severity: Notice --> Undefined index: id_prescripcion /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 11:00:45 --> Severity: Notice --> Undefined index: id_prescripcion /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 11:02:41 --> Severity: Notice --> Undefined property: stdClass::$id_prescripcion /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 11:02:41 --> Severity: Notice --> Undefined property: stdClass::$id_prescripcion /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 11:02:41 --> Severity: Notice --> Undefined property: stdClass::$id_prescripcion /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 11:03:07 --> Severity: Notice --> Undefined property: stdClass::$id_prescripcion /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 11:03:07 --> Severity: Notice --> Undefined property: stdClass::$id_prescripcion /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 11:03:07 --> Severity: Notice --> Undefined property: stdClass::$id_prescripcion /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 133
ERROR - 2020-01-15 12:08:54 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 12:08:56 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 14:17:01 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 14:17:37 --> Severity: Notice --> Undefined property: Prescripcion::$Prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-15 14:17:37 --> Severity: Notice --> Trying to get property 'model' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-15 14:17:37 --> Severity: error --> Exception: Call to a member function isDataDomicilio() on null /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-15 14:17:48 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 14:24:54 --> Severity: Notice --> Undefined property: Prescripcion::$Prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-15 14:24:54 --> Severity: Notice --> Trying to get property 'model' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-15 14:24:54 --> Severity: error --> Exception: Call to a member function isDataDomicilio() on null /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-15 14:24:56 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 14:31:37 --> Severity: Notice --> Undefined property: Prescripcion::$Prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-15 14:31:37 --> Severity: Notice --> Trying to get property 'model' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-15 14:31:37 --> Severity: error --> Exception: Call to a member function isDataDomicilio() on null /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-15 14:31:47 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 14:37:42 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 14:39:12 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 14:53:26 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 14:53:44 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 14:54:26 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 14:54:29 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 14:55:18 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 14:58:58 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 16:31:34 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 16:44:04 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 16:52:56 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 17:03:59 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 17:16:46 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 17:21:25 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 17:22:08 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 17:25:45 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Report.php 273
ERROR - 2020-01-15 17:26:19 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Report.php 273
ERROR - 2020-01-15 17:33:38 --> Severity: Notice --> Undefined property: Prescripcion::$Prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-15 17:33:38 --> Severity: Notice --> Trying to get property 'model' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-15 17:33:38 --> Severity: error --> Exception: Call to a member function isDataDomicilio() on null /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-15 17:35:24 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 17:55:14 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 17:59:23 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Report.php 273
ERROR - 2020-01-15 18:07:05 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 18:08:44 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 18:13:20 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/Report.php 273
ERROR - 2020-01-15 18:15:26 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/DomicilioPres.php 101
ERROR - 2020-01-15 18:15:27 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 18:16:35 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 85
ERROR - 2020-01-15 18:16:35 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 85
ERROR - 2020-01-15 18:16:35 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 85
ERROR - 2020-01-15 18:16:35 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/ObjectoTributario.php 85
ERROR - 2020-01-15 18:17:49 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 18:18:03 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 18:27:23 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 18:29:51 --> Severity: Notice --> Undefined property: Prescripcion::$Prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-15 18:29:51 --> Severity: Notice --> Trying to get property 'model' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-15 18:29:51 --> Severity: error --> Exception: Call to a member function isDataDomicilio() on null /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-15 18:29:56 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 18:29:58 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 18:31:04 --> Severity: Notice --> Undefined property: Prescripcion::$Prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-15 18:31:04 --> Severity: Notice --> Trying to get property 'model' of non-object /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-15 18:31:04 --> Severity: error --> Exception: Call to a member function isDataDomicilio() on null /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 425
ERROR - 2020-01-15 18:31:31 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 18:31:36 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 18:35:33 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 18:35:34 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 18:36:50 --> Could not find the language line "successfully getting"
ERROR - 2020-01-15 18:36:51 --> Could not find the language line "successfully getting"
