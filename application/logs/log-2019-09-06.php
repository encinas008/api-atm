<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-06 08:22:20 --> Query error: ERROR:  la columna «declaracion_jurada.fecha_aprobacion» debe aparecer en la cláusula GROUP BY o ser usada en una función de agregación
LINE 4:      sol.contribuyente as contribuyente, declaracion_jurada....
                                                 ^
QUERY:  SELECT declaracion_jurada.numero as numero, declaracion_jurada.fur as fur, declaracion_jurada.token as token 
		   ,declaracion_jurada.created_at as created_at, ac.rotulo_comercial as actividad_economica, est.name as estado, 
		   est.code as code_estado, tae.name as tipo_actividad_economica,
		   sol.contribuyente as contribuyente, declaracion_jurada.fecha_aprobacion, 
		   ( select array_agg(act.code)
		   from (
		   select a.code
		   from action a
		   inner join servicio_rol in_sr on (a.id = in_sr.id_action) 
		   where in_sr.id_servicio = 1 and a.code in ('CREATE', 'UPDATE', 'DELETE')
		   group by 1 ) act ) as permissions
		   
		FROM "declaracion_jurada"
		JOIN "solicitante" "sol" ON "declaracion_jurada"."id_solicitante" = "sol"."id"
		JOIN "actividad_economica" "ac" ON "declaracion_jurada"."id_actividad_economica" = "ac"."id"
		JOIN "tipo_actividad_economica" "tae" ON "ac"."id_tipo_actividad" = "tae"."id"
		JOIN "estado" "est" ON "declaracion_jurada"."id_estado" = "est"."id"
		JOIN "usuario" "usr" ON "declaracion_jurada"."id_usuario" = "usr"."id"
		JOIN "rol_usuario" "rol_usr" ON "usr"."id" = "rol_usr"."id_usuario"
		JOIN "rol" "r" ON "rol_usr"."id_rol" = "r"."id"
		JOIN "servicio_rol" "ser_rol" ON "r"."id" = "ser_rol"."id_rol"
		JOIN "servicio" "serv" ON "ser_rol"."id_servicio" = "serv"."id"
		JOIN "action" "act" ON "ser_rol"."id_action" = "act"."id"
		WHERE "usr"."token" = _token_user 
		      and "est"."code" IN ('EN_PROCESO', 'APROBADO', 'COMPLETADO')
		GROUP BY "declaracion_jurada"."numero", "declaracion_jurada"."fur", "declaracion_jurada"."token", 
			declaracion_jurada.created_at, ac.rotulo_comercial, est.name, est.code, tae.name, sol.contribuyente, usr.token, serv.id
		ORDER BY "declaracion_jurada"."created_at" DESC
		LIMIT _limit
		OFFSET _offset
CONTEXT:  función PL/pgSQL licencia_funcionamiento_by_page(integer,integer,character varying,integer) en la línea 313 en RETURN QUERY - Invalid query: SELECT * FROM licencia_funcionamiento_by_page(10, 0, '8ab6bbf02611d2321637d12339f04b93', 0)
ERROR - 2019-09-06 08:22:20 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-06 08:22:25 --> Query error: ERROR:  la columna «declaracion_jurada.fecha_aprobacion» debe aparecer en la cláusula GROUP BY o ser usada en una función de agregación
LINE 4:      sol.contribuyente as contribuyente, declaracion_jurada....
                                                 ^
QUERY:  SELECT declaracion_jurada.numero as numero, declaracion_jurada.fur as fur, declaracion_jurada.token as token 
		   ,declaracion_jurada.created_at as created_at, ac.rotulo_comercial as actividad_economica, est.name as estado, 
		   est.code as code_estado, tae.name as tipo_actividad_economica,
		   sol.contribuyente as contribuyente, declaracion_jurada.fecha_aprobacion, 
		   ( select array_agg(act.code)
		   from (
		   select a.code
		   from action a
		   inner join servicio_rol in_sr on (a.id = in_sr.id_action) 
		   where in_sr.id_servicio = 1 and a.code in ('CREATE', 'UPDATE', 'DELETE')
		   group by 1 ) act ) as permissions
		   
		FROM "declaracion_jurada"
		JOIN "solicitante" "sol" ON "declaracion_jurada"."id_solicitante" = "sol"."id"
		JOIN "actividad_economica" "ac" ON "declaracion_jurada"."id_actividad_economica" = "ac"."id"
		JOIN "tipo_actividad_economica" "tae" ON "ac"."id_tipo_actividad" = "tae"."id"
		JOIN "estado" "est" ON "declaracion_jurada"."id_estado" = "est"."id"
		JOIN "usuario" "usr" ON "declaracion_jurada"."id_usuario" = "usr"."id"
		JOIN "rol_usuario" "rol_usr" ON "usr"."id" = "rol_usr"."id_usuario"
		JOIN "rol" "r" ON "rol_usr"."id_rol" = "r"."id"
		JOIN "servicio_rol" "ser_rol" ON "r"."id" = "ser_rol"."id_rol"
		JOIN "servicio" "serv" ON "ser_rol"."id_servicio" = "serv"."id"
		JOIN "action" "act" ON "ser_rol"."id_action" = "act"."id"
		WHERE "usr"."token" = _token_user 
		      and "est"."code" IN ('EN_PROCESO', 'APROBADO', 'COMPLETADO')
		GROUP BY "declaracion_jurada"."numero", "declaracion_jurada"."fur", "declaracion_jurada"."token", 
			declaracion_jurada.created_at, ac.rotulo_comercial, est.name, est.code, tae.name, sol.contribuyente, usr.token, serv.id
		ORDER BY "declaracion_jurada"."created_at" DESC
		LIMIT _limit
		OFFSET _offset
