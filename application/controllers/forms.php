<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forms extends CI_Controller {
	
	 function __construct()
	{
   		parent::__construct();
		$this->auth = new stdClass;
		$this->load->library('flexi_auth');
		$this->data = null;
        
                // Note: This is only included to create base urls for purposes of this demo only and are not necessarily considered as 'Best practice'.
        $this->load->vars('base_url', 'http://backup-pc.dyndns-server.com/stage/qba/');
        $this->load->vars('includes_dir', 'http://backup-pc.dyndns-server.com/stage/qba/includes/');
        $this->load->vars('current_url', $this->uri->uri_to_assoc(1));
	}
    
    
	
	public function index()
	{
		if ($this->flexi_auth->is_logged_in())
   			
   		{
 		$session_data = $this->session->userdata('logged_in_via_password');
 		$ldata['username'] = $session_data['user_identifier'];
            $this->load->view('head',$ldata);
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);		
			$this->load->view('home_content',$ldata);
			$this->load->view('footer',$ldata);
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('auth_lite/index', 'refresh');
		   	}
			
	}

	public function logout()
	{
		$this->session->sess_destroy();
		    redirect('auth_lite/index', 'refresh');
		   	}
	

/* HMRC Guidelines */

	public function hmrc()
	{
		if ($this->flexi_auth->is_logged_in())
   			
   		{
 		$session_data = $this->session->userdata('logged_in_via_password');
 		$ldata['username'] = $session_data['user_identifier'];
            $this->load->view('head',$ldata);
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);		
			$this->load->view('hmrc_content',$ldata);
			$this->load->view('footer',$ldata);
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('auth_lite/index', 'refresh');
		   	}
			
	}


/* Averaging */

	public function averaging()
	{
		if ($this->flexi_auth->is_logged_in())
   			
   		{
 		$session_data = $this->session->userdata('logged_in_via_password');
 		$ldata['username'] = $session_data['user_identifier'];
            $this->load->view('head',$ldata);
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);		
			$this->load->view('averaging_content',$ldata);
			$this->load->view('footer',$ldata);
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('auth_lite/index', 'refresh');
		   	}
			
	}

/* View Company Car Log By User */

	public function viewccbyuser()
	{
		if ($this->flexi_auth->is_logged_in())
   			
   		{
 		$session_data = $this->session->userdata('logged_in_via_password');
 		$ldata['username'] = $session_data['user_identifier'];
            $this->load->view('head',$ldata);
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);		
			$this->load->view('viewccbyuser_content',$ldata);
			$this->load->view('footer',$ldata);
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('auth_lite/index', 'refresh');
		   	}
			
	}

/* Carbik */

	public function carbik()
	{
		if ($this->flexi_auth->is_logged_in())
   			
   		{
 		$session_data = $this->session->userdata('logged_in_via_password');
 		$ldata['username'] = $session_data['user_identifier'];
            $this->load->view('head',$ldata);
			$this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);		
			$this->load->view('carbik_content',$ldata);
			$this->load->view('footer',$ldata);
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('auth_lite/index', 'refresh');
		   	}
			
	}


/* Privilage Test */

    public function privilagetest()
    {
        if ($this->flexi_auth->is_logged_in())
            
        {
   /*     $session_data = $this->session->userdata('logged_in_via_password');
        $ldata['username'] = $session_data['user_identifier']; */
            $this->load->view('head');
            $this->load->view('header');
            $this->load->view('nav');        
            $this->load->view("privilagetest_content");
            $this->load->view('footer');
            }
            else
            {
            //If no session, redirect to login page
            redirect('auth_lite/index', 'refresh');
            }
            
    }	
	
	

/* ------------------------------------------------------------------------------------
 * -----------------------------------ADD CAR------------------------------------------
 * ------------------------------------------------------------------------------------ */
	
	public function cars()
	{
		
		if ($this->flexi_auth->is_logged_in())
   			
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
			$this->load->view('head',$ldata);
            $this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);
			$data['results'] = $this->form_model->getAll_cars();					
			$this->load->view("cars_content", $data);
			$this->load->view('footer',$ldata);
		}
		else
		{
			$this->form_model->insertValues_cars();		
		
			$this->load->view('head',$ldata);
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
            redirect('auth_lite/index', 'refresh');
		   	}
	}

