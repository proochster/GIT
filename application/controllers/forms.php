<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forms extends CI_Controller {
	
	 function __construct()
	{
   		parent::__construct();
	}
	
	public function index()
	{
		if($this->session->userdata('logged_in'))
   			
   		{
 		$session_data = $this->session->userdata('logged_in');
 		$ldata['username'] = $session_data['username'];
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);		
			$this->load->view("home_content",$ldata);
			$this->load->view('footer',$ldata);
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('login', 'refresh');
		   	}
			
	}

	public function logout()
	{
		$this->session->sess_destroy();
   		redirect('login', 'refresh');
	}
	
	
//		public function dashboard()
//	{
//		if($this->session->userdata('logged_in'))
//  			
//   		{
// 		$session_data = $this->session->userdata('logged_in');
// 		$ldata['username'] = $session_data['username'];
//			$this->load->view('header',$ldata);
//			$this->load->view('nav',$ldata);		
//			$this->load->view("dashboard_content",$ldata);
//			$this->load->view('footer',$ldata);
//			}
//  			else
//   			{
		    //If no session, redirect to login page
//		    redirect('login', 'refresh');
//		   	}
			
//	}
	
	
// ---- CARS BEGIN ----
	
	public function cars()
	{
		
		if($this->session->userdata('logged_in'))
   			
   		{
		$session_data = $this->session->userdata('logged_in');
 		$ldata['username'] = $session_data['username'];
		$this->load->model("form_model");
		$this->load->library('form_validation');
		
		$config = array(
               array(
                     'field'   => 'car', 
                     'label'   => 'Model', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'listprice', 
                     'label'   => 'List Price', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'co2', 
                     'label'   => 'Co2', 
                     'rules'   => 'required'
                  ),   
               array(
                     'field'   => 'benefit', 
                     'label'   => 'Benefit', 
                     'rules'   => 'required'
                  ),   
               array(
                     'field'   => 'fuel', 
                     'label'   => 'Fuel', 
                     'rules'   => 'required'
                  ),   
               array(
                     'field'   => 'total', 
                     'label'   => 'Total', 
                     'rules'   => 'required'
                  ),   
               array(
                     'field'   => 'registration', 
                     'label'   => 'Registration', 
                     'rules'   => 'required'
                  )
            );

		$this->form_validation->set_rules($config);
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);
			$data['results'] = $this->form_model->getAll_cars();					
			$this->load->view("cars_content", $data);
			$this->load->view('footer',$ldata);
		}
		else
		{
			$this->form_model->insertValues_cars();		
		
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);
			$data['results'] = $this->form_model->getAll_cars();		
			$this->load->view("cars_content", $data);
			$this->load->view('footer',$ldata);
		}
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('login', 'refresh');
		   	}
	}

// ---- CARS END ----

// ---- USERS BEGIN ----	

	public function users()
	{
		
		if($this->session->userdata('logged_in'))
   			
   		{
		$session_data = $this->session->userdata('logged_in');
 		$ldata['username'] = $session_data['username'];
		$this->load->model("form_model");
		$this->load->library('form_validation');
		
		$config = array(
               array(
                     'field'   => 'user', 
                     'label'   => 'Username', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'pass', 
                     'label'   => 'Password', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'name', 
                     'label'   => 'Name', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'surname', 
                     'label'   => 'Surname', 
                     'rules'   => 'required'
                  )
            );

		$this->form_validation->set_rules($config);
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);					
			$this->load->view("users_content");
			$this->load->view('footer',$ldata);
		}
		else
		{
			$this->form_model->insertValues_users();	
			
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);	
			$this->load->view('users_content');
			$this->load->view('footer',$ldata);
		}
		
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('login', 'refresh');
		   	}
		
	}
	
// --USERS END--

