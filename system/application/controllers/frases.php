<?php

	class Frases extends Controller{

		function __construct(){
			parent::Controller();
			$this->load->model('Frases_model');
		}

		function index(){
		}
	}
