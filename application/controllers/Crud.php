<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class CRUD extends CI_Controller{
		
	function __construct(){
		parent:: __construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('array');
		$this->load->library('session');
		$this->load->model('Crud_model','crud');
		$this->load->library('table');
	}
	
	public function index(){
		$dados = array(
		'titulo' => 'CRUD com CodeIgniter',
		'tela'=> 'create',
		'active' => 'create',
		);
		$this->load->view('crud',$dados);
	}
	
	
	public function create(){
		//Validação do formulario
		$this->form_validation->set_rules('nome', 'Nome', 'trim|required|alpha|max_length[50]|ucwords');
		$this->form_validation->set_rules('email', 'EMAIL', 'trim|required|max_length[50]|strtolower|valid_email|is_unique[curso_ci.email]');
		$this->form_validation->set_rules('login', 'LOGIN', 'trim|required|max_length[25]|strtolower|is_unique[curso_ci.login]');
		$this->form_validation->set_rules('senha', 'SENHA', 'trim|required|strtolower');
		$this->form_validation->set_message('matches', 'O campo %s está dirente do campo %s');
		$this->form_validation->set_rules('senha2', 'REPITA A SENHA', 'trim|required|strtolower|matches[senha]');
		
		if($this->form_validation->run() == TRUE):
			$dados = elements(array('nome', 'email', 'login', 'senha'), $this->input->post());
			$dados['senha'] = md5($dados['senha']);
			$this->crud->do_insert($dados);
			echo "Validação ok, inserir no bd";			
		
		endif;
			
		$dados = array(
			'titulo' => 'CRUD com CodeIgniter',
			'tela' => 'create',
			'active' => 'create',
	
		);
		
		$this->load->view('crud',$dados);
	}
	
	public function retrieve(){
		
		$dados = array(
			'titulo' => 'CRUD com CodeIgniter',
			'tela' => 'retrieve',
			'usuarios' => $this->crud->get_all()->result(),
			'active' => 'retreive',
		);
		
		$this->load->view('crud',$dados);
	}
	
	public function update(){
		//Validação do formulario
		$this->form_validation->set_rules('nome', 'Nome', 'trim|required|max_length[50]|ucwords');
		$this->form_validation->set_rules('senha', 'SENHA', 'trim|required|strtolower');
		$this->form_validation->set_message('matches', 'O campo %s está dirente do campo %s');
		$this->form_validation->set_rules('senha2', 'REPITA A SENHA', 'trim|required|strtolower|matches[senha]');
		
		if($this->form_validation->run() == TRUE):
			$dados = elements(array('nome', 'senha', 'login'), $this->input->post());
			$dados['senha'] = md5($dados['senha']);
			//$this->crud->do_insert($dados);
			$this->crud->do_update($dados, array('id'=> $this->input->post('idusuario')));
			echo "Validação ok, inserir no bd";			
		
		endif;
		
		
		$dados = array(
			'titulo' => 'CRUD &raquo Update',
			'tela' => 'update',
			'active' => 'update',
		);
		$this->load->view('crud',$dados);	
	}
	
	public function delete(){
		
		if($this->input->post('idusuario')>0):
			$this->crud->do_delete(array('id'=>$this->input->post('idusuario')));
		endif;
		
		$dados = array(
			'titulo' => 'CRUD &raquo Delete',
			'tela' => 'delete',
			'active' => 'delete',
		);
		$this->load->view('crud',$dados);	
	}
}
	