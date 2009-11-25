<?php

	class Usuarios extends Controller{

		function __construct(){
			parent::Controller();
			$this->load->model('Usuarios_model');
		}

		function index(){
		}
	}
