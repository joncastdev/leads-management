<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_state extends CI_Migration {

    public function up()
    {
        $this->db->insert('states', [
            'id_state' => 1,
            'state' => '-None-',
            'id_country' => 1
        ]);

    }

    public function down()
    {
        $this->db->delete('states', ['state' => '-None-']); 

    }
}