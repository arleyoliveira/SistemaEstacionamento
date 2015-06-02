<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class  Gerenciador_model extends CI_Model{
 	
	public function getTipoCobranca(){
		$query = $this->db->get("tipodecobranca");
		
		if($query->num_rows() > 0):
			return $query;
		else :
			return false;
		endif;
	}
	
	public function do_insert($dados=NULL){		
		if($dados != NULL):
			$this->db->insert('gerenciador', $dados);
			$this->session->set_flashdata('cadastrook', IconsUtil::getIcone(IconsUtil::ICON_OK) . ' Registro de entrada efetuado com sucesso!');
			redirect('index.php/gerenciador/entrada');
		endif;
	}
	
	public function inicializarCaixa($dados=NULL){		
		if($dados != NULL):
			$this->db->insert('caixa', $dados);
			$this->session->set_flashdata('cadastrook', IconsUtil::getIcone(IconsUtil::ICON_OK) . ' O caixa foi iniciado com '.$dados['saldoInical'] . ' sucesso!');
			redirect('index.php/gerenciador/entrada');
		endif;
	}
	
	public function get_ByPlacaSaida($placa = NULL){
		if($placa != NULL):
			$sql = "select * from DadosSaida where veiculo = ? and status = 1";
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
	
	public function retirarVeiculo($dados = NULL, $condicao = NULL){
		if($dados != NULL && $condicao != NULL):
			$this->db->update('gerenciador', $dados, $condicao);
		endif;
	}
	
	public function adicionarValorCaixa($dados = NULL, $condicao = NULL){
		if($dados != NULL && $condicao != NULL):
			$this->db->update('caixa', $dados, $condicao);
			$this->session->set_flashdata('edicaook', 'Dados alterado com sucesso!');
		endif;
	}
	
	public function get_ByPlacaEntrada($placa = NULL){
		if($placa != NULL):
			$sql = "select * from gerenciador where veiculo = ? and status = ?";
			$query = FALSE;
			$query = $this->db->query($sql, array($placa, TRUE));
			if($query->num_rows() > 0):
				return $query;
			else:
				return FALSE;
			endif;
		else:	
			return FALSE;
		endif;		
	}
	
	public function getValorCaixa(){
			$sql = "select * from caixaAtual";
			$query = $this->db->query($sql);
			if($query->num_rows() > 0):
				return $query;
			else:
				return false;
			endif;
	}
	
	public function atualizarCaixa($valor = NULL, $condicao = NULL){
		if($dados != NULL && $condicao != NULL):
			$this->db->update('caixa', 'saldoFinac = saldoFinal + '.$valor, $condicao);
		endif;
	}
	
	public function existeCaixaIniciado(){
			$sql = "select * from caixa where date(data) = date(now())";
			$query = $this->db->query($sql);
			if($query->num_rows() > 0):
				return true;
			else:
				return false;
			endif;
	}
			
 }