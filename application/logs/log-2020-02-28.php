<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-28 00:08:00 --> Severity: Notice --> Undefined variable: insert_juridicos /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 133
ERROR - 2020-02-28 00:08:00 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 154
ERROR - 2020-02-28 00:08:00 --> Severity: Notice --> Undefined variable: insert_prescripcion /var/www/html/restServerAtm/application/controllers/api/Prescripcion.php 159
ERROR - 2020-02-28 11:21:31 --> Query error: ERROR:  no existe la columna «ci»
LINE 3: WHERE "ci" = '666666'
              ^ - Invalid query: SELECT *
FROM "persona"
WHERE "ci" = '666666'
ERROR - 2020-02-28 14:52:06 --> Query error: ERROR:  no existe la columna pot.id_prescripcion
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
ERROR - 2020-02-28 15:01:45 --> Query error: ERROR:  no existe la columna pot.id_prescripcion
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