// --CAR ASSIGN BEGIN--

		public function carassign()
			{
				
			if($this->session->userdata('logged_in'))
   			
   				{
   				$session_data = $this->session->userdata('logged_in');
 				$ldata['username'] = $session_data['username'];
				$this->load->model("form_model");
				$this->load->library('form_validation');
				
				$config = array(
		             array(
                     'field'   => 'datefrom', 
                     'label'   => 'Date From', 
                     'rules'   => 'required'
                		  ),
               		array(
                     'field'   => 'dateto', 
                     'label'   => 'Date To', 
                     'rules'   => 'required'
           		       	)
		            );
		
				$this->form_validation->set_rules($config);
				
				
				if ($this->form_validation->run() == FALSE)
				{
					$this->load->view('header',$ldata);
					$this->load->view('nav',$ldata);
					$data['registration'] = $this->form_model->getReg();	
					$data['user'] = $this->form_model->getUser();						
					$this->load->view('carassign_content', $data);
					$this->load->view('footer',$ldata);
				}
				else
				{
					$this->form_model->insertValues_carassign();	
					
					$this->load->view('header',$ldata);
					$this->load->view('nav',$ldata);
					$data['registration'] = $this->form_model->getReg();	
					$data['user'] = $this->form_model->getUser();	
					$this->load->view('carassign_content', $data);
					$this->load->view('footer',$ldata);
				}
				
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('login', 'refresh');
		   	}
				
			}

// --CAR ASSIGN END--

// --TAX BY CAR BEGIN--

		public function taxbycar()
			{
		if($this->session->userdata('logged_in'))
   			
   		{
   			
 		$session_data = $this->session->userdata('logged_in');
 		$ldata['username'] = $session_data['username'];
			$this->load->model("form_model");
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);	
			$data['results'] = $this->form_model->getCar();
			$data['expensive'] = $this->form_model->getExpensiveCar();
			$data['cheap'] = $this->form_model->getCheapestCar();	
			$this->load->view("taxbycar_content",$data);
			$this->load->view('footer',$ldata);
		
		}
   		
	else

		{
	    //If no session, redirect to login page
	    redirect('login', 'refresh');
	   	}
		
	}
// --TAX BY CAR END--

// --SELECTFORM (Company Car Log By User) BEGIN--

		public function selectform()
	{
	if($this->session->userdata('logged_in'))
		
	{
   		$this->load->model("form_model");
		$selecteduser = $this->form_model->getSelectedUser();
		if ($selecteduser == "XYZ123XYZJHGJHGASYUTUYTQUYTKSJHGKJAHSKJDH") {	

 		$session_data = $this->session->userdata('logged_in');
 		$ldata['username'] = $session_data['username'];
			$this->load->model("form_model");
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);	
			$data['users'] = $this->form_model->userSelect();
			$this->load->view("select_content",$data);
			$this->load->view('footer',$ldata);

			}
		else 
			{

		$session_data = $this->session->userdata('logged_in');
 		$ldata['username'] = $session_data['username'];
			$this->load->model("form_model");
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);	
			$data['users'] = $this->form_model->userSelect();
			$data['carsforperiod'] = $this->form_model->getUserCarsForPeriod(); 
			$data['totals'] = $this->form_model->getUserCarsBenefitTotalsForPeriod();
			$data['january'] = $this->form_model->getUserCarsBetween15and31Jan();
			$data['carsinfo'] = $this->form_model->getUserCarsInfo15to31Jan();
			$data['totalforperiod'] = $this->form_model->getUserCarsBenefitTotalsOnlyForPeriod();
			$data['cheapestbycar'] = $this->form_model->getCheapestUserCarsInfo15to31Jan();
			$data['selecteduser'] = $this->form_model->getSelectedUser();
			$data['datefrom'] = $this->form_model->getInputDateFrom();
			$data['dateto'] = $this->form_model->getInputDateTo();
			$this->load->view("select_detail_content",$data);
			$this->load->view('footer',$ldata);
			}

	}
	
	else
		
	{
		
	//If no session, redirect to login page
	redirect('login', 'refresh');
	
	}
			
	}

// --SELECTFORM (Company Car Log By User) END--
	
