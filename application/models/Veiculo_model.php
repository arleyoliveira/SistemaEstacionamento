<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class veiculo_model extends CI_Model{
 	
	public function do_insert($dados=NULL){
		
		if($dados != NULL):
			$this->db->insert('veiculo', $dados);
			$this->session->set_flashdata('cadastrook', IconsUtil::getIcone( IconsUtil::ICON_OK) .' Cadastro efetuado com sucesso!');
			redirect('index.php/veiculo/cadastrar');
		endif;
	}
	
	
	public function do_delete($condicao = NULL){
		
		if($condicao != NULL):
			$this->db->delete('veiculo', $condicao);
			$this->session->set_flashdata('excluirok', 'Registro deletado com sucesso!');
		endif;
		
		redirect('gerenciador/entrada');
	}
	
	public function get_all(){
		return $this->db->get('veiculo');
	}
	
	public function get_ByPlaca($placa = NULL){
		if($placa != NULL):
			$sql = "SELECT * FROM veiculo WHERE placa = ?";
			$query = $this->db->query($sql, array($placa));
			if($query->num_rows() > 0):
				return $query;
			else:
				return false;
			endif;
		else:	
			return false;
		
		endif;		
	}
	
	public function do_update($dados = NULL, $condicao = NULL){
		if($dados != NULL && $condicao != NULL):
			$this->db->update('veiculo', $dados, $condicao);
			$this->session->set_flashdata('edicaook', 'Dados alterado com sucesso!');
			redirect(current_url());
		endif;
	}
	
	public function selectCategoria(){
		$query = $this->db->get('categoria');
		if($query->num_rows() > 0):
			return $query;
		else:
			return false;
		endif;
	
	}
 }
