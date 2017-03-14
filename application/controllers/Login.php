<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	public function index($data=null)
	{
		$this->load->view('login/login',$data);
	}
	public function loginSubmit()
	{
		// Ye hui apni form validation library
		$this->load->library('form_validation');
		
		// Form validation Rules
		$this->form_validation->set_rules('password','Password','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email');
		//  Agar from validation successfulyy ho jaa rha toh..
		if ($this->form_validation->run()) {

			// ye model bna hai?
			$this->load->model('Model_users');
			
			 // var_dump($this->input->post('password'));
			 // var_dump($this->input->post('email'));

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			if($this->Model_users->isValidPassword($email, $password)){
				$this->session->set_userdata('is_logged_in', $email);
				redirect('Aptitude');
			}else{
				$data['error'] = true;
				$data['error_msg'] = "You have entered wrong Email/password!";
				$this->index($data);
			}
		}else{
				$data['error'] = true;
				$data['error_msg'] = form_error('email')." ".form_error('password');	
				$this->index($data);
		}
	}

	// public function logout()
	// {
	// 	$this->session->set_userdata('is_logged_in', null);
	// 	redirect('Login');
	// }
}
