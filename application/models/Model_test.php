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
		// get user_email from session
		$test_data['user_email'] = $this->session->userdata('is_logged_in');

		// create comma seperated values of question ids
		$test_data['question_ids'] = [];
		$test_data['right_options'] = [];
		foreach ($data['questions'] as $ques) {
			array_push($test_data['question_ids'], $ques->id);
			array_push($test_data['right_options'], $ques->right_option);
		}

		// time alloted = $time 
		$test_data['time_alloted'] = $time;
		// time time used = 0
		$test_data['time_used'] = 0;
		// comma sperated values of question_ids which are answered
		$test_data['answered_questions'] = "";
		// comma sperated values of answers which are answered
		$test_data['answered_answers'] = "";
		// data to be returned to the frontend
		$data['question_ids'] = json_encode($test_data['question_ids']);
		
		$test_data['question_ids'] = implode(",",$test_data['question_ids']);
		$test_data['right_options'] = implode(",",$test_data['right_options']);

		$test_data['updated_at'] = date('Y-m-d h-m-s');
		// echo "<pre>";
		// var_dump($test_data);
		// die();
		$query = $this->db->insert('tests', $test_data);

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