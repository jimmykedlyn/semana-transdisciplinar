<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    /**
     * Home - Tela de Login
     *
     * @package     CodeIgniter
     * @subpackage  Controllers
     * @category    Home - Tela de Login
     * @author      Escritório Escola Dev Team
     * @link        http://www.semanatrans.esy.es
     * 
     * Este Controller foi projetado para ser o sistema de login!
     */
	
	public function index()	{
		//carrega a view login_de_usuario.php
       $data['erro'] = NULL;
	   $this->load->view('login_de_usuario',$data);
	}
    
    public function login() {
		// Regras da Validação
        $this->load->library('form_validation');
        $this->form_validation->set_rules('cpf', 'CPF', 'required');
        $this->form_validation->set_rules('senha', 'SENHA', 'required');
        $this->form_validation->set_error_delimiters(
            '<div class="alert alert-danger valida" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button><i class="fa fa-exclamation-triangle"></i> ', 
            '</div>');     
        
        if ($this->form_validation->run() == FALSE) {
        	//se não houver cpf ou senha retornara com msg de erro
            $data['erro'] = NULL;
            $this->load->view('login_de_usuario',$data);
        } else {          
        $cpf   = $this->input->post('cpf');
		$senha = $this->input->post('senha');
        
        //Carrega a Library de validação de cpf
        $this->load->library('Validacaocpf');
        $msgerro = $this->validacaocpf->verificar($cpf);
        if($msgerro !== NULL){
            $data['erro'] = $msgerro;
            $this->load->view('login_de_usuario',$data);
        } else {
            //Consulta no Banco de Dados                            
            $this->load->model('Usuarios');
            $usuario = $this->Usuarios->login($cpf,$senha);                        

            if(count($usuario)===1){ // VERIFICA LOGIN E SENHA
                //Adiciona o cpf ao cookie do usuario
                $this->load->library('session');
                $dados = array('id'=>$usuario[0]->id,'nome'=> $usuario[0]->nome,'logado'=>TRUE);//array com os dados do cookie
                $this->session->set_userdata($dados);//passando a array para o cookie 
                redirect(base_url("admin/paineladm"));
                }
            else{
                redirect(base_url(),'refresh');
            }
        }
    }
} 
    
    public function sair(){
        //Função de logout do sistema        
        $this->session->sess_destroy();
        redirect(base_url(),'refresh');
    }
}