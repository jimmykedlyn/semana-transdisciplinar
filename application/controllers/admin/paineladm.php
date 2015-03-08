<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paineladm extends CI_Controller {
    /**
     * Home Area Administrativa
     *
     * @package     CodeIgniter
     * @subpackage  Controllers
     * @category    Area Administrativa
     * @author      Escritório Escola Dev Team
     * @link        http://www.semanatrans.esy.es
     * 
     * Este Controller foi projetado para ser a Home da Area Administrativa!
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
    public function index() {
        $this->load->view('admin/home');
    }  
}