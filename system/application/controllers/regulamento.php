<?php

class Regulamento extends Controller {

    function Regulamento() {
        parent::Controller();
    }

    function index() {
        $data['titulo'] = 'Parfumerie';
        $data2['mybox'] = 1;
        $data['box'] = $this->load->view("regulamento_view", $data2 , TRUE);
        $this->load->view("container_view", $data);
        
    }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */