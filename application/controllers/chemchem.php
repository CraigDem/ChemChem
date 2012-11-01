<?php 

	class ChemChem extends CI_Controller 
	{

		function __construct() 
		{
			
			parent::__construct();
			{}
		}

		///////////////////////////////
		//Main Page							   
		
		function index()
		{
			$this->load->view('assets/header');
			$this->load->view('masthead/masthead');
			$this->load->view('assets/footer');
		}
        
	}
	
/* End of file stocker.php */
/* Location: ../application/controllers */