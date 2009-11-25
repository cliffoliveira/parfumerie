<?php

	class Frases_model extends Model{

		var $id_frase;
		var $tx_frase;
		var $cd_usuario;

		function __construct(){
			parent::Model();
		}

		function get_all(){
			$query = $this->db->get('frases');
			return $query->result();
		}

		function get_by_id($id_frase){
			$this->db->where('id_frase',$id_frase);
			$query = $this->db->get('frases');
			return $query->row();
		}

		function insert($data){
			$this->db->insert('frases',$data);
		}

		function update($id_frase,$data){
			$this->db->where('id_frase', $id_frase);
			$this->db->update('frases',$data);
		}

		function delete($id_frase){
			$this->db->where('id_frase', $id_frase);
			$this->db->delete('frases');
		}

	}
