<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Complement extends MY_Controller 
{
    private $mainPage = 'admin/index';
    public function __construct()
    {
        parent::__construct();
        $this->parseData['navbar'] = 'parts/admin/header';
        $this->parseData['sidebar'] = 'parts/admin/sidebar';

        // Sample push other script js
        // array_push($this->js, base_url() . 'assets/plugins/datatables/jquery.dataTables.min.js');
        // array_push($this->js, base_url() . 'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js');
    }

    public function index()
    {
        $s = '
        [
            {
                "name": "complement 1",
                "number_of_quest": "50",
                "type_question": "complement"
            },
            {
                "name": "complement 1",
                "number_of_quest": "50",
                "type_question": "complement"
            },
            {
                "name": "complement 1",
                "number_of_quest": "50",
                "type_question": "complement"
            }
        ]';
        $this->parseData['content'] = 'admin/complement/index';
        // Sample parse js or css to data
        $this->parseData['javascript'] = $this->js;
        $this->parseData['css'] = $this->css;
        $this->parseData['data'] = json_decode($s);
 
        $this->load->view($this->mainPage, $this->parseData);
    }

    public function create() 
    {
        $this->parseData['content'] = 'admin/complement/create';
        $this->parseData['javascript'] = $this->js;
        $this->parseData['title_tab'] = "Create complement";
        $this->parseData['config'] = [
            "complement" => true
        ];

        $this->load->view($this->mainPage, $this->parseData);
    }
}