/* ------------------------------------------------------------------------------------
 * ----------------------------------ADD USER------------------------------------------
 * ------------------------------------------------------------------------------------ */	

	public function users()
	{
		
		if ($this->flexi_auth->is_logged_in())
   			
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
			$this->load->view('head',$ldata);
            $this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);					
			$this->load->view("users_content");
			$this->load->view('footer',$ldata);
		}
		else
		{
			$this->form_model->insertValues_users();	
			
			$this->load->view('head',$ldata);
            $this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);	
			$this->load->view('users_content');
			$this->load->view('footer',$ldata);
		}
		
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('auth_lite/index', 'refresh');
		   	}
		
	}
	

/* ------------------------------------------------------------------------------------
 * ---------------------------------CAR ASSIGN TO USER---------------------------------
 * ------------------------------------------------------------------------------------ */


		public function carassign()
			{
				
			if ($this->flexi_auth->is_logged_in())
   			
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
					$this->load->view('head',$ldata);
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
					
					$this->load->view('head',$ldata);
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
		    redirect('auth_lite/index', 'refresh');
		   	}
				
			}


/* ------------------------------------------------------------------------------------
 * -----------------------------------TAX BY CAR---------------------------------------
 * ------------------------------------------------------------------------------------ */


		public function taxbycar()
			{
		if ($this->flexi_auth->is_logged_in())
   			
   		{
   			
 		$session_data = $this->session->userdata('logged_in');
 		$ldata['username'] = $session_data['username'];
			$this->load->model("form_model");
			$this->load->view('head',$ldata);
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
		    redirect('auth_lite/index', 'refresh');
		   	}
		
	}


/* ------------------------------------------------------------------------------------
 * -----------------------SELECTFORM (Company Car Log By User)-------------------------
 * ------------------------------------------------------------------------------------ */


		public function selectform()
	{
	if ($this->flexi_auth->is_logged_in())
		
	{
   		$this->load->model("form_model");
		$selecteduser = $this->form_model->getSelectedUser();
		if ($selecteduser == "XYZ123XYZJHGJHGASYUTUYTQUYTKSJHGKJAHSKJDH") {	

 		$session_data = $this->session->userdata('logged_in');
 		$ldata['username'] = $session_data['username'];
			$this->load->model("form_model");
			$this->load->view('head',$ldata);
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
			$this->load->view('head',$ldata);
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
		    redirect('auth_lite/index', 'refresh');
		   	}
			
	}
	

/* ------------------------------------------------------------------------------------
 * ------------------------------------NARRATIVE---------------------------------------
 * ------------------------------------------------------------------------------------ */


		public function narrative()
			{
				
				if ($this->flexi_auth->is_logged_in())
   			
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
					$this->load->view('head',$ldata);
                    $this->load->view('header',$ldata);
					$this->load->view('nav',$ldata);					
					$this->load->view('narrative_content');
					$this->load->view('footer',$ldata);
				}
				else
				{
					$this->form_model->insertValues_narrative();	
					
					$this->load->view('head',$ldata);
                    $this->load->view('header',$ldata);
					$this->load->view('nav',$ldata);	
					$this->load->view('narrative_content');
					$this->load->view('footer',$ldata);
				}
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('auth_lite/index', 'refresh');
		   	}
				
			}


