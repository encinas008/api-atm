<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-08-18 09:12:17 --> Query error: ERROR:  no existe la columna «id_usuario» en la relación «declaracion_jurada»
LINE 1: ...ado", "id_solicitante", "id_actividad_economica", "id_usuari...
                                                             ^ - Invalid query: INSERT INTO "declaracion_jurada" ("fur", "id_estado", "id_solicitante", "id_actividad_economica", "id_usuario", "token", "created_at", "updated_at") VALUES ('90676', 1, 1, 1, 1, 'ff996bb4f0974fdf3170d22c9790a072', '2019-08-18 09:12:17', '2019-08-18 09:12:17')
ERROR - 2019-08-18 09:34:34 --> Severity: error --> Exception: Call to undefined function getByTokenJWT() /opt/lampp/htdocs/restServerAtm/application/controllers/api/Domicilio.php 105
ERROR - 2019-08-18 09:35:14 --> Severity: error --> Exception: Call to undefined method Usuario_model::getByTokenJWT() /opt/lampp/htdocs/restServerAtm/application/controllers/api/Domicilio.php 105
ERROR - 2019-08-18 09:51:35 --> Query error: ERROR:  no existe la columna «image» en la relación «domicilio_actividad_economica»
LINE 1: ..., "celular", "latitud", "longitud", "coordinate", "image", "...
                                                             ^ - Invalid query: INSERT INTO "domicilio_actividad_economica" ("avenida", "direccion", "numero", "zona", "edificio", "bloque", "piso", "dpto_of_local", "telefono", "celular", "latitud", "longitud", "coordinate", "image", "id_actividad_economica", "id_usuario", "created_at", "updated_at") VALUES ('on', '1', '1', '1', '1', '1', '1', '1', '1', '1', '7.187056951719051', '58.50721838159484', '800059.5201676218,8074631.662440662', '', 2, 1, '2019-08-18 09:51:35', '2019-08-18 09:51:35')
ERROR - 2019-08-18 09:52:32 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /opt/lampp/htdocs/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 219
ERROR - 2019-08-18 13:52:51 --> Severity: error --> Exception: Call to undefined function dat() /opt/lampp/htdocs/restServerAtm/application/controllers/api/Usuario.php 105
ERROR - 2019-08-18 13:53:10 --> Severity: Warning --> date() expects at least 1 parameter, 0 given /opt/lampp/htdocs/restServerAtm/application/controllers/api/Usuario.php 105
ERROR - 2019-08-18 14:05:41 --> Severity: Notice --> Array to string conversion /opt/lampp/htdocs/restServerAtm/application/controllers/api/Usuario.php 90
ERROR - 2019-08-18 14:09:09 --> Severity: Warning --> date() expects at least 1 parameter, 0 given /opt/lampp/htdocs/restServerAtm/application/controllers/api/Usuario.php 91
ERROR - 2019-08-18 14:40:53 --> Severity: Notice --> Undefined variable: now /opt/lampp/htdocs/restServerAtm/application/controllers/api/Usuario.php 118
ERROR - 2019-08-18 14:40:53 --> Severity: error --> Exception: Call to a member function format() on null /opt/lampp/htdocs/restServerAtm/application/controllers/api/Usuario.php 118
