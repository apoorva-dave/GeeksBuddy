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
		$data = $this->getQuestions($category_slug, $no_of_ques);
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

	private function getQuestions($category_slug, $limit)
	{
		$this->db->select('*');
		$this->db->where('category_slug', $category_slug);
		$this->db->order_by('id', 'RANDOM');
		$this->db->limit($limit);
		$query_1 = $this->db->get('objective_questions');
		
		$data['questions'] =  $query_1->result();
		return $data;
	}
}