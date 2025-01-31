<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StatistikModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_statistics() {
        $query = $this->db->get('statistics');
        return $query->result();
    }
}
?>
