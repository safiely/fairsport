<?php

class Migrate extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->dbforge();
    }
    public function index()
    {
        $this->load->library('migration');
        if ($this->migration->current() === FALSE)
        {
                show_error($this->migration->error_string());
        }
    }

    public function delete()
    {
        $this->dbforge->drop_table('categories',TRUE);
        $this->dbforge->drop_table('comments',TRUE);
        $this->dbforge->drop_table('posts',TRUE);
        $this->dbforge->drop_table('post_categories',TRUE);
        $this->dbforge->drop_table('users',TRUE);

        echo 'Table deleted';
    }
}