/* ------------------------------------------------------------------------------------
 * -------------------------------------PERIOD-----------------------------------------
 * ------------------------------------------------------------------------------------ */

		public function period()
		{
			if ($this->flexi_auth->is_logged_in())
   			
   				{
				$session_data = $this->session->userdata('logged_in');
 				$ldata['username'] = $session_data['username'];
				$this->load->model("form_model");
				$this->load->library('form_validation');
				
				$config = array(
		               array(
		                     'field'   => 'period', 
		                     'label'   => 'Period', 
		                     'rules'   => 'required'
		                  )
		            );
		
				$this->form_validation->set_rules($config);
				
				
				if ($this->form_validation->run() == FALSE)
				{
					$this->load->view('head',$ldata);
                    $this->load->view('header',$ldata);
					$this->load->view('nav',$ldata);					
					$this->load->view('period_content');
					$this->load->view('footer',$ldata);
				}
				else
				{
					$this->form_model->insertValues_period();	
					
					$this->load->view('head',$ldata);
                    $this->load->view('header',$ldata);
					$this->load->view('nav',$ldata);	
					$this->load->view('period_content');
					$this->load->view('footer',$ldata);
				}
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('auth_lite/index', 'refresh');
		   	}

			}


/* ------------------------------------------------------------------------------------
 * ------------------------------------MILEAGE-----------------------------------------
 * ------------------------------------------------------------------------------------ */
	
	public function mileage()
	{
		if ($this->flexi_auth->is_logged_in())
   			
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
			$this->load->view('head',$ldata);
            $this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);
			$data['registration'] = $this->form_model->getRegOnly();	
			$data['results'] = $this->form_model->getAll_mileage();						
			$this->load->view("mileage_content", $data);
			$this->load->view('footer',$ldata);
		}
		else
		{
			$this->form_model->insertValues_mileage();	
					
			$this->load->view('head',$ldata);
            $this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);
			$data['registration'] = $this->form_model->getRegOnly();	
			$data['results'] = $this->form_model->getAll_mileage();			
			$this->load->view('mileage_content', $data);
			$this->load->view('footer',$ldata);
		}
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('auth_lite/index', 'refresh');
		   	}

	
	}



/* ------------------------------------------------------------------------------------
 * ----------------------------------PURCHASES-----------------------------------------
 * ------------------------------------------------------------------------------------ */


	public function purchases()
	{
		
	if ($this->flexi_auth->is_logged_in())
   			
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
			$this->load->view('head',$ldata);
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
					
			$this->load->view('head',$ldata);
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
		    redirect('auth_lite/index', 'refresh');
		   	}
			
	}

/* ------------------------------------------------------------------------------------
 * ----------------------------------PAYMENT METHOD------------------------------------
 * ------------------------------------------------------------------------------------ */

		public function paymentmthd()
			{
				
			if ($this->flexi_auth->is_logged_in())
   			
   				{
				$session_data = $this->session->userdata('logged_in');
 				$ldata['username'] = $session_data['username'];
				$this->load->model("form_model");
				$this->load->library('form_validation');
				
				$config = array(
		               array(
		                     'field'   => 'paymentmthd', 
		                     'label'   => 'Payment Method', 
		                     'rules'   => 'required'
		                  )
		            );
		
				$this->form_validation->set_rules($config);
				
				
				if ($this->form_validation->run() == FALSE)
				{
					$this->load->view('head',$ldata);
                    $this->load->view('header',$ldata);
					$this->load->view('nav',$ldata);					
					$this->load->view('paymentmthd_content');
					$this->load->view('footer',$ldata);
				}
				else
				{
					$this->form_model->insertValues_paymentmthd();	
					
					$this->load->view('head',$ldata);
                    $this->load->view('header',$ldata);
					$this->load->view('nav',$ldata);	
					$this->load->view('paymentmthd_content');
					$this->load->view('footer',$ldata);
				}
				}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('auth_lite/index', 'refresh');
		   	}
	}


