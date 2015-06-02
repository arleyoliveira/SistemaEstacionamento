<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Crud_model extends CI_Model{
 	
	public function do_insert($dados=NULL){
		
		if($dados != NULL):
			$this->db->insert('curso_ci', $dados);
			$this->session->set_flashdata('cadastrook', 'Cadastro efetuado com sucesso!');
			redirect('crud/create');
		endif;
	}
	
	public function do_update($dados = NULL, $condicao = NULL){
		if($dados != NULL && $condicao != NULL):
			$this->db->update('curso_ci', $dados, $condicao);
			$this->session->set_flashdata('edicaook', 'Cadastro alterado com sucesso!');
			redirect(current_url());
		endif;
	}
	
	public function do_delete($condicao = NULL){
		
		if($condicao != NULL):
			$this->db->delete('curso_ci', $condicao);
			$this->session->set_flashdata('excluirok', 'Registro deletado com sucesso!');
		endif;
		
		redirect('crud/retrieve');
	}
	
	public function get_all(){
		return $this->db->get('curso_ci');
	}
	
	public function get_byid($id = NULL){
		if($id != NULL):
			$this->db->where('id', $id);
			$this->db->limit(1);
			return $this->db->get('curso_ci');
		else:	
			return false;
		
		endif;		
	}
 }
