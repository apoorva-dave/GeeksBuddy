<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coding extends CI_Controller {

	public function index()
	{
		
		$this->load->model('Model_questions');
		$data['overall_categories'] = $this->Model_questions->getOverallCategoryCategories();
		$this->load->view('aptitude/coding', $data);

	}
}
