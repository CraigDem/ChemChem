<?php 

	class Chemistry extends CI_Controller 
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
		
		function beer_lambert_input()
		{
			$this->load->helper('breadcrumb');
			$this->load->view('assets/header');
			$this->load->view('chemistry/beer_lambert/beer_lambert_input');
			$this->load->view('assets/footer');
		}
		
		function beer_lambert()
		{
			$result->absorbance = $this->input->get_post('absorbance');
			$result->extinction = $this->input->get_post('extinction');
			$result->concentration = $this->input->get_post('concentration');
			$result->path_length = $this->input->get_post('path_length');
			
			switch ($this->input->get_post('optionsSide'))
				{
					case "absorb": 
						$result->absorbance_sol = $result->extinction * $result->concentration * $result->path_length;
						$result->extinction_sol = $result->extinction;
						$result->concentration_sol = $result->concentration;
						$result->path_length_sol = $result->path_length;
						
						$result->unknown = "Absorbance";
						$result->solution = $result->absorbance_sol;
						$result->formula = "α = ε * c * ℓ";
						break;
					case "extinct": 
						$result->absorbance_sol = $result->absorbance;
						$result->extinction_sol = $result->absorbance / ($result->concentration * $result->path_length);
						$result->concentration_sol = $result->concentration;
						$result->path_length_sol = $result->path_length;
						
						$result->unknown = "Extinction Coefficient";
						$result->solution = $result->extinction_sol . " dm3 cm1" ;
						$result->formula = "ε = α / (c * ℓ)";
						break;
					case "conc": 
						$result->absorbance_sol = $result->absorbance;
						$result->extinction_sol = $result->extinction;
						$result->concentration_sol = $result->absorbance / ($result->extinction * $result->path_length);
						$result->path_length_sol = $result->path_length;
						
						$result->unknown = "Concentration";
						$result->solution = $result->concentration_sol . " mol-1 dm3";
						$result->formula = "c = α / (ε * ℓ)";
						break;
					case "path": 
						$result->absorbance_sol = $result->absorbance;
						$result->extinction_sol = $result->extinction;
						$result->concentration_sol = $result->concentration;
						$result->path_length_sol = $result->absorbance / ($result->concentration * $result->extinction);
						
						$result->unknown = "Path Length";
						$result->solution = $result->path_length_sol . " cm";
						$result->formula = "ℓ = α / (c * ε)";
						break;
				}
					
			$this->load->view('assets/header');
			$this->load->view('chemistry/beer_lambert/beer_lambert_output', array('result' => $result));
			$this->load->view('assets/footer'); 
		}
        
	}
	
/* End of file stocker.php */
/* Location: ../application/controllers */