// --NARRATIVE BEGIN--

		public function narrative()
			{
				
				if($this->session->userdata('logged_in'))
   			
   				{
   				$session_data = $this->session->userdata('logged_in');
 				$ldata['username'] = $session_data['username'];
				$this->load->model("form_model");
				$this->load->library('form_validation');
				
				$config = array(
		               array(
		                     'field'   => 'narrative', 
		                     'label'   => 'Narrative', 
		                     'rules'   => 'required'
		                  )
		            );
		
				$this->form_validation->set_rules($config);
				
				
				if ($this->form_validation->run() == FALSE)
				{
					$this->load->view('header',$ldata);
					$this->load->view('nav',$ldata);					
					$this->load->view('narrative_content');
					$this->load->view('footer',$ldata);
				}
				else
				{
					$this->form_model->insertValues_narrative();	
					
					$this->load->view('header',$ldata);
					$this->load->view('nav',$ldata);	
					$this->load->view('narrative_content');
					$this->load->view('footer',$ldata);
				}
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('login', 'refresh');
		   	}
				
			}

// --NARRATIVE END--
	
	
	public function customers()
	{
		
		if($this->session->userdata('logged_in'))
   			
   		{
   		$session_data = $this->session->userdata('logged_in');
 		$ldata['username'] = $session_data['username'];	
		$this->load->model("form_model");
		$this->load->library('form_validation');
		
		$config = array(
               array(
                     'field'   => 'fullname', 
                     'label'   => 'Full Name', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'business', 
                     'label'   => 'Business Name', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'address1', 
                     'label'   => 'Address', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'town', 
                     'label'   => 'Town', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'postcode', 
                     'label'   => 'Postcode', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'uniquecustcode', 
                     'label'   => 'Unique Customer Code', 
                     'rules'   => 'required'
                  )  
				
            );

		$this->form_validation->set_rules($config);
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);					
			$this->load->view('customers_content');
			$this->load->view('footer',$ldata);
		}
		else
		{
			$this->form_model->insertValues_customers();	
			
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);	
			$this->load->view('customers_content');
			$this->load->view('footer',$ldata);
		}
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('login', 'refresh');
		   	}
		
	}
	
	public function mileage()
	{
		if($this->session->userdata('logged_in'))
   			
   		{
		$session_data = $this->session->userdata('logged_in');
 		$ldata['username'] = $session_data['username'];
		$this->load->model("form_model");
		$this->load->library('form_validation');
		
		$config = array(
               array(
                     'field'   => 'date', 
                     'label'   => 'Date', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'from', 
                     'label'   => 'From', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'to', 
                     'label'   => 'To', 
                     'rules'   => 'required'
                  ),   
               array(
                     'field'   => 'client', 
                     'label'   => 'Client', 
                     'rules'   => 'required'
                  ),   
               array(
                     'field'   => 'mileage', 
                     'label'   => 'Mileage', 
                     'rules'   => 'required'
                  )
            );

		$this->form_validation->set_rules($config);
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);
			$data['registration'] = $this->form_model->getReg();	
			$data['results'] = $this->form_model->getAll_mileage();						
			$this->load->view("mileage_content", $data);
			$this->load->view('footer',$ldata);
		}
		else
		{
			$this->form_model->insertValues_mileage();	
					
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);
			$data['registration'] = $this->form_model->getReg();	
			$data['results'] = $this->form_model->getAll_mileage();			
			$this->load->view('mileage_content', $data);
			$this->load->view('footer',$ldata);
		}
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('login', 'refresh');
		   	}

	
	}

	public function invoice()
	{
		
		if($this->session->userdata('logged_in'))
   			
   		{
   		$session_data = $this->session->userdata('logged_in');
 		$ldata['username'] = $session_data['username'];
		$this->load->model("form_model");
		$this->load->library('form_validation');
		
		$config = array(
               array(
                     'field'   => 'description', 
                     'label'   => 'Description', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'rate', 
                     'label'   => 'Rate', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'quantity', 
                     'label'   => 'Quantity', 
                     'rules'   => 'required'
                  ),   
               array(
                     'field'   => 'net', 
                     'label'   => 'Net', 
                     'rules'   => 'required'
                  )
            );

		$this->form_validation->set_rules($config);
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);
		/*	$data['customer'] = $this->form_model->getCustomer();	
			$data['results'] = $this->form_model->getAll_invoice(); */						
			$this->load->view("invoice_content"/* , $data */);
			$this->load->view('footer',$ldata);
		}
		else
		{
			$this->form_model->insertValues_invoice();	
					
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);
		/*	$data['customer'] = $this->form_model->getCustomer();	
			$data['results'] = $this->form_model->getAll_invoice(); */			
			$this->load->view('invoice_content'/* , $data */);
			$this->load->view('footer',$ldata);
		}	
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('login', 'refresh');
		   	}
		
	}

