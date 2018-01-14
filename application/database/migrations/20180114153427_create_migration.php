<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Migration extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'cat_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'cat_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                        ),
                        'cat_created' => array(
                                'type' => 'DATETIME',
                        ),
                        'cat_createdby' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '5',
                        ),
                ));
                $this->dbforge->add_key('cat_id', TRUE);
                $this->dbforge->create_table('categories');

                $this->dbforge->add_field(array(
                        'comm_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'comm_post_id' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'comm_content' => array(
                                'type' => 'TEXT',
                        ),
                        'comm_by' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '5',
                        ),
                        'comm_approved' => array(
                                'type' => 'BOOLEAN',
                        ),
                        'comm_created' => array(
                                'type' => 'DATETIME',
                        ),
                ));
                $this->dbforge->add_key('comm_id', TRUE);
                $this->dbforge->create_table('comments');

                $this->dbforge->add_field(array(
                        'post_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'post_title' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                        ),
                        'post_desc' => array(
                                'type' => 'TEXT',
                        ),
                        'post_img' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'post_approved' => array(
                                'type' => 'BOOLEAN',
                        ),
                        'post_createdby' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '5',
                        ),
                        'post_modifiedby' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '5',
                        ),
                        'post_created' => array(
                                'type' => 'DATETIME',
                        ),
                        
                        'post_modified' => array(
                                'type' => 'DATETIME',
                        ),
                ));
                $this->dbforge->add_key('post_id', TRUE);
                $this->dbforge->create_table('posts');


                $this->dbforge->add_field(array(
                        'postcat_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'postcat_post_id' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '5',
                        ),
                        'postcat_cat_id' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '5',
                        ),
                ));
                $this->dbforge->add_key('postcat_id', TRUE);
                $this->dbforge->create_table('post_categories');



                $this->dbforge->add_field(array(
                        'user_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'user_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'user_email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                                'null' => FALSE,
                        ),
                        'user_pass' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => FALSE,
                        ),
                        'user_avatar' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                                'null' => TRUE,
                        ),
                        'user_type' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '10',
                        ),
                        'user_created' => array(
                                'type' => 'DATETIME',
                        ),
                ));
                $this->dbforge->add_key('user_id', TRUE);
                $this->dbforge->create_table('users');
        }

        public function down()
        {
                $this->dbforge->drop_table('categories',TRUE);
                $this->dbforge->drop_table('comments',TRUE);
                $this->dbforge->drop_table('posts',TRUE);
                $this->dbforge->drop_table('post_categories',TRUE);
                $this->dbforge->drop_table('users',TRUE);
        }
}