<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Model {

    # LOGIN DE USUÁRIO
    function login($cpf,$senha) {
        //$cpf = $this->input->post('cpf');
		//$senha = $this->input->post('senha');
		//pesquisa se o cpf e a senha estão no bd
		$this->db->where('cpf',$cpf);
		$this->db->where('senha',$senha);

       //se a pesquisa encontrar os resultados $usuario será igual a 1
		$usuario = $this->db->get('usuario')->result();
		
		return $usuario; // RETORNA usuario         
    }
    function verificaCpf($cpf){
    $this->db->where('cpf',$cpf);
    //se a pesquisa encontrar os resultados $usuario será igual a 1
    $usuario = $this->db->get('usuario')->result();
    
    return $usuario; // RETORNA usuario     
    }
    
    # CADASTRO DE USUÁRIO
    function cadastro($dados){    	
        return $this->db->insert('usuario', $dados);
    }

    # ALTERAÇÃO DE CADASTRO
    function getUsuarioId($id){
        $rows = array(); //esta variavel manterá todos os resultados
        $this->db->where('id',$id);
        $query = $this->db->get('usuario');

        foreach($query->result_array() as $row){    
            $rows[] = $row; //adicionar o resultado buscado para o vetor rows;
        }
       return $rows; // retorna rows, e nao a variavel row
    }     
}