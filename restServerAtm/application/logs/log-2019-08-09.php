<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-08-09 09:36:17 --> Severity: Core Warning --> Module 'pgsql' already loaded Unknown 0
ERROR - 2019-08-09 09:36:37 --> Severity: Core Warning --> Module 'pgsql' already loaded Unknown 0
ERROR - 2019-08-09 09:36:58 --> Severity: Core Warning --> Module 'pgsql' already loaded Unknown 0
ERROR - 2019-08-09 09:37:39 --> Severity: Core Warning --> Module 'pgsql' already loaded Unknown 0
ERROR - 2019-08-09 09:38:57 --> Severity: Core Warning --> Module 'pgsql' already loaded Unknown 0
ERROR - 2019-08-09 10:14:06 --> Severity: Core Warning --> Module 'pgsql' already loaded Unknown 0
ERROR - 2019-08-09 10:14:37 --> Severity: Core Warning --> Module 'pgsql' already loaded Unknown 0
ERROR - 2019-08-09 10:38:04 --> Severity: Core Warning --> Module 'pgsql' already loaded Unknown 0
ERROR - 2019-08-09 10:38:16 --> Severity: Core Warning --> Module 'pgsql' already loaded Unknown 0
ERROR - 2019-08-09 10:38:37 --> Severity: Core Warning --> Module 'pgsql' already loaded Unknown 0
ERROR - 2019-08-09 11:31:48 --> 404 Page Not Found: api/Declaracion-jurada/complete
ERROR - 2019-08-09 11:54:29 --> 404 Page Not Found: api/Declaracion-jurada/complete
ERROR - 2019-08-09 11:55:05 --> 404 Page Not Found: api/Declaracion-jurada/complete
ERROR - 2019-08-09 11:56:44 --> 404 Page Not Found: api/Declaracion-jurada/complete
ERROR - 2019-08-09 13:01:39 --> Could not find the language line "actividad_economica"
ERROR - 2019-08-09 18:13:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  no existe la columna «id_tipo_domicilio» en la relación «declaracion_jurada»
LINE 1: ...1', &quot;token&quot; = '6cdbe7c3761b452525cf3b6baea1c9ea', &quot;id_tipo_d...
                                                             ^ /var/www/html/restServerAtm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-08-09 18:13:01 --> Query error: ERROR:  no existe la columna «id_tipo_domicilio» en la relación «declaracion_jurada»
LINE 1: ...1', "token" = '6cdbe7c3761b452525cf3b6baea1c9ea', "id_tipo_d...
                                                             ^ - Invalid query: UPDATE "declaracion_jurada" SET "id" = '52', "id_estado" = '1', "id_solicitante" = '107', "id_actividad_economica" = '92', "numero" = '6344000052', "fur" = '90676', "created_at" = '2019-08-09 16:36:57', "updated_at" = '2019-08-09 18:13:01', "token" = '6cdbe7c3761b452525cf3b6baea1c9ea', "id_tipo_domicilio" = '93'
WHERE "id" = '52'
ERROR - 2019-08-09 18:21:56 --> Severity: Notice --> Undefined variable: insert /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 296
ERROR - 2019-08-09 18:21:56 --> Could not find the language line "no_item_was_has_add"
ERROR - 2019-08-09 18:54:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  la sintaxis de entrada no es válida para integer: «JURIDICA»
LINE 2: WHERE &quot;id&quot; = 'JURIDICA'
                     ^ /var/www/html/restServerAtm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-08-09 18:54:06 --> Query error: ERROR:  la sintaxis de entrada no es válida para integer: «JURIDICA»
LINE 2: WHERE "id" = 'JURIDICA'
                     ^ - Invalid query: UPDATE "solicitante" SET "id" = 'JURIDICA', "id_usuario" = NULL, "id_persona" = NULL, "id_datos_juridicos" = NULL, "contribuyente" = 'NATURAL', "created_at" = '2019-08-09 16:42:16', "updated_at" = '2019-08-09 18:54:06'
WHERE "id" = 'JURIDICA'
