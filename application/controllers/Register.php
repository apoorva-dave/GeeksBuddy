<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
		$this->load->view('register/register');
	}

	public function registerSubmit()
	{
	//	var_dump($_POST);
	//	die();
			// Ye hui apni form validation library
		$this->load->library('form_validation');
		
		// Form validation Rules
		$this->form_validation->set_rules('password','Password','required|trim');
		$this->form_validation->set_rules('name','Name','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[users.email]',
			array('is_unique' => 'This email is already registered!'));
		//  Agar from validation successfulyy ho jaa rha toh..
		if ($this->form_validation->run()) {

			// ye model bna hai?
			$this->load->model('Model_users');
			
			 // var_dump($this->input->post('password'));
			 // var_dump($this->input->post('email'));

			$email = $this->input->post('email');
			$password = $this->Model_users->hashPassword($this->input->post('password'));
			$name = $this->input->post('name');

			// TODO: Check if the user is already registerd! Tumhara kam hai ye!

			$user_data  = array(
				'name' => $name,
				'email' => $email,
				'password' => $password,
				);

			if($this->Model_users->insert_user($user_data)){
				//echo "inserted!";
				$this->load->view('register/register-success');
			}else{
				// Insertion failed
				$this->load->view('register/register-failed');
			}
			
		}else{
				// Therse are validation errors, go back to the form and show them
				
				// echo validation_errors();
				 $data['errors'] = validation_errors(); 
				 $this->load->view('register/register', $data);	
		}
	}

}
