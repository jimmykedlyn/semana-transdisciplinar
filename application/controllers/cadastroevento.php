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
        $this->load->view('cadastro_eventos');
    }  
}