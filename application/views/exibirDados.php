<?php
$this->load->view('controleUsuario/gerenciador');
$this->load->view('telaUteis/header');
$this->load->view('telaUteis/menu');
//$this->load->view('telaUteis/pesquisa');
$this->load->view('telaUteis/menuLeft');
//$this->load->view('telaUteis/conteudo');
if($tela!='') $this->load->view($tela);
$this->load->view('telaUteis/footer');