/* ------------------------------------------------------------------------------------
 * ----------------------------------SUPPLIER------------------------------------------
 * ------------------------------------------------------------------------------------ */

		public function supplier()
			{
				
			if ($this->flexi_auth->is_logged_in())
   			
   				{
   				$session_data = $this->session->userdata('logged_in');
 				$ldata['username'] = $session_data['username'];
				$this->load->model("form_model");
				$this->load->library('form_validation');
				
				$config = array(
		               array(
		                     'field'   => 'supname', 
		                     'label'   => 'Supplier Name', 
		                     'rules'   => 'required'
		                  )
		            );
		
				$this->form_validation->set_rules($config);
				
				
				if ($this->form_validation->run() == FALSE)
				{
					$this->load->view('head',$ldata);
                    $this->load->view('header',$ldata);
					$this->load->view('nav',$ldata);					
					$this->load->view('supplier_content');
					$this->load->view('footer',$ldata);
				}
				else
				{
					$this->form_model->insertValues_supplier();	
					
					$this->load->view('head',$ldata);
                    $this->load->view('header',$ldata);
					$this->load->view('nav',$ldata);	
					$this->load->view('supplier_content');
					$this->load->view('footer',$ldata);
				}
				
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('auth_lite/index', 'refresh');
		   	}
				
			}



/* ------------------------------------------------------------------------------------
 * ----------------------------------EXPENSES------------------------------------------
 * ------------------------------------------------------------------------------------ */

public function expenses()
	{
		
		if ($this->flexi_auth->is_logged_in())
   			
   		{
		$session_data = $this->session->userdata('logged_in');
 		$ldata['username'] = $session_data['username'];
		$this->load->model("form_model");
		$this->load->library('form_validation');
		
		$config = array(
               array(
                     'field'   => 'date1', 
                     'label'   => 'Date', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'details1', 
                     'label'   => 'Details', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'client1', 
                     'label'   => 'Client', 
                     'rules'   => 'required'
                  ),   
               array(
                     'field'   => 'total1', 
                     'label'   => 'Total', 
                     'rules'   => 'required'
                  )
            );

		$this->form_validation->set_rules($config);
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('head',$ldata);
            $this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);
			$data['results'] = $this->form_model->getAll_expenses();					
			$this->load->view("expenses_content", $data);
			$this->load->view('footer',$ldata);
		}
		else
		{
			$this->form_model->insertValues_expenses();		
		
			$this->load->view('head',$ldata);
            $this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);
			$data['results'] = $this->form_model->getAll_expenses();		
			$this->load->view("expenses_content", $data);
			$this->load->view('footer',$ldata);
		}
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('auth_lite/index', 'refresh');
		   	}
	}


/* ------------------------------------------------------------------------------------
 * --------------------------------FUEL PURCHASES--------------------------------------
 * ------------------------------------------------------------------------------------ */


	public function fuelpurchases()
	{
		
	if ($this->flexi_auth->is_logged_in())
   			
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
                     'field'   => 'gross', 
                     'label'   => 'Gross', 
                     'rules'   => 'required'
                  )
            );

		$this->form_validation->set_rules($config);
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('head',$ldata);
            $this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);
			$data['fuelsupplier'] = $this->form_model->getfuelSupplier();	
			$data['period'] = $this->form_model->getPeriod();	
			$data['fuelpaymentmthd'] = $this->form_model->getfuelPaymentmthd();
			$data['results'] = $this->form_model->getAll_fuelpurchases();							
			$this->load->view("fuelpurchases_content", $data);
			$this->load->view('footer',$ldata);
		}
		else
		{
			$this->form_model->insertValues_fuelpurchases();	
					
			$this->load->view('head',$ldata);
            $this->load->view('header',$ldata);
			$this->load->view('nav',$ldata);
			$data['fuelsupplier'] = $this->form_model->getfuelSupplier();	
			$data['period'] = $this->form_model->getPeriod();
			$data['fuelpaymentmthd'] = $this->form_model->getfuelPaymentmthd();
			$data['results'] = $this->form_model->getAll_fuelpurchases();							
			$this->load->view("fuelpurchases_content", $data);
			$this->load->view('footer',$ldata);
		}
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('auth_lite/index', 'refresh');
		   	}
			
	}

