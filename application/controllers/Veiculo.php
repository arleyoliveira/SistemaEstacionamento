<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Veiculo extends CI_Controller{
		
		function __construct(){
			parent:: __construct();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->helper('array');
			//$this->load->library('session');
			$this->load->model('Veiculo_model','VeiculoDAO');
			$this->load->library('table');
		}	
		public function cadastarCategoria(){
			$dados = array(
			'titulo' => 'Sistema de Estacionamento',
			'tela'=> 'veiculo/cadastroVeiculo',
			'active' => '',
			);
			$this->load->view('exibirDados',$dados);
		}
		
		public function cadastrar(){
			//Validação 
			$this->form_validation->set_rules('nome', 'Nome', 'trim|required|max_length[50]|ucwords');
			$this->form_validation->set_rules('placa', 'PLACA', 'trim|required|max_length[10]|strtolower|is_unique[veiculo.placa]');
			$this->form_validation->set_rules('cor', 'Cor', 'trim|required|max_length[10]');
			$this->form_validation->set_rules('categoria', 'Categoria', 'trim|required|integer');		
			
			if($this->form_validation->run() == TRUE):
				$dados = elements(array('placa', 'nome', 'cor', 'categoria'), $this->input->post());
				$this->VeiculoDAO->do_insert($dados);
				echo "Validação ok, inserir no bd";	
			endif;
			$dados = array(
			'titulo' => 'Sistema de Estacionamento',
			'tela'=> 'veiculo/create',
			'active' => '',
			);
			$this->load->view('exibirDados',$dados);
		}
                
		public function search() {
                    if (isset($_GET['term'])){
                        $q = strtolower($_GET['term']);
                        $this->VeiculoDAO->buscaVeiculoByPlaca($q);
                    }
                }
	}
		