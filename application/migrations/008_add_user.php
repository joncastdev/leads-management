<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_user extends CI_Migration {

    public function up()
    {

        $password = password_hash('123',PASSWORD_BCRYPT);

        $created_at = date('y-m-d');

        $updated_at = date('y-m-d');

        $last_access = date('y-m-d');

        $this->db->insert('users', [
            'id_user' => 1,
            'img' => 'user.png',
            'first_name' => 'jonathan',
            'last_name' => 'castro',
            'email' => 'jonathancastro@opengiscrm.com',
            'password' => $password_hash,
            'id_country' => 1,
            'id_state' => 1,
            'id_role' => 1,
            'created_at' =>  $created_at,
            'updated_at' => $updated_at,
            'last_access' => $last_access,

        ]);

    }

    public function down()
    {
        $this->db->delete('users', ['id_user' => 1]); 

    }
}