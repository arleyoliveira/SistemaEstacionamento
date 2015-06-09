<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model {

    public function do_insert($dados = NULL) {

        if ($dados != NULL):
            $this->db->insert('cliente', $dados);
            $this->session->set_flashdata('cadastrook', IconsUtil::getIcone(IconsUtil::ICON_OK) . ' Cadastro efetuado com sucesso!');
            redirect('index.php/cliente/cadastrar');
        endif;
    }

    public function do_delete($condicao = NULL) {

        if ($condicao != NULL):
            $this->db->delete('cliente', $condicao);
            $this->session->set_flashdata('excluirok', 'Registro deletado com sucesso!');
        endif;

        redirect('gerenciador/entrada');
    }

    public function get_cliente($nome) {
        $this->db->like('nome', $nome, 'both');
        return $this->db->get('cliente')->result();
    }

    public function get_all() {
        return $this->db->get('cliente');
    }

    public function get_byCPF($cpf = NULL) {
        if ($cpf != NULL):
            $sql = "SELECT * FROM cliente WHERE cpf	 = ?";
            $query = $this->db->query($sql, array($cpf));
            if ($query->num_rows() > 0 && $query->num_rows() == 1):
                return $query;
            else:
                return false;
            endif;
        else:
            return false;

        endif;
    }

    public function get_byNome($nome = NULL) {
        if ($nome != NULL):
            $sql = "SELECT * FROM cliente WHERE nome = ?";
            $query = $this->db->query($sql, array($nome));
            if ($query->num_rows() > 0):
                return $query;
            else:
                return false;
            endif;
        else:
            return false;

        endif;
    }

    public function do_update($dados = NULL, $condicao = NULL) {
        if ($dados != NULL && $condicao != NULL):
            $this->db->update('cliente', $dados, $condicao);
            $this->session->set_flashdata('edicaook', 'Dados alterado com sucesso!');
            redirect(current_url());
        endif;
    }

    function buscaClienteByNome($q) {
        $this->db->select('*');
        $this->db->like('nome', $q);
        $query = $this->db->get('cliente');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $new_row['label'] = htmlentities(stripslashes($row->nome));
                $new_row['value'] = htmlentities(stripslashes($row->cpf));
                $row_set[] = $new_row; //build an array
            }
            echo html_entity_decode(json_encode($row_set)); //format the array into json data
        }
    }

}
