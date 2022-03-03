<?php
class Board_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function list_select()
        {
                $data = $this->db->query('select * from ci_board');
                $result = $data->result_array();
                return $result;
        }

}
