<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_customer extends CI_Migration {

        public function up()
        {                

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
                        // 'created_at' => array(
                        //         'type' => 'DATE',                                
                        // ),
                        // 'updated_at' => array(
                        //         'type' => 'DATE',                               
                        // ),                                                      
                ));        
               

                $this->dbforge->add_key('id_customers', TRUE);
                $this->dbforge->create_table('customers');
               
        }

        public function down()
        {             

                $this->dbforge->drop_table('customers');              
       }
}