CONTEXT:  función PL/pgSQL licencia_funcionamiento_by_page(integer,integer,character varying,integer) en la línea 313 en RETURN QUERY - Invalid query: SELECT * FROM licencia_funcionamiento_by_page(10, 0, '8ab6bbf02611d2321637d12339f04b93', 0)
ERROR - 2019-09-06 08:22:25 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-06 08:22:28 --> Query error: ERROR:  la columna «declaracion_jurada.fecha_aprobacion» debe aparecer en la cláusula GROUP BY o ser usada en una función de agregación
LINE 4:      sol.contribuyente as contribuyente, declaracion_jurada....
                                                 ^
QUERY:  SELECT declaracion_jurada.numero as numero, declaracion_jurada.fur as fur, declaracion_jurada.token as token 
		   ,declaracion_jurada.created_at as created_at, ac.rotulo_comercial as actividad_economica, est.name as estado, 
		   est.code as code_estado, tae.name as tipo_actividad_economica,
		   sol.contribuyente as contribuyente, declaracion_jurada.fecha_aprobacion, 
		   ( select array_agg(act.code)
		   from (
		   select a.code
		   from action a
		   inner join servicio_rol in_sr on (a.id = in_sr.id_action) 
		   where in_sr.id_servicio = 1 and a.code in ('CREATE', 'UPDATE', 'DELETE')
		   group by 1 ) act ) as permissions
		   
		FROM "declaracion_jurada"
		JOIN "solicitante" "sol" ON "declaracion_jurada"."id_solicitante" = "sol"."id"
		JOIN "actividad_economica" "ac" ON "declaracion_jurada"."id_actividad_economica" = "ac"."id"
		JOIN "tipo_actividad_economica" "tae" ON "ac"."id_tipo_actividad" = "tae"."id"
		JOIN "estado" "est" ON "declaracion_jurada"."id_estado" = "est"."id"
		JOIN "usuario" "usr" ON "declaracion_jurada"."id_usuario" = "usr"."id"
		JOIN "rol_usuario" "rol_usr" ON "usr"."id" = "rol_usr"."id_usuario"
		JOIN "rol" "r" ON "rol_usr"."id_rol" = "r"."id"
		JOIN "servicio_rol" "ser_rol" ON "r"."id" = "ser_rol"."id_rol"
		JOIN "servicio" "serv" ON "ser_rol"."id_servicio" = "serv"."id"
		JOIN "action" "act" ON "ser_rol"."id_action" = "act"."id"
		WHERE "usr"."token" = _token_user 
		      and "est"."code" IN ('EN_PROCESO', 'APROBADO', 'COMPLETADO')
		GROUP BY "declaracion_jurada"."numero", "declaracion_jurada"."fur", "declaracion_jurada"."token", 
			declaracion_jurada.created_at, ac.rotulo_comercial, est.name, est.code, tae.name, sol.contribuyente, usr.token, serv.id
		ORDER BY "declaracion_jurada"."created_at" DESC
		LIMIT _limit
		OFFSET _offset
CONTEXT:  función PL/pgSQL licencia_funcionamiento_by_page(integer,integer,character varying,integer) en la línea 313 en RETURN QUERY - Invalid query: SELECT * FROM licencia_funcionamiento_by_page(10, 0, '8ab6bbf02611d2321637d12339f04b93', 0)
ERROR - 2019-09-06 08:22:28 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-06 08:22:50 --> Query error: ERROR:  la columna «declaracion_jurada.fecha_aprobacion» debe aparecer en la cláusula GROUP BY o ser usada en una función de agregación
LINE 4:      sol.contribuyente as contribuyente, declaracion_jurada....
                                                 ^
