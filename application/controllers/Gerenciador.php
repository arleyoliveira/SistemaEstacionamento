<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class gerenciador extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('array');
        $this->load->library('session');
        $this->load->model('Gerenciador_model', 'GerenciadorDAO');
        $this->load->model('Cliente_model', 'ClienteDAO');
        $this->load->model('Veiculo_model', 'VeiculoDAO');
        $this->load->library('table');
    }

    public function entrada() {
        //Validação dos campos
        $this->form_validation->set_rules('veiculo', 'PLACA', 'trim|required|max_length[10]|strtolower');
        $this->form_validation->set_rules('cliente', 'CPF', 'trim|required|max_length[15]|strtolower');
        $this->form_validation->set_rules('tipodecobranca', 'Tipo de Cobrança', 'trim|required');
        $this->form_validation->set_rules('observacao', 'Observação', 'trim|max_length[100]|strtolower');

        $ERRO = FALSE;
        if ($this->form_validation->run() == TRUE):
            if (!$this->GerenciadorDAO->existeCaixaIniciado()):
                $this->session->set_flashdata('caixanaoiniciado', IconsUtil::getIcone(IconsUtil::ICON_EXCLAMTION_SING) . ' O caixa não foi inializado!');
                redirect('/gerenciador/iniciar_caixa');
            else:
                if(!$this->GerenciadorDAO->verificaStatus()){
                    $this->GerenciadorDAO->retornarCaixa();
                }
                $dados = elements(array('veiculo', 'cliente', 'tipodecobranca', 'observacao'), $this->input->post());
                if ($this->VeiculoDAO->get_ByPlaca($dados['veiculo']) == FALSE):
                    $ERRO = 'Veiculo não cadastrado no sistema';
                endif;


                if ($this->GerenciadorDAO->get_ByPlacaEntrada($dados['veiculo']) == TRUE):
                    if ($ERRO == FALSE):
                        $ERRO = $ERRO . "Este Veiculo já se encontra-se no estacionamento";
                    else:
                        $ERRO = "Este Veiculo já se encontra-se no estacionamento";
                    endif;
                endif;
                if ($this->ClienteDAO->get_ByCPF($dados['cliente']) == FALSE):
                    if ($ERRO == FALSE):
                        $ERRO = $ERRO . "Cliente não cadastrado no sistema";
                    else:
                        $ERRO = "Cliente não cadastrado no sistema";
                    endif;
                endif;
                if ($ERRO == FALSE):
                    if ($dados['observacao'] == "" || $dados['observacao'] == NULL):
                        $dados['observacao'] = NULL;
                    endif;
                    $this->GerenciadorDAO->do_insert($dados);
                endif;
            endif;
        endif;


        $dados = array(
            'titulo' => 'Sistema de Estacionamento',
            'tela' => 'gerenciamento/entrada',
            'active' => '',
            'ERRO' => $ERRO,
        );
        $this->load->view('exibirDados', $dados);
    }

    public function saida() {
        //validação 
        $this->form_validation->set_rules('veiculo', 'PLACA', 'trim|required|max_length[10]|strtolower');
        $controle = FALSE;
        $MENSAGEM = "";
        $registro = FALSE;
        $dadosr = "";
        $valor = 0;
        if ($this->form_validation->run() == TRUE):
            $dados = elements('veiculo', $this->input->post());
            $query = $this->GerenciadorDAO->get_ByPlacaSaida($dados['veiculo']);
            if ($query != FALSE && $query != ""):

                foreach ($query->result() as $r) {
                    $dadosr = array(
                        'veiculo' => $r->veiculo,
                        'cliente' => $r->cliente,
                        'horaEntrada' => $r->horaEntrada,
                        'dia' => $r->dia,
                        'minuto' => $r->minuto,
                        'hora' => $r->horas,
                        'valorHora' => $r->valorHora,
                    );
                }

                if ($dados['veiculo'] == $dadosr['veiculo']):
                    $controle = TRUE;
                    $valor = 0;
                    //if($dadosr['dia'] > 0):
                    //$valor = $valor + ($dadosr['dia'] * 24) * $dadosr['valorHora'];
                    //endif;

                    if ($dadosr['hora'] > 0):
                        $valor = $valor + ($dadosr['hora'] * $dadosr['valorHora']);
                    endif;

                    if ($dadosr['minuto'] > 0):
                        $valor = $valor + (($dadosr['minuto'] / 60) * $dadosr['valorHora']);
                    endif;
                else:
                    $MENSAGEM = "Não existe registro de entrada para este veiculo";
                    $controle = FALSE;
                endif;

            else:
                $MENSAGEM = "Não existe registro de entrada para este veiculo";
                $controle = FALSE;
            endif;
        endif;

        $dados = array(
            'titulo' => 'Sistema de Estacionamento',
            'tela' => 'gerenciamento/saida',
            'MENSAGEM' => $MENSAGEM,
            'controle' => $controle,
            'registro' => $dadosr,
            'valor' => $valor,
        );
        $this->load->view('exibirDados', $dados);
    }

    public function encerrar_caixa() {
        $dados = elements('finalizar', $this->input->post());
        if ($dados['finalizar'] == "sim"):
            $this->GerenciadorDAO->finalizarCaixa();
        else:
            $dados = array(
                'titulo' => 'Sistema de Estacionamento',
                'tela' => 'gerenciamento/finalizarCaixa',
                'MENSAGEM' => $MENSAGEM,
            );
            $this->load->view('exibirDados', $dados);
        endif;
    }

    public function finalizar_caixa() {
        $resposta = $this->GerenciadorDAO->existeCaixaIniciado();
        $MENSAGEM = FALSE;
        if ($this->GerenciadorDAO->verificaStatus() == FALSE):
            $MENSAGEM = '<div class="text-center">'.IconsUtil::getIcone(IconsUtil::ICON_EXCLAMTION_SING) .'\ O caixa já encontra-se no estado de encerrado. </div> 
			 <div class="text-center"> Ou ele não foi iniciado hoje </div>';
        endif;
        $dados = array(
            'titulo' => 'Sistema de Estacionamento',
            'tela' => 'gerenciamento/finalizarCaixa',
            'MENSAGEM' => $MENSAGEM,
        );
        $this->load->view('exibirDados', $dados);
    }

    public function liquidar() {
        $valorCaixa = $this->input->post('valor');
        $veiculo = $this->input->post('veiculo');
        $dadosGerenciador = array('status' => 0, 'valor' => $valorCaixa);
        $this->GerenciadorDAO->retirarVeiculo($dadosGerenciador, $veiculo);
        
        $this->GerenciadorDAO->adicionarValorCaixa($valorCaixa);

        $query = $this->GerenciadorDAO->getValorCaixa();
        $valorFinal = 0;
        foreach ($query->result() as $row) :
            $valorFinal = $row->saldoFinal;
        endforeach;
        $valorFinal += $valorCaixa;
        $condicao = "date(data) = date(now())";
        $valorCaixa = $valorCaixa + $valorFinal;
        $dadosn = array('saldoFinal' => $valorFinal);
        $this->GerenciadorDAO->adicionarValorCaixa($dadosn, $condicao);

        //$condicao = 'date(data) = date(now())';
        //$c = 'saldoFinal + '. $valorCaixa;
        //$dadosCaixa = array('saldoFinal' => 'saldoFinal +'.$valorCaixa);
        //$this->GerenciadorDAO->atualizarCaixa($valor, $condicao);
        $this->session->set_flashdata('retiradaok', 'Veiculo desalocado com sucesso sucesso!');
        redirect("gerenciador/entrada");
    }

    public function iniciar_caixa() {
        $MENSAGEM = "";
        $controle = FALSE;
        //Validação dos campos
        $this->form_validation->set_rules('valor', 'valor', 'trim|required');
        if ($this->form_validation->run() == TRUE) {
            if ($this->GerenciadorDAO->existeCaixaIniciado()):
                if (!$this->GerenciadorDAO->verificaStatus()):
                    $this->GerenciadorDAO->retornarCaixa();
                    $controle = TRUE;
                else:
                    $MENSAGEM = 'O caixa já encontra-se em aberto';
                endif;
            else:
                $controle = TRUE;
                $saldoInicial = $this->input->post('valor');
                $saldoFinal = $saldoInicial;
                $dados = array('saldoInicial' => $saldoInicial, 'saldoFinal' => $saldoFinal);
                $this->GerenciadorDAO->inicializarCaixa($dados);  
            endif;
        }

        $dados = array(
            'titulo' => 'Sistema de Estacionamento',
            'tela' => 'gerenciamento/iniciar',
            'active' => '',
            'MENSAGEM' => $MENSAGEM,
            'controle' => $controle,
        );
        $this->load->view('exibirDados', $dados);
    }

    public function gerarRelatorioDiario() {
        $ERRO = FALSE;
        $dadosEntradaSaida = $this->GerenciadorDAO->dadosEntraSaida();
        $dadosCaixa = $this->GerenciadorDAO->dadosCaixaDiario();
        if($dadosCaixa != FALSE && $dadosEntradaSaida != FALSE):
            foreach ($dadosCaixa->result() as $row):
                $dadosCaixaDiario = $row;
            endforeach;
            $dados = array(
               'dadosEntradaSaida' => $dadosEntradaSaida,
               'dadosCaixaDiario' => $dadosCaixaDiario,
                
            );
            
            //$this->load->view('relatorio/diario', $dados);
           
            
            //$this->load->view('exibirDados', $dados);
            //load the view and saved it into $html variable
            $html = $this->load->view('relatorio/diario', $dados, true);
            
            //this the the PDF filename that user will get to download
            //this the the PDF filename that user will get to download
            $pdfName = 'RelatórioDiário-'.$dadosCaixaDiario->dataFinal.'.pdf';
            $pdfFilePath = $pdfName;
            //load mPDF library
            $this->load->library('m_pdf');

            $this->pdf = $this->m_pdf->load('c', 'A4');
            $this->pdf->WriteHTML($html);
            $this->pdf->Output($pdfFilePath, "D");
       endif;
    }

}
