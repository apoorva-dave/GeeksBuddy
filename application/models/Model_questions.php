<?php 

class Model_questions extends CI_Model
{
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
	public function getQuestionsbyCompany($company_slug)
	{
		if (!$company_slug) {
			return null;		
		}
		$this->db->select('*');
		$this->db->where('company_slug',$company_slug);
		$query=$this->db->get('objective_questions');
		return $query->result();
	}

}