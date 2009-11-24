<?php

class Cadastro extends Controller {

    function Cadastro() {
        parent::Controller();
        $this->load->helper(array("html","url"));
        $this->load->library('session');
    }

    function index() {
        $data['teste']='teste';

        $this->load->view('cadastro_view', $data);
    }
}