QUERY:  SELECT declaracion_jurada.numero as numero, declaracion_jurada.fur as fur, declaracion_jurada.token as token 
		   ,declaracion_jurada.created_at as created_at, ac.rotulo_comercial as actividad_economica, est.name as estado, 
		   est.code as code_estado, tae.name as tipo_actividad_economica,
		   sol.contribuyente as contribuyente, declaracion_jurada.fecha_aprobacion, 
		   ( select array_agg(act.code)
		   from (
		   select a.code
		   from action a
		   inner join servicio_rol in_sr on (a.id = in_sr.id_action) 
		   where in_sr.id_servicio = 1 and a.code in ('CREATE', 'UPDATE', 'DELETE')
		   group by 1 ) act ) as permissions
		   
		FROM "declaracion_jurada"
		JOIN "solicitante" "sol" ON "declaracion_jurada"."id_solicitante" = "sol"."id"
		JOIN "actividad_economica" "ac" ON "declaracion_jurada"."id_actividad_economica" = "ac"."id"
		JOIN "tipo_actividad_economica" "tae" ON "ac"."id_tipo_actividad" = "tae"."id"
		JOIN "estado" "est" ON "declaracion_jurada"."id_estado" = "est"."id"
		JOIN "usuario" "usr" ON "declaracion_jurada"."id_usuario" = "usr"."id"
		JOIN "rol_usuario" "rol_usr" ON "usr"."id" = "rol_usr"."id_usuario"
		JOIN "rol" "r" ON "rol_usr"."id_rol" = "r"."id"
		JOIN "servicio_rol" "ser_rol" ON "r"."id" = "ser_rol"."id_rol"
		JOIN "servicio" "serv" ON "ser_rol"."id_servicio" = "serv"."id"
		JOIN "action" "act" ON "ser_rol"."id_action" = "act"."id"
		WHERE "usr"."token" = _token_user 
		      and "est"."code" IN ('EN_PROCESO', 'APROBADO', 'COMPLETADO')
		GROUP BY "declaracion_jurada"."numero", "declaracion_jurada"."fur", "declaracion_jurada"."token", 
			declaracion_jurada.created_at, ac.rotulo_comercial, est.name, est.code, tae.name, sol.contribuyente, usr.token, serv.id
		ORDER BY "declaracion_jurada"."created_at" DESC
		LIMIT _limit
		OFFSET _offset
CONTEXT:  función PL/pgSQL licencia_funcionamiento_by_page(integer,integer,character varying,integer) en la línea 313 en RETURN QUERY - Invalid query: SELECT * FROM licencia_funcionamiento_by_page(10, 0, '8ab6bbf02611d2321637d12339f04b93', 0)
ERROR - 2019-09-06 08:22:50 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-06 09:31:15 --> Query error: ERROR:  la columna «declaracion_jurada.fecha_aprobacion» debe aparecer en la cláusula GROUP BY o ser usada en una función de agregación
LINE 4:      sol.contribuyente as contribuyente, declaracion_jurada....
                                                 ^
QUERY:  SELECT declaracion_jurada.numero as numero, declaracion_jurada.fur as fur, declaracion_jurada.token as token 
		   ,declaracion_jurada.created_at as created_at, ac.rotulo_comercial as actividad_economica, est.name as estado, 
		   est.code as code_estado, tae.name as tipo_actividad_economica,
		   sol.contribuyente as contribuyente, declaracion_jurada.fecha_aprobacion,

		   ( select array_agg(act.code)
		   from (
		   select a.code
		   from action a
		   inner join servicio_rol in_sr on (a.id = in_sr.id_action) 
		   where in_sr.id_servicio = 1 and a.code in ('CREATE', 'UPDATE', 'DELETE')
		   group by 1 ) act ) as permissions
		   
		FROM "declaracion_jurada"
		JOIN "solicitante" "sol" ON "declaracion_jurada"."id_solicitante" = "sol"."id"
		JOIN "actividad_economica" "ac" ON "declaracion_jurada"."id_actividad_economica" = "ac"."id"
		JOIN "tipo_actividad_economica" "tae" ON "ac"."id_tipo_actividad" = "tae"."id"
		JOIN "estado" "est" ON "declaracion_jurada"."id_estado" = "est"."id"
		JOIN "usuario" "usr" ON "declaracion_jurada"."id_usuario" = "usr"."id"
		JOIN "rol_usuario" "rol_usr" ON "usr"."id" = "rol_usr"."id_usuario"
		JOIN "rol" "r" ON "rol_usr"."id_rol" = "r"."id"
		JOIN "servicio_rol" "ser_rol" ON "r"."id" = "ser_rol"."id_rol"
		JOIN "servicio" "serv" ON "ser_rol"."id_servicio" = "serv"."id"
		JOIN "action" "act" ON "ser_rol"."id_action" = "act"."id"
		WHERE "usr"."token" = _token_user 
		      and "est"."code" IN ('EN_PROCESO', 'APROBADO', 'COMPLETADO')
		GROUP BY "declaracion_jurada"."numero", "declaracion_jurada"."fur", "declaracion_jurada"."token", 
			declaracion_jurada.created_at, ac.rotulo_comercial, est.name, est.code, tae.name, sol.contribuyente, usr.token, serv.id
		ORDER BY "declaracion_jurada"."numero" DESC
		LIMIT _limit
		OFFSET _offset
