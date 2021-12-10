<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_role extends CI_Migration {

    public function up()
    {
        $this->db->insert('roles', [
            'id_role' => 1,
            'role' => 'admin'            
        ]);

    }

    public function down()
    {
        $this->db->delete('roles', ['role' => 'admin']); 

    }
}