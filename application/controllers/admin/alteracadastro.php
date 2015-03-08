<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alteracadastro extends CI_Controller {  /**
     * Alteração de Cadastro - Area Administrativa
     *
     * @package     CodeIgniter
     * @subpackage  Controllers
     * @category    Area Administrativa
     * @author      Escritório Escola Dev Team
     * @link        http://www.semanatrans.esy.es
     * 
     * Este Controller foi projetado para controlar a Alteração de Cadastro!
     */
    
    public function __construct(){
        parent::__construct();
        /* Esta condição verifica se algum
         * Usuario está logado
         * Caso não esteja logado é carregada a view de login
         */
        if(!$this->session->userdata('logado')){            
            redirect(base_url());            
        }        
    }
    public function index(){
        $id = $this->session->userdata('id');
        /*$this->db->where('id',$id); 
        $dados['usuario'] = $this->db->get('usuario');*/
        $this->load->model('Usuarios');
        $dados['usuario'] = $this->Usuarios->getUsuarioId($id);
        $this->load->view('admin/alteracao_cadastro',$dados);
        
    } 
    public function altera(){
        //Recebe os dados da views
        $nome = $this->input->post('nome');
        $nome = strtoupper($nome);
        $data['id_tipo'] = $this->input->post('tipo');
        $data['nome'] = $nome;
        $data['cpf'] = $this->input->post('cpf');
        $data['email'] = $this->input->post('email');
        $data['nascimento'] = $this->input->post('datanasc');
        $data['sexo'] = $this->input->post('sexo');
        $data['telefone'] = $this->input->post('telefone');
        $data['celular'] = $this->input->post('cel');
        $data['monitor'] = $this->input->post('monitor');
        

        $data['senha'] = $this->input->post('senha');

        $id = $this->session->userdata('id');
        $this->db->where('id', $id);    

        if ($this->db->update('usuario', $data)) {
            redirect(base_url("admin/paineladm"));
        } else {
            echo "error";
        }
    }
}