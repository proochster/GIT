<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form_model extends CI_Model {
		
 // Cars --BEGIN--
		
	public function getAll_cars() {
		$query = $this->db->query("SELECT car, listprice, fueltype, enginecc, co2, benefit, fuel, total, registration FROM cars ORDER BY registration;");
		
		return $query->result();
	}
	
	public function insertValues_cars() {
		
		$data = array(		
			'car' => $this->input->post('car'),
			'listprice' => $this->input->post('listprice'),
			'fueltype' => $this->input->post('fueltype'),
			'enginecc' => $this->input->post('enginecc'),
			'co2' => $this->input->post('co2'),
			'benefit' => $this->input->post('benefit'),
			'fuel' => $this->input->post('fuel'),
			'total' => $this->input->post('total'),
			'registration' => $this->input->post('registration')	
		);
		
		$this->db->insert('cars', $data);		
	}
	
 // Cars --END--
 
 // Users --BEGIN--
	
	public function insertValues_users() {
		
		$data = array(		
			'username' => $this->input->post('user'),
			'password' => $this->input->post('pass'),
			'name' => $this->input->post('name'),
			'surname' => $this->input->post('surname')	
		);
		
		$this->db->insert('users', $data);
		
	}

 // Users --END--	
 
 // Car Assign --BEGIN--
 
 	public function getCarRegistration() {
 		
 		$getFormRegistration = $this->input->post('registration');
 		return $getFormRegistration;
 		
 	}
 
 	public function getCarBenefit() {
 		
		$registration = $this->form_model->getCarRegistration();
		$yearpercentage = $this->form_model->dateRange();
		
 		$this->db->select('benefit');
		$this->db->where('registration', $registration);
		$query = $this->db->get('cars');
		
		$row = $query->row();
		$getBenefit = $row->benefit;
		
		$actualbenefit = $getBenefit * $yearpercentage;
		
		return $actualbenefit;
		
 	}
	
	public function getCarFuelBenefit() {
 		
		$registration = $this->form_model->getCarRegistration();
		$yearpercentage = $this->form_model->dateRange();
		
 		$this->db->select('fuel');
		$this->db->where('registration', $registration);
		$query = $this->db->get('cars');
		
		$row = $query->row();
		$getFuelBenefit = $row->fuel;
		
		$actualFuelBenefit = $getFuelBenefit * $yearpercentage;
		
		return $actualFuelBenefit;
		
 	}
	
	public function getTotalBenefit() {
 		
		$registration = $this->form_model->getCarRegistration();
		$yearpercentage = $this->form_model->dateRange();
		
 		$this->db->select('total');
		$this->db->where('registration', $registration);
		$query = $this->db->get('cars');
		
		$row = $query->row();
		$getTotalBenefit = $row->total;
		
		$actualTotalBenefit = $getTotalBenefit * $yearpercentage;
		
		return $actualTotalBenefit;
		
 	}
	
	public function dateRange() {
		
		$fromdate = $this->input->post('datefrom');
 		$todate = $this->input->post('dateto');
		
		$datediff = abs(strtotime($fromdate) - strtotime($todate));
		$howmanydays = floor($datediff/(60*60*24));
		
		// Calculate the percentage of the year that the datediff is
		
		$thepercentage = $howmanydays / 365;
		
		return $thepercentage;
		
		
		
	}
	
	public function insertValues_carassign() {
			
		$username = $this->input->post('user');
		
	 	$this->db->select('name, surname');
		$this->db->where('username', $username);
		$query = $this->db->get('users');
		
		$row = $query->row();
		$name = $row->name;
		$surname = $row->surname;
		
		$carReg = $this->form_model->getCarRegistration();
		$carBenefit = $this->form_model->getCarBenefit();
		$carFuelBenefit = $this->form_model->getCarFuelBenefit();
		$carTotaBenefit = $this->form_model->getTotalBenefit();
		
		$fromdate = $this->input->post('datefrom');
 		$todate = $this->input->post('dateto');
		
		// Reformat the date for the db

		$datefromconv = date('Y-m-d',strtotime($fromdate));
		$datetoconv = date('Y-m-d',strtotime($todate));
		
		$data = array(		
			'username' => $username,
			'name' => $name,
			'surname' => $surname,
			'carreg' => $carReg,
			'fromdate' => $datefromconv,
			'todate' => $datetoconv,
			'calcbenefit' => round($carBenefit,0),
			'calcfuel' => round($carFuelBenefit,0),
			'calctotal' => round($carTotaBenefit,0)
		);
		
		$this->db->insert('carassign', $data);
		
	}

// --- Html form functions for Car Assign
 
 	public function getUser() {
 		
		$this->db->select('username, name, surname')->order_by('username', 'asc');
		$query = $this->db->get('users');
				
		return $query->result();
 		
 	}
 
 	public function getReg() {
		
		$this->db->select('*');
		$query = $this->db->get('cars');
				
		return $query->result();
	}
	
	public function getRegOnly() {
		
		$this->db->select('registration');
		$query = $this->db->get('cars');
				
		return $query->result();
	}

// Car Assign --END--
 
// Tax By Car --BEGIN--

	public function getCar() {
		$query = $this->db->query("SELECT car, listprice, co2, benefit, fuel, total, registration, ROUND(total*0.2,0) AS two, ROUND(total*0.4,0) as four FROM cars ORDER BY total ASC;");
		
		return $query->result();
	}
	
	public function getExpensiveCar() {
			
		$query = $this->db->query("SELECT *, ROUND(total*0.2,0) AS two, ROUND(total*0.4,0) as four FROM cars ORDER BY total DESC LIMIT 3");
		
		return $query->result();
	}
	
	public function getCheapestCar() {
			
		$query = $this->db->query("SELECT *, ROUND(total*0.2,0) AS two, ROUND(total*0.4,0) as four FROM cars ORDER BY total ASC LIMIT 3");
		
		return $query->result();
	}

// Tax By Car --END--

// Select Form --BEGIN--

	public function userSelect() {
 		
		$this->db->select('username')->order_by('username', 'asc');
		$query = $this->db->get('users');
				
		return $query->result();
 		
 	}
	
	public function getSelectedUser() {
 		
 		$getSelectedUser = $this->input->post('user');
 		return $getSelectedUser;
 		
 	}
	
	public function getDateFrom() {
		$getDateFrom = $this->input->post('datefrom');
		$datefromconv = date('Y-m-d',strtotime($getDateFrom));
		
		return $datefromconv;
	}
	
	public function getDateTo() {
		$getDateTo = $this->input->post('dateto');
		$datetoconv = date('Y-m-d',strtotime($getDateTo));
		
		return $datetoconv;
	}
	
	public function getInputDateFrom() {
		$getDateFrom = $this->input->post('datefrom');
		
		return $getDateFrom;
	}
	
	public function getInputDateTo() {
		$getDateTo = $this->input->post('dateto');
		 
		 return $getDateTo;
	}
	
	public function getUserCarsForPeriod() {
		
		
		$selecteduser = $this->form_model->getSelectedUser();
		$queryselecteduser = ("'".$selecteduser."'");
		
		$datefrom = $this->form_model->getDateFrom();
		$querydatefrom = ("'".$datefrom."'");
		
		$dateto =  $this->form_model->getDateTo();
		$querydateto = ("'".$dateto."'");
		
		$query = $this->db->query('
									SELECT * FROM carassign
									WHERE `username`='.$queryselecteduser.'
									AND `fromdate` >= '.$querydatefrom.'
									AND `fromdate` <= '.$querydateto.'
									UNION
									SELECT * FROM carassign
									WHERE `username`='.$queryselecteduser.'
									AND `todate` >= '.$querydatefrom.'
									AND `todate` <= '.$querydateto.'
									'	
									);
		
		
		
		return $query->result();
		
	}
	
	public function getUserCarsBenefitTotalsForPeriod() {
		
		$selecteduser = $this->form_model->getSelectedUser();
		$queryselecteduser = ("'".$selecteduser."'");
		
		$datefrom = $this->form_model->getDateFrom();
		$querydatefrom = ("'".$datefrom."'");
		
		$dateto =  $this->form_model->getDateTo();
		$querydateto = ("'".$dateto."'");
		
//		$this->db->select('SUM(calctotal) as total, SUM(calctotal)*0.2 AS two, SUM(calctotal)*0.4 as four');
//		$this->db->where('fromdate >=', $datefrom);
//		$this->db->where('fromdate <=', $dateto);
//		$this->db->where('todate >=', $datefrom);
//		$this->db->where('todate <=', $dateto);
//		$this->db->where('username', $selecteduser);
		
		
		$query = $this->db->query('
									SELECT SUM(calctotal) as total, ROUND(SUM(calctotal)*0.2,0) AS two, ROUND(SUM(calctotal)*0.4,0) as four
									FROM (	
									
									SELECT calctotal FROM carassign
									WHERE `username`='.$queryselecteduser.'
									AND `fromdate` >= '.$querydatefrom.'
									AND `fromdate` <= '.$querydateto.'
									
									UNION
									
									SELECT calctotal FROM carassign
									WHERE `username`='.$queryselecteduser.'
									AND `todate` >= '.$querydatefrom.'
									AND `todate` <= '.$querydateto.'
									) as t1'	
									);
		
		
		
//		$query = $this->db->get('carassign');
				
		return $query->result();
		
	}
	
	public function getYear() {
		$getDateFrom = $this->input->post('datefrom');
		$theyear = date('Y',strtotime($getDateFrom));
		
		return $theyear;
	}
	
	public function getUserCarsBetween15and31Jan() {
		
		$selecteduser = $this->form_model->getSelectedUser();
		$queryselecteduser = ("'".$selecteduser."'");
		
		$theyear = $this->form_model->getYear();
		
		$fifteenthjan = ($theyear.'-01-15');
		$queryfifteenthjan = ("'".$fifteenthjan."'");
		
		$thirtyfirstjan  = ($theyear.'-01-31');
		$querythirtyfirstjan = ("'".$thirtyfirstjan."'");
		
		$query = $this->db->query('
									SELECT * FROM carassign
									WHERE `username`='.$queryselecteduser.'
									AND `fromdate` >= '.$queryfifteenthjan.'
									AND `fromdate` <= '.$querythirtyfirstjan.'
									UNION
									SELECT * FROM carassign
									WHERE `username`='.$queryselecteduser.'
									AND `todate` >= '.$queryfifteenthjan.'
									AND `todate` <= '.$querythirtyfirstjan.'
									ORDER BY fromdate'	
									);
		
				
		return $query->result();
		
	}
	
	public function getUserCarsInfo15to31Jan() {
				
		$selecteduser = $this->form_model->getSelectedUser();
		$queryselecteduser = ("'".$selecteduser."'");
		
		$theyear = $this->form_model->getYear();
		
		$fifteenthjan = ($theyear.'-01-15');
		$queryfifteenthjan = ("'".$fifteenthjan."'");
		
		$thirtyfirstjan  = ($theyear.'-01-31');
		$querythirtyfirstjan = ("'".$thirtyfirstjan."'");
		
		$query = $this->db->query('
									select carassign.carreg, cars.car, cars.listprice, cars.co2, cars.benefit, cars.fuel, cars.total, ROUND(cars.total*0.2,0) AS two, ROUND(cars.total*0.4,0) as four FROM bikdemo.carassign left join bikdemo.cars on bikdemo.carassign.carreg=bikdemo.cars.registration
									WHERE `username`='.$queryselecteduser.'
									AND `fromdate` >= '.$queryfifteenthjan.'
									AND `fromdate` <= '.$querythirtyfirstjan.'
									UNION
									select carassign.carreg, cars.car, cars.listprice, cars.co2, cars.benefit, cars.fuel, cars.total, ROUND(cars.total*0.2,0) AS two, ROUND(cars.total*0.4,0) as four FROM bikdemo.carassign left join bikdemo.cars on bikdemo.carassign.carreg=bikdemo.cars.registration
									WHERE `username`='.$queryselecteduser.'
									AND `todate` >= '.$queryfifteenthjan.'
									AND `todate` <= '.$querythirtyfirstjan.''	
									);

		return $query->result();
		
		
		
	}


	public function getUserCarsBenefitTotalsOnlyForPeriod() {
		
		$selecteduser = $this->form_model->getSelectedUser();
		$datefrom = $this->form_model->getDateFrom();
		$dateto =  $this->form_model->getDateTo(); 
		
		$this->db->select('SUM(calctotal) as total');
		$this->db->where('fromdate >=', $datefrom);
		$this->db->where('fromdate <=', $dateto);
		$this->db->where('todate >=', $datefrom);
		$this->db->where('todate <=', $dateto);
		$this->db->where('username', $selecteduser);
		
		$query = $this->db->get('carassign');
				
		return $query->result();
		
	}

	public function getCheapestUserCarsInfo15to31Jan() {
				
		$selecteduser = $this->form_model->getSelectedUser();
		$queryselecteduser = ("'".$selecteduser."'");
		
		$theyear = $this->form_model->getYear();
		
		$fifteenthjan = ($theyear.'-01-15');
		$queryfifteenthjan = ("'".$fifteenthjan."'");
		
		$thirtyfirstjan  = ($theyear.'-01-31');
		$querythirtyfirstjan = ("'".$thirtyfirstjan."'");
		
		$query = $this->db->query('
									select min(mintax) as mintax from
									(select MIN(cars.total) as mintax FROM bikdemo.carassign left join bikdemo.cars on bikdemo.carassign.carreg=bikdemo.cars.registration
									WHERE `username`='.$queryselecteduser.'
									AND `fromdate` >= '.$queryfifteenthjan.'
									AND `fromdate` <= '.$querythirtyfirstjan.'
									UNION
									select MIN(cars.total) as mintax FROM bikdemo.carassign left join bikdemo.cars on bikdemo.carassign.carreg=bikdemo.cars.registration
									WHERE `username`='.$queryselecteduser.'
									AND `todate` >= '.$queryfifteenthjan.'
									AND `todate` <= '.$querythirtyfirstjan.') as t1'	
									);

		return $query->result();
		
	}





		
	
//	public function getPaymentmthd() {
// 		
//		$this->db->select('paymentmthd')->order_by('paymentmthd', 'asc');
//		$query = $this->db->get('paymentmthd_tb');
//				
//		return $query->result();
// 		
// 	}
  

// Select Form --END--

// Suppliers --BEGIN--
 
 	public function insertValues_supplier() {
		
		$data = array(		
			'supname' => $this->input->post('supname')
		);
		
		$this->db->insert('supplier_tb', $data);
		
	}
	
// ----
 
 	public function getSupplier() {
 		
		$this->db->select('supname')->order_by('supname', 'asc');
		$query = $this->db->get('supplier_tb');
				
		return $query->result();
 		
 	}
 

// Suppliers --END--

// paymentmthd --BEGIN--
 
 	public function insertValues_paymentmthd() {
		
		$data = array(		
			'paymentmthd' => $this->input->post('paymentmthd')
		);
		
		$this->db->insert('paymentmthd_tb', $data);
		
	}
	
	public function getPaymentmthd() {
 		
		$this->db->select('paymentmthd')->order_by('paymentmthd', 'asc');
		$query = $this->db->get('paymentmthd_tb');
				
		return $query->result();
 		
 	}
  
// paymentmthd --END--

// Period --BEGIN--
 
 	public function insertValues_period() {
		
		$data = array(		
			'period' => $this->input->post('period')
		);
		
		$this->db->insert('period_tb', $data);
		
	}
	
	public function getPeriod() {
 		
		$this->db->select('period');
		$query = $this->db->get('period_tb');
				
		return $query->result();
 		
 	}
  
 // Period --END--
 
 // Narrative --BEGIN--
 
 	public function insertValues_narrative() {
		
		$data = array(		
			'narrative' => $this->input->post('narrative')
		);
		
		$this->db->insert('narrative_tb', $data);
		
	}
	
	public function getNarrative() {
 		
		$this->db->select('narrative')->order_by('narrative', 'asc');
		$query = $this->db->get('narrative_tb');
				
		return $query->result();
 		
 	}
  
 // Narrative --END--
 
 

 // Mileage --BEGIN--	

	public function insertValues_mileage() {
		
		$dateconv = $this->form_model->dateconv();
		
		$return = $this->input->post('return');
		$milage = $this->input->post('mileage');
		
		if( $return == "YES" ){
			$mileage = $milage*2;
		}
		
		$data = array(
			'date' => $dateconv,
			'reg' => $this->input->post('reg'),
			'from' => $this->input->post('from'),
			'to' => $this->input->post('to'),
			'client' => $this->input->post('client'),
			'return' => $this->input->post('return'),
			'mileage' => $mileage
		);
		
		$this->db->insert('mileage', $data);
	}
	
	public function getAll_mileage() {
		$query = $this->db->query("SELECT *, DATE_FORMAT(date, '%d-%m-%Y') as `date` FROM bikdemo.mileage LEFT JOIN bikdemo.cars ON bikdemo.mileage.`reg` = bikdemo.cars.`registration` ORDER BY bikdemo.mileage.`autoid` DESC LIMIT 1");
		
		return $query->result();
	}
	
//	public function getReg() {
//		
//		$this->db->select('reg');
//		$query = $this->db->get('cars_tb');
//				
//		return $query->result();
//	}
	
 // Mileage --END--
 
// Purchases --BEGIN--

	public function dateconv() {
		$getDate = $this->input->post('date');
		$dateconv = date('Y-m-d',strtotime($getDate));
		
		return $dateconv;
	}


  	public function insertValues_purchases() {
  		
		$dateconv = $this->form_model->dateconv();
		
		$vatpercent = $this->input->post('vatpercent');
		$gross = $this->input->post('gross');
		
		if ( $vatpercent == "20"){
			$vat = $gross - ($gross - ($gross / 6));
			$net = $gross - ($gross / 6);
		} elseif ( $vatpercent == "0"){
			$vat = 0;
			$net = $gross; 
		} else {
			echo "Something went terribly wrong";
		}
		 		
		$data = array(
			'supplier' => $this->input->post('supplier'),
			'invoiceref' => $this->input->post('invoiceref'),
			'date' => $dateconv,
			'period' => $this->input->post('period'),
			'net' => round($net,2),
			'vat' => round($vat,2),
			'gross' => $this->input->post('gross'),
			'vatpercent' => $this->input->post('vatpercent'),
			'narrative' => $this->input->post('narrative'),
			'paidby' => $this->input->post('paymentmthd')
		);
	
		$this->db->insert('expenses', $data);	
 		
 	}	
	
	public function getAll_purchases() {
		$query = $this->db->query("SELECT *, DATE_FORMAT(date, '%d-%m-%Y') as `date` FROM bikdemo.expenses ORDER BY bikdemo.expenses.`date` DESC LIMIT 1;");
		
		return $query->result();
	}
	
// fuel paymentmthd --BEGIN--
 
 	public function insertValues_fuelpaymentmthd() {
		
		$data = array(		
			'fuelpaymentmthd' => $this->input->post('fuelpaymentmthd')
		);
		
		$this->db->insert('fuelpaymentmthd_tb', $data);
		
	}
	
	public function getfuelPaymentmthd() {
 		
		$this->db->select('fuelpaymentmthd')->order_by('fuelpaymentmthd', 'asc');
		$query = $this->db->get('fuelpaymentmthd_tb');
				
		return $query->result();
 		
 	}
  
// fuel paymentmthd --END--
	
// Fuel Suppliers --BEGIN--
 
 	public function insertValues_fuelsupplier() {
		
		$data = array(		
			'fuelsupname' => $this->input->post('fuelsupname')
		);
		
		$this->db->insert('fuelsupplier_tb', $data);
		
	}
	
// ----
 
 	public function getfuelSupplier() {
 		
		$this->db->select('fuelsupname')->order_by('fuelsupname', 'asc');
		$query = $this->db->get('fuelsupplier_tb');
				
		return $query->result();
 		
 	}
 

// Fuel Suppliers --END--	
	
// Get Fuel Suppliers --START--

	public function insertValues_fuelpurchases() {
  		
		$dateconv = $this->form_model->dateconv();
		
		$vatpercent = 20;
		$gross = $this->input->post('gross');
		
		if ( $vatpercent == "20"){
			$vat = $gross - ($gross - ($gross / 6));
			$net = $gross - ($gross / 6);
		} elseif ( $vatpercent == "0"){
			$vat = 0;
			$net = $gross; 
		} else {
			echo "Something went terribly wrong";
		}
		 		
		$data = array(
			'fuelsupplier' => $this->input->post('fuelsupplier'),
			'date' => $dateconv,
			'period' => $this->input->post('period'),
			'net' => round($net,2),
			'vat' => round($vat,2),
			'gross' => $this->input->post('gross'),
			'paidby' => $this->input->post('fuelpaymentmthd')
		);
	
		$this->db->insert('fuelexpenses', $data);	
 		
 	}

	public function getAll_fuelpurchases() {
		$query = $this->db->query("SELECT *, DATE_FORMAT(date, '%d-%m-%Y') as `date` FROM bikdemo.fuelexpenses ORDER BY bikdemo.fuelexpenses.`autoid` DESC LIMIT 1;");
		
		return $query->result();
	}
	
// Get Fuel Suppliers --END--		
 
}
			
