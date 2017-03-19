<?php 

class Model_test extends CI_Model
{
	public function getOverallcategories()
	{
		// Fetch overall categories
		$this->db->select('name, slug, category_ids');
		$query = $this->db->get('overall_categories');

		return $query->result();
	}

	public function createTest($category_slug, $time, $no_of_ques)
	{
		$data['questions'] = $this->getQuestions($category_slug, $no_of_ques);
		$data['time_alloted'] = $time;
		$data['no_of_ques'] = $no_of_ques;

		/////////////////////////////////////////
		// TODO Save this test in the database //
		/////////////////////////////////////////
		
		// get user_id from session
		
		// create comma seperated values of question ids
		
		//create comma seperated values of answers
		
		// make answers 0
		
		// time alloted = $time 
		// time time used = 0
		
		// comma sperated values of question_ids which are answered
		// comma sperated values of answers which are answered
		   
		return $data;
	}

	private function getQuestions($overall_category_slug, $limit)
	{
		// Fetch overall categories
		$this->db->select('category_ids');
		$this->db->where('slug', $overall_category_slug);
		$query1 = $this->db->get('overall_categories');
		$category_ids = explode(',', $query1->result()[0]->category_ids);

		// Get category-slug
		$this->db->select('category_slug');
		$this->db->where_in('id', $category_ids);
		$query2 = $this->db->get('category');
		$categories = $query2->result();
		$categories_slug =[];

		foreach ($categories as $category) {
			array_push($categories_slug, $category->category_slug);
		}

		$this->db->select('*');
		$this->db->where_in('category_slug', $categories_slug);
		$this->db->order_by('id', 'RANDOM');
		$this->db->limit($limit);
		$query3 = $this->db->get('objective_questions');
		
		return $query3->result();
	}
}