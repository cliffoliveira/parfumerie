<?php

	class Imagens_model extends Model{

		var $id_imagem;
		var $tx_imagem;
		var $cd_usuario;

		function __construct(){
			parent::Model();
		}

		function get_all(){
			$query = $this->db->get('imagens');
			return $query->result();
		}

		function get_by_id($id_imagem){
			$this->db->where('id_imagem',$id_imagem);
			$query = $this->db->get('imagens');
			return $query->row();
		}

		function insert($data){
			$this->db->insert('imagens',$data);
		}

		function update($id_imagem,$data){
			$this->db->where('id_imagem', $id_imagem);
			$this->db->update('imagens',$data);
		}

		function delete($id_imagem){
			$this->db->where('id_imagem', $id_imagem);
			$this->db->delete('imagens');
		}

	}
