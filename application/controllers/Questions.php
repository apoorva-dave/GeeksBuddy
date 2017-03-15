<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {

	public function index($category_slug = null)
	{
		redirect('Aptitude');
	}

	public function view($category_slug = null)
	{
		if(!$category_slug|| $category_slug == ""){
			$this->index();
		}

		$this->load->model('Model_questions');

		$data['questions'] = $this->Model_questions->getQuestionsbyCategory($category_slug);

		$this->load->view('questions/view', $data);
	}
}
