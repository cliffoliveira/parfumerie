<?php

	class Usuarios_tipos extends Controller{

		function __construct(){
			parent::Controller();
			$this->load->model('Usuarios_tipos_model');
		}

		function index(){
		}
	}
