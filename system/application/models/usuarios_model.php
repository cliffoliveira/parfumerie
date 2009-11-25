<?php

class Usuarios_model extends Model {

    var $id_usuario;
    var $tx_nome;
    var $tx_celular;
    var $dt_nascimento;
    var $tx_login;
    var $tx_senha;
    var $tx_email;
    var $fl_ativo;
    var $cd_tipo;

    function __construct() {
        parent::Model();
    }

    function get_all() {
        $query = $this->db->get('usuarios');
        return $query->result();
    }

    function get_by_id($id_usuario) {
        $this->db->where('id_usuario',$id_usuario);
        $query = $this->db->get('usuarios');
        return $query->row();
    }

    function get_by_login($login , $senha) {
        $mysenha = md5($senha);
        $this->db->where('tx_login',$login);
        $this->db->where('tx_senha',$mysenha);
        $query = $this->db->get('usuarios');
        if ($query->num_rows() > 0){
             foreach ($query->result() as $row) {
            $this->session->set_userdata('tx_email', $row->tx_email);
            $this->session->set_userdata('tx_login', $row->tx_login);
             }
        }else{
            $this->session->sess_destroy();
        }
        return $query;
    }

    function insert($data) {
        $this->db->insert('usuarios',$data);
    }

    function update($id_usuario,$data) {
        $this->db->where('id_usuario', $id_usuario);
        $this->db->update('usuarios',$data);
    }

    function delete($id_usuario) {
        $this->db->where('id_usuario', $id_usuario);
        $this->db->delete('usuarios');
    }

	}
