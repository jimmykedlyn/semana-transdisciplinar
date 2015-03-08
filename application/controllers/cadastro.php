<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cadastro extends CI_Controller {
    /**
     * Cadastro de Usuario
     *
     * @package     CodeIgniter
     * @subpackage  Controllers
     * @category    Cadastro de Usuario
     * @author      Escritório Escola Dev Team
     * @link        http://www.semanatrans.esy.es
     * 
     * Este Controller tem o proposito de cadastrar usuarios no banco de dados!
     */
	
	public function index()	{        
        // Regras da Validação
        $this->form_validation->set_rules('cpf', 'CPF', 'required|numeric');
        $this->form_validation->set_error_delimiters(
            '<div class="alert alert-danger valida" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button><i class="fa fa-exclamation-triangle"></i> ', 
            '</div>');     
        
        if ($this->form_validation->run() == FALSE) {
            //se não houver cpf ou senha retornara com msg de erro
        $data['erro'] = NULL;
        $this->load->view('cadastro_usuario/verifica_cpf',$data);

        } else { 
    		$cpf = $this->input->post('cpf');
            //Carrega a Library de validação de cpf
            $this->load->library('Validacaocpf');
            $msgerro = $this->validacaocpf->verificar($cpf);
            if($msgerro !== NULL){
                $data['erro'] = $msgerro;
                $this->load->view('cadastro_usuario/verifica_cpf',$data);

            }else{
    		//Consulta no Banco de Dados                            
            $this->load->model('Usuarios');
            $usuario = $this->Usuarios->verificaCpf($cpf);                        

            if (count($usuario) === 1) { // VERIFICA LOGIN E SENHA
                /*Adiciona o cpf ao cookie do usuario*/           
                $data['erro'] = "Usuario já Cadastrado";
                $this->load->view('cadastro_usuario/verifica_cpf',$data);      		      	            
                } else {
                $data['erro'] = NULL;
                $this->load->view('cadastro_usuario/formulario',$data);
                }
            }
        }
	}
	public function receber(){
		// Regras da Validação
        $this->load->library('form_validation');
        $this->form_validation->set_rules('tipo', 'TIPO', 'required'); 
        $this->form_validation->set_rules('nome', 'NOME', 'required');
        $this->form_validation->set_rules('cpf', 'CPF', 'required|numeric');
        $this->form_validation->set_rules('email', 'EMAIL', 'required');        
        $this->form_validation->set_rules('datanasc', 'DATA', 'required');
        $this->form_validation->set_rules('sexo', 'SEXO', 'required');
        $this->form_validation->set_rules('telefone', 'FONE', 'required');
        $this->form_validation->set_rules('cel', 'CELULAR', 'required');
        $this->form_validation->set_rules('telefone', 'FONE', 'required');
        // A função matches verifica se os campos são iguais
        $this->form_validation->set_rules('senha', 'SENHA', 'required|matches[senha2]');
        $this->form_validation->set_rules('senha2', 'CONFIRMAR', 'required');
        $this->form_validation->set_message('matches', 'Os campos de SENHA não são iguais!');

        $this->form_validation->set_error_delimiters(
            '<div class="alert alert-danger valida" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button><i class="fa fa-exclamation-triangle"></i> ', 
            '</div>');     
        
        if ($this->form_validation->run() == FALSE) {
        	//se não houver cpf ou senha retornara com msg de erro
            $this->load->view('cadastro_usuario/formulario');            
        } else { 
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

			/* Carrega o modelo */
			$this->load->model('usuarios');            

			/* Chama a função inserir do modelo */
			if ($this->usuarios->cadastro($data)) {
				$this->load->view('cadastro_usuario/mensagem_ok');
			} else {
				echo "error";
			}
		}		
	}
    public function verificaDados(){        
        $dados['usuario'] = $this->db->get('usuario')->result();
        //pre($dados['usuario']);
        $this->load->view('cadastro_usuario/mensagem_ok',$dados);
        //echo $dados;
    }
}