/* -------------------------------FUEL PAYMENT METHOD---------------------------------- */

		public function fuelpaymentmthd()
			{
				
			if ($this->flexi_auth->is_logged_in())
   			
   				{
				$session_data = $this->session->userdata('logged_in');
 				$ldata['username'] = $session_data['username'];
				$this->load->model("form_model");
				$this->load->library('form_validation');
				
				$config = array(
		               array(
		                     'field'   => 'fuelpaymentmthd', 
		                     'label'   => 'Payment Method', 
		                     'rules'   => 'required'
		                  )
		            );
		
				$this->form_validation->set_rules($config);
				
				
				if ($this->form_validation->run() == FALSE)
				{
					$this->load->view('head',$ldata);
                    $this->load->view('header',$ldata);
					$this->load->view('nav',$ldata);					
					$this->load->view('fuelpaymentmthd_content');
					$this->load->view('footer',$ldata);
				}
				else
				{
					$this->form_model->insertValues_fuelpaymentmthd();	
					
					$this->load->view('head',$ldata);
                    $this->load->view('header',$ldata);
					$this->load->view('nav',$ldata);	
					$this->load->view('fuelpaymentmthd_content');
					$this->load->view('footer',$ldata);
				}
				}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('auth_lite/index', 'refresh');
		   	}
	}

/* ------------------------------FUEL SUPPLIER----------------------------------------- */

		public function fuelsupplier()
			{
				
			if ($this->flexi_auth->is_logged_in())
   			
   				{
   				$session_data = $this->session->userdata('logged_in');
 				$ldata['username'] = $session_data['username'];
				$this->load->model("form_model");
				$this->load->library('form_validation');
				
				$config = array(
		               array(
		                     'field'   => 'fuelsupname', 
		                     'label'   => 'Supplier Name', 
		                     'rules'   => 'required'
		                  )
		            );
		
				$this->form_validation->set_rules($config);
				
				
				if ($this->form_validation->run() == FALSE)
				{
					$this->load->view('head',$ldata);
                    $this->load->view('header',$ldata);
					$this->load->view('nav',$ldata);					
					$this->load->view('fuelsupplier_content');
					$this->load->view('footer',$ldata);
				}
				else
				{
					$this->form_model->insertValues_fuelsupplier();	
					
					$this->load->view('head',$ldata);
                    $this->load->view('header',$ldata);
					$this->load->view('nav',$ldata);	
					$this->load->view('fuelsupplier_content');
					$this->load->view('footer',$ldata);
				}
				
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('auth_lite/index', 'refresh');
		   	}
				
			}

    /* ------------------------------Image Upload----------------------------------------- */

		public function imageupload()
			{
				
			if ($this->flexi_auth->is_logged_in())
   			
   				{
   				$session_data = $this->session->userdata('logged_in');
 				$ldata['username'] = $session_data['username'];
                            
                
                $this->load->view('head',$ldata);
                $this->load->view('header',$ldata);
                $this->load->view('nav',$ldata);
                $this->load->view('image_upload', array('error' => ' ' ));
                $this->load->view('footer',$ldata);
				
			}
   			else
   			{
		    //If no session, redirect to login page
		    redirect('auth_lite/index', 'refresh');
		   	}
				
			}
    
    
    		public function imageuploaded()
			{
				
			if ($this->flexi_auth->is_logged_in())
   			
   				{
   				$session_data = $this->session->userdata('logged_in');
                
 				$ldata['username'] = $session_data['username'];
                
                $config['upload_path'] = 'http://backup-pc.dyndns-server.com/stage/qba/img/uploads/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']	= '1000';              
		      
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                    if ( ! $this->upload->do_upload())
                    {
                        $error = array('error' => $this->upload->display_errors());
                        
                        $this->load->view('head',$ldata);
                        $this->load->view('header',$ldata);
                        $this->load->view('nav',$ldata);
                        $this->load->view('image_upload', $error);
                        $this->load->view('footer',$ldata);
                    }
                    else
                    {
                        $data = array('upload_data' => $this->upload->data());
                        
                        $this->load->view('head',$ldata);
                        $this->load->view('header',$ldata);
                        $this->load->view('nav',$ldata);
                        $this->load->view('image_upload', $data);
                        $this->load->view('footer',$ldata);
                    }
 
                }
                else
                {
                //If no session, redirect to login page
                redirect('auth_lite/index', 'refresh');
                }
				
			}
    
    


/* --- THE LAST BRACKET --- */
  
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */