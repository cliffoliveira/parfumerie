<?php

class Cartoes extends Controller {

    function Cartoes() {
        parent::Controller();
    }

    function index() {
        $data['titulo'] = 'Parfumerie : Cartões';
        $data2['mybox'] = 1;
        $data['box'] = $this->load->view("cartoes_view", $data2 , TRUE);
        $this->load->view("container_view", $data);
        
    }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */