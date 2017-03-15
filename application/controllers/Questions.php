<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {
	private $per_page = 2;
public function index()
	{
		//$this->load->view('questions/view');
	}

	public function view($category_slug = null, $page = 1)
	{
		// By default, $category_id is null and page is 1
		if(!$category_slug|| $category_slug == ""){
			$this->index();
		}

		$this->load->library('pagination');
		$this->load->model('Model_questions');
		//$data k andr wala sab kuch udar view mein jayega!
		$data = $this->Model_questions->getQuestionsbyCategory($category_slug, $page, $this->per_page);
		$data['per_page'] = $this->per_page;
		$data['category_name'] = $this->Model_questions->getCategoryName($category_slug);
		$data['category_slug'] = $category_slug;
		$data['page'] = $page; 
		$this->load->view('questions/view', $data);
		$this->load->library('pagination');

		
	}


	// Show company wise questions!
	public function company($company_slug)
	{
		if(!$company_slug|| $company_slug == ""){
			$this->index();
		}
		
		$this->load->model('Model_questions');

		$data['questions'] = $this->Model_questions->getQuestionsbyCompany($company_slug);

		$this->load->view('questions/view', $data);
	}
}
