<?php 

class Model_questions extends CI_Model
{
	public function getOverallCategoryCategories()
	{
		// Fetch overall categories
		$this->db->select('name, slug, category_ids');
		$query1 = $this->db->get('overall_categories');
		$overall_categories = $query1->result();

		// Fetch all Categories
		$this->db->select('id, name, category_slug');
		$query2 = $this->db->get('category');
		$all_categories = $query2->result();
		// var_dump($all_categories);

		foreach ($overall_categories as $overall_category) {
			$overall_category->categories = [];
			$category_ids = explode(',', $overall_category->category_ids);
			foreach ($all_categories as $category) {
				if(in_array($category->id, $category_ids)){
					$overall_category->categories[] = $category;
				}
			}
		}
		
		return $overall_categories;

	}

	public function getAllCompanies()
	{
		$this->db->select('name, company_slug, id');
		$query = $this->db->get('companies');
		$companies = $query->result();
		return $companies;
	}

	public function getQuestionsbyCategory($category_slug, $page = 1, $per_page)
	{
		if (!$category_slug) {
			return null;		
		}
		$this->db->select('*');
		$this->db->where('category_slug',$category_slug);
		$this->db->limit($per_page, ($page - 1) * $per_page);
		$query_1 = $this->db->get('objective_questions');
		// Apart from rsults, we need ki kitne no of pages hain toal! 
		//qki apanko wahan dikhana hai!
		
		$this->db->where('category_slug',$category_slug);
		$query_2 = $this->db->count_all_results('objective_questions');
		$data['questions'] =  $query_1->result();
		$data['no_of_pages'] =  $query_2/ $per_page; // toal rows / no_of_ques per page!
		return $data;
	}

	public function getCategoryName($category_slug)
	{
		if (!$category_slug) {
			return null;		
		}
		$this->db->select('name');
		$this->db->where('category_slug',$category_slug);
		$query=$this->db->get('category');
		return $query->result()[0]->name;	
	}

	// Get questions based on a company-slug
	public function getQuestionsbyCompany($company_slug,$page = 1,$per_page)
	{
		if (!$company_slug) {
			return null;		
		}
		$this->db->select('*');
		$this->db->where('companies_slug',$company_slug);
		$this->db->limit($per_page, ($page - 1) * $per_page);
		$query_1 = $this->db->get('objective_questions');
		// Apart from rsults, we need ki kitne no of pages hain toal! 
		//qki apanko wahan dikhana hai!
		
		$this->db->where('companies_slug',$company_slug);
		$query_2 = $this->db->count_all_results('objective_questions');
		$data['questions'] =  $query_1->result();
		$data['no_of_pages'] =  $query_2/ $per_page; // toal rows / no_of_ques per page!
		return $data;
	}

	public function getCompanyName($company_slug)
	{
		if (!$company_slug) {
			return null;		
		}
		$this->db->select('name');
		$this->db->where('company_slug',$company_slug);
		$query=$this->db->get('companies');
		return $query->result()[0]->name;	
	}
}