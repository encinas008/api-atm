<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-10-05 10:39:53 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-10-05 11:09:17 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-10-05 11:09:32 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-10-05 11:11:03 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-10-05 11:11:29 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-10-05 11:15:19 --> Severity: Notice --> Trying to get property 'thumbail' of non-object /var/www/html/restServerAtm/application/controllers/api/Usuario.php 84
ERROR - 2019-10-05 11:15:19 --> Severity: Warning --> Creating default object from empty value /var/www/html/restServerAtm/application/controllers/api/Usuario.php 86
ERROR - 2019-10-05 11:15:19 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-10-05 11:15:21 --> Severity: Notice --> Trying to get property 'thumbail' of non-object /var/www/html/restServerAtm/application/controllers/api/Usuario.php 84
ERROR - 2019-10-05 11:15:21 --> Severity: Warning --> Creating default object from empty value /var/www/html/restServerAtm/application/controllers/api/Usuario.php 86
ERROR - 2019-10-05 11:15:22 --> Severity: Notice --> Trying to get property 'thumbail' of non-object /var/www/html/restServerAtm/application/controllers/api/Usuario.php 84
ERROR - 2019-10-05 11:15:22 --> Severity: Warning --> Creating default object from empty value /var/www/html/restServerAtm/application/controllers/api/Usuario.php 86
ERROR - 2019-10-05 11:15:28 --> Severity: Notice --> Trying to get property 'thumbail' of non-object /var/www/html/restServerAtm/application/controllers/api/Usuario.php 84
ERROR - 2019-10-05 11:15:28 --> Severity: Warning --> Creating default object from empty value /var/www/html/restServerAtm/application/controllers/api/Usuario.php 86
ERROR - 2019-10-05 11:21:27 --> Severity: Notice --> Undefined variable: dataos_db /var/www/html/restServerAtm/application/controllers/api/Usuario.php 82
ERROR - 2019-10-05 11:57:28 --> Severity: Notice --> Undefined index: username /var/www/html/restServerAtm/application/controllers/api/ChangePassword.php 57
ERROR - 2019-10-05 11:57:28 --> Severity: Notice --> Trying to get property 'id' of non-object /var/www/html/restServerAtm/application/controllers/api/ChangePassword.php 58
ERROR - 2019-10-05 11:57:28 --> Severity: error --> Exception: Call to undefined function read_file() /var/www/html/restServerAtm/application/controllers/api/ChangePassword.php 62
ERROR - 2019-10-05 12:01:29 --> Severity: Notice --> Undefined index: username /var/www/html/restServerAtm/application/controllers/api/ChangePassword.php 56
ERROR - 2019-10-05 12:03:26 --> Severity: error --> Exception: Call to undefined function read_file() /var/www/html/restServerAtm/application/controllers/api/ChangePassword.php 62
ERROR - 2019-10-05 12:04:18 --> Could not find the language line "change_password"
ERROR - 2019-10-05 13:00:47 --> Severity: error --> Exception: syntax error, unexpected '"Solicitud de Cambio de Contra' (T_CONSTANT_ENCAPSED_STRING) /var/www/html/restServerAtm/application/language/spanish/rest_controller_lang.php 77
ERROR - 2019-10-05 22:07:17 --> Query error: ERROR:  no existe la columna «active» en la relación «change_password»
LINE 1: ... 21:43:45', "updated_at" = '2019-10-05 22:07:17', "active" =...
                                                             ^ - Invalid query: UPDATE "change_password" SET "id" = 15, "id_usuario" = 37, "token" = '773570c32079d5544e909d76f61365ce', "activo" = TRUE, "expires_at" = '2019-10-06 21:43:45', "created_at" = '2019-10-05 21:43:45', "updated_at" = '2019-10-05 22:07:17', "active" = FALSE
WHERE "id" = 15
