<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_user extends CI_Migration {

        public function up()
        {                

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


                $this->dbforge->add_key('id_user', TRUE);
                $this->dbforge->create_table('users');
        }

        public function down()
        {              

               $this->dbforge->drop_table('users');
       }
}