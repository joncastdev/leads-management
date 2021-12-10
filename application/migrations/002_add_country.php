<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_country extends CI_Migration {

    public function up()
    {
        $this->db->insert('countrys', [
            'id_country' => 1,
            'country' => '-None-'
        ]);

    }

    public function down()
    {
        $this->db->delete('countrys', ['country' => '-None-']); 

    }
}