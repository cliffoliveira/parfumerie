<?php

class Rosto extends Controller {

    function Rosto() {
        parent::Controller();
    }

    function index() {
        $data['titulo'] = 'Parfumerie';
        $data2['mybox'] = 1;
        $data['box'] = $this->load->view("box_view", $data2 , TRUE);
        $this->load->view("container_view", $data);
        
    }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */