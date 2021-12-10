<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_state_table extends CI_Migration {

        public function up()
        {

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
                ));

                

                $this->dbforge->add_key('id_state', TRUE);
                $this->dbforge->create_table('states');
               
        }

        public function down()
        {
               $this->dbforge->drop_table('states');     

             
       }
}