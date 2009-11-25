<?php

	class Usuarios_tipos_model extends Model{

		var $id_tipo;
		var $tx_tipo;
		var $tx_descricao;

		function __construct(){
			parent::Model();
		}

		function get_all(){
			$query = $this->db->get('usuarios_tipos');
			return $query->result();
		}

		function get_by_id($id_tipo){
			$this->db->where('id_tipo',$id_tipo);
			$query = $this->db->get('usuarios_tipos');
			return $query->row();
		}

		function insert($data){
			$this->db->insert('usuarios_tipos',$data);
		}

		function update($id_tipo,$data){
			$this->db->where('id_tipo', $id_tipo);
			$this->db->update('usuarios_tipos',$data);
		}

		function delete($id_tipo){
			$this->db->where('id_tipo', $id_tipo);
			$this->db->delete('usuarios_tipos');
		}

	}
