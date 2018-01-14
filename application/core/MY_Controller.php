<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function logged_in()
    {
        $user = $this->session->userdata('logged_in');
        return isset($user);
    }
}