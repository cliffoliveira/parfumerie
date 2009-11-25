<?php

class Contato extends Controller {

    function Contato() {
        parent::Controller();
    }

    function index() {
        $data['titulo'] = 'Parfumerie : Contato';
        $data2['mybox'] = 1;
        $data['box'] = $this->load->view("contato_view", $data2 , TRUE);
        $this->load->view("container_view", $data);
        
    }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */