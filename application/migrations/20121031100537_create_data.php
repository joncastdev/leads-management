<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_data extends CI_Migration {

    public function up()
    {

        $password = password_hash('123',PASSWORD_BCRYPT);

        $created_at = date('y-m-d');

        $updated_at = date('y-m-d');

        $last_access = date('y-m-d');

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
            'id_customer' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
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
            'phone' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'description' => array(
                'type' => 'VARCHAR',
                'constraint' => '150',
            ),
            'id_country' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),
            'id_state' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),
            'id_project' => array(
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


        // $this->dbforge->drop_table('states');

        $this->dbforge->add_key('id_customer', TRUE);
        $this->dbforge->create_table('customers');

        $this->db->insert('customers', [
            'id_customer' => 1,           
            'first_name' => 'jonathan',
            'last_name' => 'castro',
            'email' => 'jonathancastro@opengiscrm.com',
            'phone' => '0000-1111111',
            'id_country' => 1,
            'id_state' => 1,
            'id_project' => 1,
            'created_at' =>  $created_at,
            'updated_at' => $updated_at,
            'last_access' => $last_access,

        ]);



        $this->dbforge->add_field(array(
            'id_lead' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),            
            'first_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'last_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'company' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'img' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'street' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'id_state' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),
            'city' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'id_country' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),
            'postal_code' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'phone' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'cell_phone' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'id_source' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),
            'id_sector' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),
            'income' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'fax' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'website' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'id_state_client' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),
            'quantity_worker' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'id_qualification' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),
            'id_skype' => array(
                'type' => 'VARCHAR',
                'constraint' => '11',
            ),
            'id_twitter' => array(
                'type' => 'VARCHAR',
                'constraint' => '11',
            ),
            'description' => array(
                'type' => 'VARCHAR',
                'constraint' => '150',
            ),                                    
        ));                


        // $this->dbforge->drop_table('states');

        $this->dbforge->add_key('id_leads', TRUE);
        $this->dbforge->create_table('leads');

        $this->db->insert('leads', [
            'id_customer' => 1,           
            'first_name' => 'jonathan',
            'last_name' => 'castro',
            'company' => 'OoenGisCRM',
            'email' => 'jonathancastro@opengiscrm.com',
            'img' => 'user.png',
            'id_state' => 1,
            'city' => '7275 St Rt 17m M',
            'id_country' => 1,
            'postal_code' => '11953',
            'title' => 'VP Accounting',
            'phone' => '0000-1111111',
            'cell_phone' => '0000-1111111',
            'id_source' => 1,
            'id_sector' => 1,
            'id_project' => 1,
            'income' => 'test income',
            'fax' => 'test fax',
            'website' => 'https://opengiscrm.com/',
            'id_state_client' => 1,
            'quantity_worker' => 'test quantity',
            'id_qualification' => 1,
            'id_skype' => '@opengiscrm',
            'id_twitter' => '@opengiscrm',
            'description' => 'test test test test'
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

        // $password = password_hash('123',PASSWORD_BCRYPT);

        // $created_at = date('y-m-d');

        // $updated_at = date('y-m-d');

        // $last_access = date('y-m-d');

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