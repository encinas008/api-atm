<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-26 08:12:55 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-26 08:15:41 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-26 08:26:48 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-26 08:27:07 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-26 08:28:08 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-26 08:30:09 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-26 08:30:25 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-26 08:44:48 --> Could not find the language line "item_was_found"
ERROR - 2019-09-26 08:50:22 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-26 08:51:20 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-26 08:52:31 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-26 08:52:37 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-26 09:42:51 --> Could not find the language line "item_was_found"
ERROR - 2019-09-26 09:45:31 --> Could not find the language line "item_was_found"
ERROR - 2019-09-26 10:03:40 --> Could not find the language line "item_was_found"
ERROR - 2019-09-26 10:15:58 --> Query error: ERROR:  no existe la columna sol.id_solicitante
LINE 7: JOIN "datos_juridicos" "datojuri" ON "sol"."id_solicitante" ...
                                             ^ - Invalid query: SELECT "declaracion_jurada"."numero"
FROM "declaracion_jurada"
JOIN "actividad_economica" "ac" ON "declaracion_jurada"."id_actividad_economica" = "ac"."id"
JOIN "domicilio_actividad_economica" "dac" ON "ac"."id" = "dac"."id_actividad_economica"
JOIN "tipo_actividad_economica" "tae" ON "ac"."id_tipo_actividad" = "tae"."id"
JOIN "solicitante" "sol" ON "declaracion_jurada"."id_solicitante" = "sol"."id"
JOIN "datos_juridicos" "datojuri" ON "sol"."id_solicitante" = "datojuri"."id"
JOIN "representante_legal" "repre_legal" ON "sol"."id" = "repre_legal"."id_solicitante"
JOIN "persona" "per" ON "repre_legal"."id_persona" = "per"."id"
JOIN "domicilio" "dom_per" ON "per"."id" = "dom_per"."id_persona"
WHERE "sol"."contribuyente" = '2'
AND "declaracion_jurada"."id" = 81
ERROR - 2019-09-26 10:29:44 --> Query error: ERROR:  no existe la columna sol.id_solicitante
LINE 7: JOIN "datos_juridicos" "datojuri" ON "sol"."id_solicitante" ...
                                             ^ - Invalid query: SELECT "declaracion_jurada"."numero"
FROM "declaracion_jurada"
JOIN "actividad_economica" "ac" ON "declaracion_jurada"."id_actividad_economica" = "ac"."id"
JOIN "domicilio_actividad_economica" "dac" ON "ac"."id" = "dac"."id_actividad_economica"
JOIN "tipo_actividad_economica" "tae" ON "ac"."id_tipo_actividad" = "tae"."id"
JOIN "solicitante" "sol" ON "declaracion_jurada"."id_solicitante" = "sol"."id"
JOIN "datos_juridicos" "datojuri" ON "sol"."id_solicitante" = "datojuri"."id"
JOIN "representante_legal" "repre_legal" ON "sol"."id" = "repre_legal"."id_solicitante"
JOIN "persona" "per" ON "repre_legal"."id_persona" = "per"."id"
JOIN "domicilio" "dom_per" ON "per"."id" = "dom_per"."id_persona"
WHERE "sol"."contribuyente" = '2'
AND "declaracion_jurada"."id" = 82
ERROR - 2019-09-26 14:22:09 --> Query error: ERROR:  no existe la columna sol.id_solicitante
LINE 7: JOIN "datos_juridicos" "datojuri" ON "sol"."id_solicitante" ...
                                             ^ - Invalid query: SELECT "declaracion_jurada"."numero"
FROM "declaracion_jurada"
JOIN "actividad_economica" "ac" ON "declaracion_jurada"."id_actividad_economica" = "ac"."id"
JOIN "domicilio_actividad_economica" "dac" ON "ac"."id" = "dac"."id_actividad_economica"
JOIN "tipo_actividad_economica" "tae" ON "ac"."id_tipo_actividad" = "tae"."id"
JOIN "solicitante" "sol" ON "declaracion_jurada"."id_solicitante" = "sol"."id"
JOIN "datos_juridicos" "datojuri" ON "sol"."id_solicitante" = "datojuri"."id"
JOIN "representante_legal" "repre_legal" ON "sol"."id" = "repre_legal"."id_solicitante"
JOIN "persona" "per" ON "repre_legal"."id_persona" = "per"."id"
JOIN "domicilio" "dom_per" ON "per"."id" = "dom_per"."id_persona"
WHERE "sol"."contribuyente" = '2'
AND "declaracion_jurada"."id" = 82
ERROR - 2019-09-26 16:32:52 --> 404 Page Not Found: Licencia/index
ERROR - 2019-09-26 16:39:44 --> Severity: Error --> Class 'HOME_Controller' not found /var/www/html/restServerAtm/application/controllers/Licencia.php 4
ERROR - 2019-09-26 16:58:17 --> Severity: Notice --> Undefined variable: pdf /var/www/html/restServerAtm/application/controllers/ReportLicenciaActividadEconomica.php 115
ERROR - 2019-09-26 16:58:29 --> Severity: Notice --> Undefined variable: img /var/www/html/restServerAtm/application/controllers/ReportLicenciaActividadEconomica.php 113
ERROR - 2019-09-26 17:29:33 --> 404 Page Not Found: Report/ReportLicenciaActividadEconomica
ERROR - 2019-09-26 17:29:38 --> 404 Page Not Found: Report/ReportLicenciaActividadEconomica
ERROR - 2019-09-26 17:29:49 --> 404 Page Not Found: Report/ReportLicenciaActividadEconomica
ERROR - 2019-09-26 17:29:56 --> 404 Page Not Found: Report/ReportLicenciaActividadEconomica
ERROR - 2019-09-26 17:30:50 --> 404 Page Not Found: ReportLicenciaActividadEconomica/licenciaActividadEconomica8a9b9be203e535ccfb996c81c768dd85
ERROR - 2019-09-26 17:30:53 --> 404 Page Not Found: ReportLicenciaActividadEconomica/licenciaActividadEconomica8a9b9be203e535ccfb996c81c768dd85
ERROR - 2019-09-26 17:30:53 --> 404 Page Not Found: ReportLicenciaActividadEconomica/licenciaActividadEconomica8a9b9be203e535ccfb996c81c768dd85
ERROR - 2019-09-26 17:30:54 --> 404 Page Not Found: ReportLicenciaActividadEconomica/licenciaActividadEconomica8a9b9be203e535ccfb996c81c768dd85
ERROR - 2019-09-26 17:37:46 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 219
ERROR - 2019-09-26 17:37:54 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-26 17:47:01 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-26 17:48:48 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-26 17:54:50 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-26 17:55:52 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-26 18:02:56 --> Could not find the language line "item_was_found"
ERROR - 2019-09-26 18:07:18 --> Could not find the language line "item_was_found"
ERROR - 2019-09-26 18:07:33 --> Could not find the language line "item_was_found"
ERROR - 2019-09-26 18:25:27 --> Could not find the language line "item_was_found"
ERROR - 2019-09-26 18:26:09 --> Could not find the language line "item_was_found"
ERROR - 2019-09-26 18:33:05 --> Could not find the language line "item_was_found"
