<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eventosmodel extends CI_Model {

    # CADASTRO DE USUÁRIO
    function cadastro($dados){    	
        return $this->db->insert('eventos_cadastrados', $dados);
    }  
    # GET DATAS
    function getdia(){
        $rows = array(); //esta variavel manterá todos os resultados
        $query = $this->db->get('dia');

        foreach($query->result_array() as $row){    
            $rows[] = $row; //adicionar o resultado buscado para o vetor rows;
        }
       return $rows; // retorna rows, e nao a variavel row
    }
    # GET TURNO
    function get_eventosturno(){
        $query = $this->db->get('eventos_cadastrados');//Busca só os 10 primeiros resultados
        return $query->result();

    }       
}   