<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-08-08 09:42:09 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: cannot open shared object file: No such file or directory)) Unknown 0
ERROR - 2019-08-08 09:53:51 --> Severity: error --> Exception: Too few arguments to function Cobros::getFur_get(), 0 passed and exactly 1 expected /var/www/html/restServerAtm/application/controllers/api/Cobros.php 30
ERROR - 2019-08-08 09:53:59 --> 404 Page Not Found: Cobros/cobro
ERROR - 2019-08-08 15:08:50 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 219
ERROR - 2019-08-08 15:09:16 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 219
ERROR - 2019-08-08 15:09:49 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 219
ERROR - 2019-08-08 15:10:39 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 219
ERROR - 2019-08-08 15:12:46 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 219
ERROR - 2019-08-08 15:14:28 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 219
ERROR - 2019-08-08 15:15:43 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 220
ERROR - 2019-08-08 15:18:35 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 220
ERROR - 2019-08-08 15:21:01 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 220
ERROR - 2019-08-08 15:43:56 --> Severity: error --> Exception: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found /var/www/html/restServerAtm/application/libraries/PhpJasperReport/phpjasper/src/PHPJasper.php 220
ERROR - 2019-08-08 17:06:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  error de sintaxis en tsquery: «venta d» /var/www/html/restServerAtm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-08-08 17:06:21 --> Query error: ERROR:  error de sintaxis en tsquery: «venta d» - Invalid query: SELECT ae.name as label, ae.id as value, ae.ciiu FROM actividad_economica ae WHERE to_tsvector(LOWER(ae.name) ) @@ to_tsquery(LOWER('venta d'));
ERROR - 2019-08-08 17:06:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  error de sintaxis en tsquery: «venta de» /var/www/html/restServerAtm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-08-08 17:06:21 --> Query error: ERROR:  error de sintaxis en tsquery: «venta de» - Invalid query: SELECT ae.name as label, ae.id as value, ae.ciiu FROM actividad_economica ae WHERE to_tsvector(LOWER(ae.name) ) @@ to_tsquery(LOWER('venta de'));
ERROR - 2019-08-08 17:06:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  error de sintaxis en tsquery: «venta den» /var/www/html/restServerAtm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-08-08 17:06:21 --> Query error: ERROR:  error de sintaxis en tsquery: «venta den» - Invalid query: SELECT ae.name as label, ae.id as value, ae.ciiu FROM actividad_economica ae WHERE to_tsvector(LOWER(ae.name) ) @@ to_tsquery(LOWER('venta den'));
ERROR - 2019-08-08 17:06:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  error de sintaxis en tsquery: «venta dent» /var/www/html/restServerAtm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-08-08 17:06:21 --> Query error: ERROR:  error de sintaxis en tsquery: «venta dent» - Invalid query: SELECT ae.name as label, ae.id as value, ae.ciiu FROM actividad_economica ae WHERE to_tsvector(LOWER(ae.name) ) @@ to_tsquery(LOWER('venta dent'));
ERROR - 2019-08-08 17:06:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  error de sintaxis en tsquery: «venta denti» /var/www/html/restServerAtm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-08-08 17:06:21 --> Query error: ERROR:  error de sintaxis en tsquery: «venta denti» - Invalid query: SELECT ae.name as label, ae.id as value, ae.ciiu FROM actividad_economica ae WHERE to_tsvector(LOWER(ae.name) ) @@ to_tsquery(LOWER('venta denti'));
ERROR - 2019-08-08 17:06:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  error de sintaxis en tsquery: «venta dent» /var/www/html/restServerAtm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-08-08 17:06:22 --> Query error: ERROR:  error de sintaxis en tsquery: «venta dent» - Invalid query: SELECT ae.name as label, ae.id as value, ae.ciiu FROM actividad_economica ae WHERE to_tsvector(LOWER(ae.name) ) @@ to_tsquery(LOWER('venta dent'));
ERROR - 2019-08-08 17:06:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  error de sintaxis en tsquery: «venta den» /var/www/html/restServerAtm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-08-08 17:06:22 --> Query error: ERROR:  error de sintaxis en tsquery: «venta den» - Invalid query: SELECT ae.name as label, ae.id as value, ae.ciiu FROM actividad_economica ae WHERE to_tsvector(LOWER(ae.name) ) @@ to_tsquery(LOWER('venta den'));
ERROR - 2019-08-08 17:06:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  error de sintaxis en tsquery: «venta de» /var/www/html/restServerAtm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-08-08 17:06:22 --> Query error: ERROR:  error de sintaxis en tsquery: «venta de» - Invalid query: SELECT ae.name as label, ae.id as value, ae.ciiu FROM actividad_economica ae WHERE to_tsvector(LOWER(ae.name) ) @@ to_tsquery(LOWER('venta de'));
ERROR - 2019-08-08 17:06:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  error de sintaxis en tsquery: «venta d» /var/www/html/restServerAtm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-08-08 17:06:22 --> Query error: ERROR:  error de sintaxis en tsquery: «venta d» - Invalid query: SELECT ae.name as label, ae.id as value, ae.ciiu FROM actividad_economica ae WHERE to_tsvector(LOWER(ae.name) ) @@ to_tsquery(LOWER('venta d'));
ERROR - 2019-08-08 18:49:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection timed out
	Is the server running on host &quot;192.168.104.35&quot; and accepting
	TCP/IP connections on port 5432? /var/www/html/restServerAtm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2019-08-08 18:49:49 --> Unable to connect to the database
ERROR - 2019-08-08 18:50:12 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection timed out
	Is the server running on host &quot;192.168.104.35&quot; and accepting
	TCP/IP connections on port 5432? /var/www/html/restServerAtm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2019-08-08 18:50:12 --> Unable to connect to the database
ERROR - 2019-08-08 18:50:18 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection timed out
	Is the server running on host &quot;192.168.104.35&quot; and accepting
	TCP/IP connections on port 5432? /var/www/html/restServerAtm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2019-08-08 18:50:18 --> Unable to connect to the database
ERROR - 2019-08-08 18:50:55 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection timed out
	Is the server running on host &quot;192.168.104.35&quot; and accepting
	TCP/IP connections on port 5432? /var/www/html/restServerAtm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2019-08-08 18:50:55 --> Unable to connect to the database
ERROR - 2019-08-08 18:51:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Invalid argument
	Is the server running on host &quot;192.168.104.35&quot; and accepting
	TCP/IP connections on port 5432? /var/www/html/restServerAtm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2019-08-08 18:51:26 --> Unable to connect to the database
