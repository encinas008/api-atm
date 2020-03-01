<?php
require_once APPPATH . 'core/MY_model.php';

/**
 * This is a model for Usuario, this model extend My_model
 *
 * @package         restServerAtm
 * @subpackage      restServerAtm
 * @category        Controller
 * @author          Ronald Acha Ramos
 * @license         MIT 
 */
class DomicilioActividadEconomica_model extends MY_model {

    private $TABLE = "domicilio_actividad_economica";

    public function __construct()
    {
        parent::__construct();
        $this->table_name = $this->TABLE;
    }


    public function getByIdActividadEconomica($id_actividad_economica){
        $item = $this->db->where('id_actividad_economica', $id_actividad_economica)
                         ->from($this->table_name)
                         ->get()
                         ->row();
        return $item;
    }
}