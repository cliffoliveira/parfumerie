<?php

class Cadastro extends Controller {

    function Cadastro() {
        parent::Controller();
        $this->load->model('Usuarios_model');
    }

    function index() {
        $data['titulo'] = 'Parfumerie : Cadastro';
        $data2['mybox'] = 1;
        $data['box'] = $this->load->view("cadastro_view", $data2 , TRUE);
        $this->load->view("cadastro_view", $data);

    }
    function esqueci() {
        $data['titulo'] = 'Parfumerie : Esqueci';
        $data2['mybox'] = 1;
        $data['box'] = $this->load->view("cadastro_view", $data2 , TRUE);
        $this->load->view("container_view", $data);

    }
    function autentica() {
        $data['titulo'] = 'Parfumerie : Autentica';
        $data2['mybox'] = 1;
        // verifica as variaveis
        $data2['autentica'] = $this->Usuarios_model->get_by_login($_POST['login'],$_POST['senha']);
        $data['box'] = $this->load->view("autentica_view", $data2 , TRUE);
        $this->load->view("container_view", $data);

    }
    function usuario() {
        $this->session->set_userdata('frase', $_POST['frase']);
        if($this->session->userdata('tx_email') != '') {
            echo $this->session->userdata('tx_email');
            $data['titulo'] = 'Parfumerie : Autentica';
            $data2['mybox'] = 1;
            $data['box'] = $this->load->view("cadastro_view", $data2 , TRUE);
            $this->load->view("container_view", $data);
        }else{
            $data['titulo'] = 'Parfumerie : Autentica';
            $data2['mybox'] = 2;
            $data['box'] = $this->load->view("cadastro_view", $data2 , TRUE);
            $this->load->view("container_view", $data);

        }



    }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */