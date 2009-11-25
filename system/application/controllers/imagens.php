<?php

	class Imagens extends Controller{

		function __construct(){
			parent::Controller();
			$this->load->model('Imagens_model');
		}

		function index(){
		}
	}