// --INVOICE END--

// --PURCHASES START--


	public function purchases()
	{
		
	if($this->session->userdata('logged_in'))
   			
   		{
   		$session_data = $this->session->userdata('logged_in');
 		$ldata['username'] = $session_data['username'];
		$this->load->model("form_model");
		$this->load->library('form_validation');
		
		$config = array(
               array(
                     'field'   => 'invoiceref', 
                     'label'   => 'Invoice Reference', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'date', 
                     'label'   => 'Date', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'gross', 
                     'label'   => 'Gross', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'vatpercent', 
                     'label'   => 'Vat Rate', 
                     'rules'   => 'required'
                  )
            );

		$this->form_validation->set_rules($config);
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);
			$data['supplier'] = $this->form_model->getSupplier();	
			$data['period'] = $this->form_model->getPeriod();
			$data['narrative'] = $this->form_model->getNarrative();	
			$data['paymentmthd'] = $this->form_model->getPaymentmthd();
			$data['results'] = $this->form_model->getAll_purchases();							
			$this->load->view("purchases_content", $data);
			$this->load->view('footer',$ldata);
		}
		else
		{
			$this->form_model->insertValues_purchases();	
					
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);
			$data['supplier'] = $this->form_model->getSupplier();	
			$data['period'] = $this->form_model->getPeriod();
			$data['narrative'] = $this->form_model->getNarrative();	
			$data['paymentmthd'] = $this->form_model->getPaymentmthd();
			$data['results'] = $this->form_model->getAll_purchases();							
			$this->load->view("purchases_content", $data);
			$this->load->view('footer',$ldata);
		}
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('login', 'refresh');
		   	}
			
	}

// --PURCHASES END--

// --SUPPLIER FORM START--

public function supplier_content_detail()
	{
		
		if($this->session->userdata('logged_in'))
   			
   		{
   		$session_data = $this->session->userdata('logged_in');
 		$ldata['username'] = $session_data['username'];	
		$this->load->model("form_model");
		$this->load->library('form_validation');
		
		$config = array(
               array(
                     'field'   => 'fullname', 
                     'label'   => 'Full Name', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'business', 
                     'label'   => 'Business Name', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'address1', 
                     'label'   => 'Address', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'town', 
                     'label'   => 'Town', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'postcode', 
                     'label'   => 'Postcode', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'uniquecustcode', 
                     'label'   => 'Unique Customer Code', 
                     'rules'   => 'required'
                  )  
				
            );

		$this->form_validation->set_rules($config);
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);					
			$this->load->view('supplier_content_detail');
			$this->load->view('footer',$ldata);
		}
		else
		{
			$this->form_model->insertValues_customers();	
			
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);	
			$this->load->view('supplier_content_detail');
			$this->load->view('footer',$ldata);
		}
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('login', 'refresh');
		   	}
		
	}


public function customer_content_detail()
	{
		
		if($this->session->userdata('logged_in'))
   			
   		{
   		$session_data = $this->session->userdata('logged_in');
 		$ldata['username'] = $session_data['username'];	
		$this->load->model("form_model");
		$this->load->library('form_validation');
		
		$config = array(
               array(
                     'field'   => 'fullname', 
                     'label'   => 'Full Name', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'business', 
                     'label'   => 'Business Name', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'address1', 
                     'label'   => 'Address', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'town', 
                     'label'   => 'Town', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'postcode', 
                     'label'   => 'Postcode', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'uniquecustcode', 
                     'label'   => 'Unique Customer Code', 
                     'rules'   => 'required'
                  )  
				
            );

		$this->form_validation->set_rules($config);
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);					
			$this->load->view('customer_content_detail');
			$this->load->view('footer',$ldata);
		}
		else
		{
			$this->form_model->insertValues_customers();	
			
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);	
			$this->load->view('customer_content_detail');
			$this->load->view('footer',$ldata);
		}
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('login', 'refresh');
		   	}
		
	}

