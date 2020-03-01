<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-03-01 17:22:49 --> Query error: ERROR:  no existe la columna pot.id_prescripcion
LINE 5: ... "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_...
                                                             ^ - Invalid query: SELECT COUNT(*) AS "numrows"
FROM (
SELECT "fur", "ptop"."name", "prl"."razon_social"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "ptop"."name", "prl"."razon_social"
) CI_count_all_results
ERROR - 2020-03-01 17:23:42 --> Query error: ERROR:  no existe la columna pot.id_prescripcion
LINE 5: ... "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_...
                                                             ^ - Invalid query: SELECT COUNT(*) AS "numrows"
FROM (
SELECT "fur", "ptop"."name", "prl"."razon_social"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "ptop"."name", "prl"."razon_social"
) CI_count_all_results
ERROR - 2020-03-01 17:24:08 --> Query error: ERROR:  no existe la columna pot.id_prescripcion
LINE 5: ... "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_...
                                                             ^ - Invalid query: SELECT COUNT(*) AS "numrows"
FROM (
SELECT "fur", "ptop"."name", "prl"."razon_social"
FROM "pres_prescripcion" as "pp"
JOIN "pres_objeto_tributario" as "pot" ON "pp"."id" = "pot"."id_prescripcion"
JOIN "pres_tipo_objeto_tributario" as "ptop" ON "pot"."id_tipo_objeto_tributario" = "ptop"."id"
JOIN "pres_representante_legal" as "prl" ON "pp"."id" = "prl"."id_prescripcion"
GROUP BY "fur", "ptop"."name", "prl"."razon_social"
) CI_count_all_results
