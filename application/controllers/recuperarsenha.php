<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recuperarsenha extends CI_Controller {
	/**
     * Cronograma - Area Administrativa
     *
     * @package     CodeIgniter
     * @subpackage  Controllers
     * @category    Area Administrativa
     * @author      Escritório Escola Dev Team
     * @link        http://www.semanatrans.esy.es
     * 
     * Este Controller foi projetado para exibir o Cronograma do evento!
     */
    
    public function index(){
    	$this->load->view('recuperarsenha');
    }	
}