<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajuda extends CI_Controller {  
    /**
     * Ajuda - Area Administrativa
     *
     * @package     CodeIgniter
     * @subpackage  Controllers
     * @category    Area Administrativa
     * @author      Escritório Escola Dev Team
     * @link        http://www.semanatrans.esy.es
     * 
     * Este Controller foi projetado para exibir os eventos!
     */
    
    public function index(){
        $this->load->view('ajuda');
    }
}