CONTEXT:  función PL/pgSQL licencia_funcionamiento_by_page(integer,integer,character varying,integer) en la línea 322 en RETURN QUERY - Invalid query: SELECT * FROM licencia_funcionamiento_by_page(10, 0, '8ab6bbf02611d2321637d12339f04b93', 0)
ERROR - 2019-09-06 09:31:15 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-06 09:35:34 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-06 09:54:20 --> Could not find the language line "nacionalidad"
ERROR - 2019-09-06 09:54:20 --> Severity: Notice --> Undefined property: DeclaracionJurada::$Nacionalidad_model /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 151
ERROR - 2019-09-06 09:54:20 --> Severity: error --> Exception: Call to a member function getById() on null /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 151
ERROR - 2019-09-06 09:54:50 --> Could not find the language line "nacionalidad"
ERROR - 2019-09-06 09:55:08 --> Could not find the language line "nacionalidad"
ERROR - 2019-09-06 09:55:29 --> Could not find the language line "nacionalidad"
ERROR - 2019-09-06 09:55:32 --> Could not find the language line "nacionalidad"
ERROR - 2019-09-06 09:55:54 --> Could not find the language line "nacionalidad"
ERROR - 2019-09-06 09:56:21 --> Could not find the language line "nacionalidad"
ERROR - 2019-09-06 09:56:50 --> Could not find the language line "nacionalidad"
ERROR - 2019-09-06 09:57:10 --> Could not find the language line "nacionalidad"
ERROR - 2019-09-06 09:57:55 --> Could not find the language line "nacionalidad"
ERROR - 2019-09-06 09:58:37 --> Could not find the language line "nacionalidad"
ERROR - 2019-09-06 09:59:12 --> Could not find the language line "nacionalidad"
ERROR - 2019-09-06 10:00:18 --> Could not find the language line "nacionalidad"
ERROR - 2019-09-06 10:00:36 --> Could not find the language line "nacionalidad"
ERROR - 2019-09-06 10:00:55 --> Could not find the language line "nacionalidad"
ERROR - 2019-09-06 11:23:50 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-06 11:23:58 --> Severity: Notice --> Undefined variable: persona /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 153
ERROR - 2019-09-06 11:23:58 --> Severity: Notice --> Trying to get property 'nacionalidad' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 153
ERROR - 2019-09-06 11:23:58 --> Severity: Notice --> Undefined variable: persona /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 154
ERROR - 2019-09-06 11:23:58 --> Severity: Notice --> Trying to get property 'estado_civil' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 154
ERROR - 2019-09-06 11:56:05 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-06 11:57:44 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-06 11:57:58 --> Severity: Core Warning --> PHP Startup: Unable to load dynamic library 'pdo_pgsql' (tried: /usr/lib/php/20170718/pdo_pgsql (/usr/lib/php/20170718/pdo_pgsql: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_pgsql.so (/usr/lib/php/20170718/pdo_pgsql.so: undefined symbol: pdo_parse_params)) Unknown 0
ERROR - 2019-09-06 11:58:14 --> Could not find the language line "item_was_found"
ERROR - 2019-09-06 11:59:10 --> Severity: Notice --> Undefined variable: persona /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 155
ERROR - 2019-09-06 11:59:10 --> Severity: Notice --> Trying to get property 'nacionalidad' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 155
ERROR - 2019-09-06 11:59:10 --> Severity: Notice --> Undefined variable: persona /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 156
ERROR - 2019-09-06 11:59:10 --> Severity: Notice --> Trying to get property 'estado_civil' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 156
ERROR - 2019-09-06 11:59:10 --> Severity: Notice --> Undefined variable: persona /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 157
ERROR - 2019-09-06 11:59:10 --> Severity: Notice --> Trying to get property 'genero' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 157
ERROR - 2019-09-06 11:59:10 --> Severity: Notice --> Undefined variable: persona /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 158
ERROR - 2019-09-06 11:59:10 --> Severity: Notice --> Trying to get property 'id_tipo_documento' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 158
ERROR - 2019-09-06 11:59:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/restServerAtm/system/core/Exceptions.php:271) /var/www/html/restServerAtm/system/core/Common.php 570
ERROR - 2019-09-06 11:59:14 --> Severity: Notice --> Undefined variable: persona /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 155
ERROR - 2019-09-06 11:59:14 --> Severity: Notice --> Trying to get property 'nacionalidad' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 155
ERROR - 2019-09-06 11:59:14 --> Severity: Notice --> Undefined variable: persona /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 156
ERROR - 2019-09-06 11:59:14 --> Severity: Notice --> Trying to get property 'estado_civil' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 156
ERROR - 2019-09-06 11:59:14 --> Severity: Notice --> Undefined variable: persona /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 157
ERROR - 2019-09-06 11:59:14 --> Severity: Notice --> Trying to get property 'genero' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 157
ERROR - 2019-09-06 11:59:14 --> Severity: Notice --> Undefined variable: persona /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 158
ERROR - 2019-09-06 11:59:14 --> Severity: Notice --> Trying to get property 'id_tipo_documento' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 158
ERROR - 2019-09-06 11:59:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/restServerAtm/system/core/Exceptions.php:271) /var/www/html/restServerAtm/system/core/Common.php 570
ERROR - 2019-09-06 11:59:21 --> Severity: Notice --> Undefined variable: persona /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 155
ERROR - 2019-09-06 11:59:21 --> Severity: Notice --> Trying to get property 'nacionalidad' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 155
ERROR - 2019-09-06 11:59:21 --> Severity: Notice --> Undefined variable: persona /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 156
ERROR - 2019-09-06 11:59:21 --> Severity: Notice --> Trying to get property 'estado_civil' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 156
ERROR - 2019-09-06 11:59:21 --> Severity: Notice --> Undefined variable: persona /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 157
ERROR - 2019-09-06 11:59:21 --> Severity: Notice --> Trying to get property 'genero' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 157
ERROR - 2019-09-06 11:59:21 --> Severity: Notice --> Undefined variable: persona /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 158
ERROR - 2019-09-06 11:59:21 --> Severity: Notice --> Trying to get property 'id_tipo_documento' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 158
ERROR - 2019-09-06 11:59:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/restServerAtm/system/core/Exceptions.php:271) /var/www/html/restServerAtm/system/core/Common.php 570
ERROR - 2019-09-06 12:01:23 --> Severity: Notice --> Undefined variable: persona /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 155
ERROR - 2019-09-06 12:01:55 --> Severity: Notice --> Undefined variable: persona /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 155
ERROR - 2019-09-06 12:01:55 --> Severity: Notice --> Trying to get property 'nacionalidad' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 155
ERROR - 2019-09-06 12:01:55 --> Severity: Notice --> Undefined variable: persona /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 156
ERROR - 2019-09-06 12:01:55 --> Severity: Notice --> Trying to get property 'estado_civil' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 156
ERROR - 2019-09-06 12:01:55 --> Severity: Notice --> Undefined variable: persona /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 157
ERROR - 2019-09-06 12:01:55 --> Severity: Notice --> Trying to get property 'genero' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 157
ERROR - 2019-09-06 12:01:55 --> Severity: Notice --> Undefined variable: persona /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 158
ERROR - 2019-09-06 12:01:55 --> Severity: Notice --> Trying to get property 'id_tipo_documento' of non-object /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 158
ERROR - 2019-09-06 12:01:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/restServerAtm/system/core/Exceptions.php:271) /var/www/html/restServerAtm/system/core/Common.php 570
ERROR - 2019-09-06 12:02:44 --> Severity: Notice --> Undefined variable: persona /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 155
ERROR - 2019-09-06 12:03:41 --> Severity: Notice --> Undefined variable: persona /var/www/html/restServerAtm/application/controllers/api/DeclaracionJurada.php 155
ERROR - 2019-09-06 14:25:15 --> Could not find the language line "item_was_found"
ERROR - 2019-09-06 15:08:52 --> Could not find the language line "item_was_found"
ERROR - 2019-09-06 16:27:13 --> Could not find the language line "item_was_found"
