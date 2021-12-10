<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_country_table extends CI_Migration {

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

                

                $this->dbforge->add_key('id_country', TRUE);
                $this->dbforge->create_table('countrys');
               
        }

        public function down()
        {
               $this->dbforge->drop_table('countrys');     

             
       }
}