public function business_parameters()
	{
		
		if($this->session->userdata('logged_in'))
   			
   		{
   		$session_data = $this->session->userdata('logged_in');
 		$ldata['username'] = $session_data['username'];	
		$this->load->model("form_model");
		$this->load->library('form_validation');
		
		$config = array(
               array(
                     'field'   => 'fullname', 
                     'label'   => 'Full Name', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'business', 
                     'label'   => 'Business Name', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'address1', 
                     'label'   => 'Address', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'town', 
                     'label'   => 'Town', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'postcode', 
                     'label'   => 'Postcode', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'uniquecustcode', 
                     'label'   => 'Unique Customer Code', 
                     'rules'   => 'required'
                  )  
				
            );

		$this->form_validation->set_rules($config);
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);					
			$this->load->view('business_parameters');
			$this->load->view('footer',$ldata);
		}
		else
		{
			$this->form_model->insertValues_customers();	
			
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);	
			$this->load->view('business_parameters');
			$this->load->view('footer',$ldata);
		}
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('login', 'refresh');
		   	}
		
	}

// --JASPERSOFT BEGIN--


public function jaspersoft_content()
	{
		
		if($this->session->userdata('logged_in'))
   			
   		{
   		$session_data = $this->session->userdata('logged_in');
 		$ldata['username'] = $session_data['username'];
		$this->load->model("form_model");
		$this->load->library('form_validation');
		
		$config = array(
               array(
                     'field'   => 'description', 
                     'label'   => 'Description', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'rate', 
                     'label'   => 'Rate', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'quantity', 
                     'label'   => 'Quantity', 
                     'rules'   => 'required'
                  ),   
               array(
                     'field'   => 'net', 
                     'label'   => 'Net', 
                     'rules'   => 'required'
                  )
            );

		$this->form_validation->set_rules($config);
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);
		/*	$data['customer'] = $this->form_model->getCustomer();	
			$data['results'] = $this->form_model->getAll_invoice(); */						
			$this->load->view("jaspersoft_content"/* , $data */);
			$this->load->view('footer',$ldata);
		}
		else
		{
			$this->form_model->insertValues_invoice();	
					
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);
		/*	$data['customer'] = $this->form_model->getCustomer();	
			$data['results'] = $this->form_model->getAll_invoice(); */			
			$this->load->view('jaspersoft_content'/* , $data */);
			$this->load->view('footer',$ldata);
		}	
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('login', 'refresh');
		   	}
		
	}

// --JASPERSOFT END--

// --TABLES BEGIN--


public function tables_content()
	{
		
		if($this->session->userdata('logged_in'))
   			
   		{
   		$session_data = $this->session->userdata('logged_in');
 		$ldata['username'] = $session_data['username'];
		$this->load->model("form_model");
		$this->load->library('form_validation');
		
		$config = array(
               array(
                     'field'   => 'description', 
                     'label'   => 'Description', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'rate', 
                     'label'   => 'Rate', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'quantity', 
                     'label'   => 'Quantity', 
                     'rules'   => 'required'
                  ),   
               array(
                     'field'   => 'net', 
                     'label'   => 'Net', 
                     'rules'   => 'required'
                  )
            );

		$this->form_validation->set_rules($config);
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);
		/*	$data['customer'] = $this->form_model->getCustomer();	
			$data['results'] = $this->form_model->getAll_invoice(); */						
			$this->load->view("tables_content"/* , $data */);
			$this->load->view('footer',$ldata);
		}
		else
		{
			$this->form_model->insertValues_invoice();	
					
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);
		/*	$data['customer'] = $this->form_model->getCustomer();	
			$data['results'] = $this->form_model->getAll_invoice(); */			
			$this->load->view('tables_content'/* , $data */);
			$this->load->view('footer',$ldata);
		}	
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('login', 'refresh');
		   	}
		
	}

// --TABLES END--



}




/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */