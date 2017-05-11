<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('template/header');

		$this->load->view('sections/header');
		$this->load->view('sections/information');

		$this->load->view('template/footer');
	}

	/*
	*
	* FUNCTION TO SEND THE PDF MATERIAL TO USER EMAIL
	*
	* @access public
	* @return redirect
	*/
	public function sendMaterialEmail(){

		$message = "Olá, acesse nosso driver para fazer download / visualizar a planta:";
		$message .="\n https://drive.google.com/open?id=0B3Dy9zCA0QZUcFVsc0VueGtWaU0";
		$message .= "\n Agradecemos o contato";

		$insert = array(
			'email'			=>	$this->input->post('email'),
			'plant_link'	=>	"https://drive.google.com/open?id=0B3Dy9zCA0QZUcFVsc0VueGtWaU0",
			'data'			=>  date("Y-m-d"),
		);

		$this->load->library('email');
        $this->email->clear();
        $this->email->set_newline("\r\n");
        $this->email->from('internet@praias.com');
        $this->email->to($this->input->post('email'));
        $this->email->subject('Praias Construtora - Download do material');
        $this->email->message($message);
        if($this->email->send()){
			
        	if ($this->plant_request_model->insert($insert)) {
        		return $this->json->dieJSON(
        			array(
        				'code'	=> 200
        			)
        		);
        	}

		}
	}
}
