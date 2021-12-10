<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_data extends CI_Migration {

    public function up()
    {

        $this->dbforge->add_field(array(
            'id_country' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'country' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),                                              
        ));

        // $this->dbforge->drop_table('countrys');

        $this->dbforge->add_key('id_country', TRUE);
        $this->dbforge->create_table('countrys');

        $this->db->insert('countrys', [
            'id_country' => 1,
            'country' => '-None-'
        ]);

        $this->db->insert('countrys', [
            'id_country' => 2,
            'country' => 'Argentina'
        ]);

        $this->db->insert('countrys', [
            'id_country' => 3,
            'country' => 'Bahamas'
        ]);


        $this->dbforge->add_field(array(
            'id_state' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'state' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'id_country' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),                                             
        ));

        // $this->dbforge->drop_table('states');

        $this->dbforge->add_key('id_state', TRUE);
        $this->dbforge->create_table('states');

        $this->db->insert('states', [
            'id_state' => 1,
            'state' => '-None-',
            'id_country' => 1
        ]);


        $this->db->insert('states', [
            'id_state' => 2,
            'state' => 'Buenos Aires',
            'id_country' => 2
        ]);

        $this->db->insert('states', [
            'id_state' => 3,
            'state' => 'Nasáu',
            'id_country' => 3
        ]);


        $this->dbforge->add_field(array(
            'id_role' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'role' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),                                              
        ));


        // $this->dbforge->drop_table('roles');

        $this->dbforge->add_key('id_role', TRUE);
        $this->dbforge->create_table('roles');

        $this->db->insert('roles', [
            'id_role' => 1,
            'role' => 'admin'            
        ]);

        $this->db->insert('roles', [
            'id_role' => 2,
            'role' => 'user'            
        ]);


        $this->dbforge->add_field(array(
            'id_user' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'img' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'first_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'last_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'id_country' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),
            'id_state' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),
            'id_role' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),
            'created_at' => array(
                'type' => 'DATE',                              
            ),
            'updated_at' => array(
                'type' => 'DATE',                               
            ),
            'last_access' => array(
                'type' => 'DATE',                               
            ),                          
        ));                


        // $this->dbforge->drop_table('users');

        $this->dbforge->add_key('id_user', TRUE);
        $this->dbforge->create_table('users');

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
            'password' => $password,
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
       $this->dbforge->drop_table('countrys');
       $this->dbforge->drop_table('states');
       $this->dbforge->drop_table('roles');
       $this->dbforge->drop_table('users');        


   }
}