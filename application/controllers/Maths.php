<?php 

	class Maths extends CI_Controller 
	{

		function __construct() 
		{
			
			parent::__construct();
			{}
		}

		///////////////////////////////
		//Pythagoras	
		
		function index()
		{
			$this->load->view('assets/header');
			$this->load->view('maths/masthead');
			$this->load->view('assets/footer');
		}					   
		
		function pythagoras_input()
		{
			$this->load->helper('breadcrumb');
			$this->load->view('assets/header');
			$this->load->view('maths/pythagoras/pythagoras_input');
			$this->load->view('assets/footer');
		}
		
		function pythagoras()
		{
			$result->adjacent = $this->input->get_post('adjacent');
			$result->opposite = $this->input->get_post('opposite');
			$result->hypotenuse = $this->input->get_post('hypotenuse');
			
			switch ($this->input->get_post('optionsSide'))
				{
					case "hyp": 
						$result->solution = sqrt(($result->adjacent * $result->adjacent)+($result->opposite * $result->opposite));
						$result->adjacent_sol = $result->adjacent;
						$result->opposite_sol = $result->opposite;
						$result->hypotenuse_sol = $result->solution;
						
						break;
					case "opp": 
						$result->solution = sqrt(($result->hypotenuse * $result->hypotenuse)-($result->adjacent * $result->adjacent));
						$result->adjacent_sol = $result->adjacent;
						$result->opposite_sol = $result->solution;
						$result->hypotenuse_sol = $result->hypotenuse;
						break;
					case "adj": 
						$result->solution = sqrt(($result->hypotenuse * $result->hypotenuse)-($result->opposite * $result->opposite));
						$result->adjacent_sol = $result->solution;
						$result->opposite_sol = $result->opposite;
						$result->hypotenuse_sol = $result->hypotenuse;
						break;
				}
					
			$this->load->view('assets/header');
			$this->load->view('maths/pythagoras/pythagoras_output', array('result' => $result));
			$this->load->view('assets/footer'); 
		}
        
	}
	
/* End of file stocker.php */
/* Location: ../application/controllers */