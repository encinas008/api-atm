<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-12-17 11:25:31 --> Query error: ERROR:  no existe la columna «toekn»
LINE 1: SELECT "fur", "toekn", "ptop"."name", "p"."nombre", "pp"."id...
                      ^
HINT:  Probablemente quiera hacer referencia a la columna «pp.token». - Invalid query: SELECT "fur", "toekn", "ptop"."name", "p"."nombre", "pp"."id", "p"."numero_documento", "pot"."numero"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "persona" as "p" ON "pp"."id" = "p"."id_prescripcion"
GROUP BY "fur", "token", "ptop"."name", "p"."nombre", "pp"."id", "p"."numero_documento", "pot"."numero"
 LIMIT 10
