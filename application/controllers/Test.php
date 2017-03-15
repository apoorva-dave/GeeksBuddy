<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$this->load->view('test/available-tests.php');
	}

	public function instructions($category_slug = null)
	{
		if(!$category_slug || $category_slug ==""){
			redirect('test');
		}

		$questions = $this->input->get('no_of_ques');
		$time = $this->input->get('time');
		
		// TODO: Validate the input beofre processing;
		
		$this->load->model('Model_test');

		// To create a test, ranodomly select the desired no of quetions and give the alloted time!
		// After that return all the questions only to the user.
		$data = array(
			'time' => $time, 
			'questions' => $questions, 
			'category_slug' => $category_slug 
			);
		// Test interface will be single page and without reloads! page will only reload if the user has completed the test!
		$this->load->view('test/instructions', $data);
	}


}
