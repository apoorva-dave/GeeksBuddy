<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		// Show available tests from the database!
		$this->load->model('Model_questions');
		$data['overall_categories'] = $this->Model_questions->getOverallCategoryCategories();

		$this->load->view('test/available-tests.php', $data);
	}

	public function instructions($category_slug = null)
	{
		if(!$category_slug || $category_slug ==""){
			redirect('test');
		}

		$no_of_ques = $this->input->get('no_of_ques');
		$time = $this->input->get('time');
		
		// TODO: Validate the input beofre processing;
		
		$this->load->model('Model_test');

		// To create a test, ranodomly select the desired no of quetions and give the alloted time!
		// After that return all the questions only to the user.
		$data = array(
			'time' => $time, 
			'no_of_ques' => $no_of_ques, 
			'category_slug' => $category_slug 
			);
		// Test interface will be single page and without reloads! page will only reload if the user has completed the test!
		$this->load->view('test/instructions', $data);
	}

	public function start($category_slug = "")
	{
		if(!$this->session->userdata('is_logged_in')){
			redirect('login');
		}
		if(!$category_slug || $category_slug ==""){
			redirect('test');
		}

		$no_of_ques = $this->input->get('no_of_ques');
		$time = $this->input->get('time');
		
		$this->load->model('Model_test');

		$data = $this->Model_test->createTest($category_slug, $time, $no_of_ques);
		
		// Save the test data in session variable
		$this->session->set_userdata('test_data', $data);
		
		redirect('Test/test_page');
	}


	public function test_page()
	{
		if(!$this->session->userdata('is_logged_in')){
			redirect('login');
		}

		if(!$this->session->userdata('test_data')){
			redirect('test');
		}
		$data = $this->session->userdata('test_data');
		$this->load->view('test/start-test.php', $data);
	}


}
