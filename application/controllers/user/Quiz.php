<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends MY_Controller 
{
    private $mainPage = 'user/index';
    public function __construct()
    {
        parent::__construct();
        $this->parseData['navbar'] = 'parts/user/header';
    }

    public function quiz_sample($sessionQuiz)
    {
        $this->parseData['content'] = 'user/question_quiz';
        $this->load->view($this->mainPage, $this->parseData);
    }
}