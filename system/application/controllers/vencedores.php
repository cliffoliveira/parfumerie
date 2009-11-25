<?php

class Vencedores extends Controller {

    function Vencedores() {
        parent::Controller();
    }

    function index() {
        $data['titulo'] = 'Parfumerie : Vencedores';
        $data2['mybox'] = 1;
        $data['box'] = $this->load->view("vencedores_view", $data2 , TRUE);
        $this->load->view("container_view", $data);
        
    }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */