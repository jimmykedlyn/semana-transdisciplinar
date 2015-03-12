<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cadastroevento extends CI_Controller {
    /**
     * Cadastro Evento
     *
     * @package     CodeIgniter
     * @subpackage  Controllers
     * @category    Cadastro Evento
     * @author      Escritório Escola Dev Team
     * @link        http://www.semanatrans.esy.es
     * 
     * Este Controller foi projetado para ser a Area de Cadastro Evento!
     */    

    public function index() {

        $this->load->model('eventosmodel');
        $dados['dia'] = $this->eventosmodel->getdia();
        $dados['turno'] = $this->eventosmodel->get_eventosturno();
        $this->load->view('cadastro_eventos',$dados);
        //$this->load->view('cadastro_eventos');
    }  
    public function receber(){
        // Regras da Validação
        $this->load->library('form_validation');
        $this->form_validation->set_rules('data', 'DATA', 'required'); 
        $this->form_validation->set_rules('turno', 'TURNO', 'required');
        $this->form_validation->set_rules('horario', 'HORARIO', 'required');
        $this->form_validation->set_rules('sala', 'SALA', 'required');        
        $this->form_validation->set_rules('tipo', 'TIPO', 'required');
        $this->form_validation->set_rules('descricao', 'DESCRICAO', 'required');
        
        $this->form_validation->set_error_delimiters(
            '<div class="alert alert-danger valida" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button><i class="fa fa-exclamation-triangle"></i> ', 
            '</div>');     
        
        if ($this->form_validation->run() == FALSE) {
            //se não houver cpf ou senha retornara com msg de erro
            $this->load->view('cadastro_eventos');            
        } else { 
            //Recebe os dados da views
            $data['id_dia'] = $this->input->post('data');
            $data['id_area'] = $this->input->post('area');
            $data['id_curso'] = $this->input->post('curso');
            $data['id_turno'] = $this->input->post('turno');
            $data['id_horario'] = $this->input->post('horario');
            $data['ID_SALA'] = $this->input->post('sala');
            $data['ID_EVENTO'] = $this->input->post('tipo');
            $data['nome'] = $this->input->post('tema');
            $data['PALESTRANTE'] = $this->input->post('palestrante');
            $data['VAGAS'] = $this->input->post('vagas');
            $data['DESCRICAO'] = $this->input->post('descricao');
            
            /* Carrega o modelo */
            $this->load->model('eventos');            

            /* Chama a função inserir do modelo */
            if ($this->eventos->cadastro($data)) {
                $this->load->view('mensagem');
            } else {
                echo "error";
            }
        }       
    }
}