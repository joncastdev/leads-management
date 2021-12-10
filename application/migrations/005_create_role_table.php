<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_role_table extends CI_Migration {

        public function up()
        {

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

                

                $this->dbforge->add_key('id_role', TRUE);
                $this->dbforge->create_table('roles');
               
        }

        public function down()
        {
               $this->dbforge->drop_table('roles');     

             
       }
}