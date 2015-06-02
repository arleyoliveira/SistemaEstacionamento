<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class cliente extends CI_Controller{
		
		function __construct(){
			parent:: __construct();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->helper('array');
			//$this->load->library('session');
			$this->load->model('Cliente_model','ClienteDAO');
			$this->load->library('table');
		}
	
		public function cadastrar(){
			//Validação do formulario
			$this->form_validation->set_rules('nome', 'Nome', 'trim|required|max_length[50]|ucwords');
			$this->form_validation->set_rules('cpf', 'CPF', 'trim|required|max_length[15]|strtolower|is_unique[cliente.cpf]');
			$this->form_validation->set_rules('rg', 'IDENTIDADE', 'trim|required|max_length[15]|strtolower|is_unique[cliente.rg]');
			$this->form_validation->set_rules('dataNascimento', 'Data de Nascimento', 'trim|required|max_length[10]');		
			
			if($this->form_validation->run() == TRUE):
			$dados = elements(array('cpf', 'rg', 'nome', 'dataNascimento'), $this->input->post());
			$this->ClienteDAO->do_insert($dados);
			echo "Validação ok, inserir no bd";			
		
		endif;
			
			$dados = array(
			'titulo' => 'Sistema de Estacionamento',
			'tela'=> 'cliente/create',
			'active' => 'create',
			);
			$this->load->view("exibirDados" , $dados);
		}
		
	}