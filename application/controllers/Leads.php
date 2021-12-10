<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Leads extends OGC_Controller {

	// public $algo;	


	public function __construct()
	{		
		parent::__construct();

		$this->load->model('Leads_Model');

		$this->load->library('fpdf');
		$this->load->library('phpexcel');		

		$this->auth();			

	}


	public function index()
	{	

		$datas= $this->Leads_Model->getLeads();		


		$this->title = 'Leads';

		$data = array();	
		$data['navbar_admin'] = $this->load->view('templates/admin/inc/navbar',$this->userInfo,TRUE);
		$data['sidebar_admin'] = $this->load->view('templates/admin/inc/sidebar',$this->userInfo,TRUE);
		$data['title'] = $this->title;

		$data['data'] = $datas;		

		$this->load_view_admin('templates/admin/leads/index',$data);

	}

	public function leadsTable()
	{

		$data= $this->Leads_Model->getLeads();		

		// $this->output
		// ->set_content_type('application/json')
		// ->set_output(json_encode($data));

		echo json_encode($data);	
	}


	public function register(){

		$this->form_validation->set_rules('first_name', 'first_name', 'required|max_length[30]');
		$this->form_validation->set_rules('last_name', 'last_name', 'required|max_length[30]');

		if ($this->form_validation->run() == FALSE){


			$data=array(		
				'msg_first_name' => form_error('first_name'),
				'msg_last_name' => form_error('last_name')						
			);

			echo json_encode($data);			
			

			// echo json_encode("All fields required");			
			
		}else{

			$first_name = $_POST["first_name"];
			$last_name = $_POST["last_name"];
			$company = $_POST["company"];
			$email = $_POST["email"];
			$street = $_POST["street"];
			$country = $_POST["country"];
			$city = $_POST["city"];
			$state = $_POST["state"];
			$postal_code = $_POST["postal_code"];
			$title = $_POST["title"];
			$phone = $_POST["phone"];
			$cell_phone = $_POST["cell_phone"];
			$source = $_POST["source"];
			$sector = $_POST["sector"];
			$income = $_POST["income"];
			$fax = $_POST["fax"];
			$website = $_POST["website"];
			$state_client = $_POST["state_client"];
			$quantity_worker = $_POST["quantity_worker"];
			$qualification = $_POST["qualification"];		
			$id_skype = $_POST["id_skype"];
			$id_twitter = $_POST["id_twitter"];
			$description = $_POST["description"];

			if ($company == null) {
				# code...
				$company = '---';
			}

			if ($street == null) {
				# code...
				$street = '---';
			}

			if ($country == null) {
				# code...
				$country = 1;
			}

			if ($city == null) {
				# code...
				$city = '---';
			}

			if ($state == null) {
				# code...
				$state = 1;
			}

			if ($postal_code == null) {
				# code...
				$postal_code = '---';
			}

			if ($title == null) {
				# code...
				$title = '---';
			}

			if ($phone == null) {
				# code...
				$phone = '---';
			}

			if ($cell_phone == null) {
				# code...
				$cell_phone = '---';
			}

			if ($source == null) {
				# code...
				$source = 1;
			}

			if ($sector == null) {
				# code...
				$sector = 1;
			}

			if ($income == null) {
				# code...
				$income = '---';
			}

			if ($fax == null) {
				# code...
				$fax = '---';
			}

			if ($website == null) {
				# code...
				$website = '---';
			}

			if ($state_client == null) {
				# code...
				$state_client = 1;
			}

			if ($quantity_worker == null) {
				# code...
				$quantity_worker = '---';
			}

			if ($qualification == null) {
				# code...
				$qualification = 1;
			}

			if ($id_skype == null) {
				# code...
				$id_skype = '---';
			}

			if ($id_twitter == null) {
				# code...
				$id_twitter = '---';
			}

			if ($description == null) {
				# code...
				$description = '---';
			}


			$tUsers=array(			
				'img' => 'user.png',
				'first_name' => $first_name,
				'last_name' => $last_name,
				'company' => $company,			
				'email' => $email,
				'street' => $street,				
				'id_country' => $country,
				'city' => $city,
				'id_state' => $state,
				'postal_code' => $postal_code,
				'title' => $title,
				'phone' => $phone,
				'cell_phone' => $cell_phone,
				'id_source' => $source,
				'id_sector' => $sector,
				'income' => $income,
				'fax' => $fax,
				'website' => $website,
				'id_state_client' => $state_client,
				'quantity_worker' => $quantity_worker,
				'id_qualification' => $qualification,
				'id_skype' => $id_skype,
				'id_twitter' => $id_twitter,			
				'description' => $description	  	
				// 'created_at' => date('d-m-Y'),
				// 'updated_at' => date('d-m-Y'),
				// 'last_access' => date('H-i-s')
			);



		// $this->session->set_flashdata('personRegister', 'Persona registrada');

			$this->db->insert('leads', $tUsers);

		// redirect(base_url("users"));

		// $this->email->from('contacto@jonathancastrodev.com', 'Jonathan Castro');
		// $this->email->to($email);      
		// $this->email->subject('Bienvenido a esta aplicacion de prueba');

		// $this->email->message('Tu usuario'.$email.'y contraseña son:'.$password);

		// $this->email->send();

			$data=array(		
				'msg_success' => "Register success",
				
			);

			echo json_encode($data);	

			// echo json_encode("Register success");

		}


	}



	public function deleteLead($id)
	{
		// $this->session->set_flashdata('deleteLead', 'Lead Delete');

			// $this->Leads_Model->deleteLeads($id);


		$this->Leads_Model->deleteLeads($id);

		// json_encode($this->session->flashdata('deleteLead'));


		// $this->output
		// ->set_content_type('application/json')
		// ->set_output($this->session->flashdata('deleteLead'));

		// $this->output
		// ->set_content_type('application/json')
		// ->set_output("Lead delete");

		$data=array(		
			'leadd' => "delete"

		);

		echo json_encode($data);

		// redirect(base_url("leads"));

	}


	public function view($id)
	{

		// echo json_encode($id);

		$datas= $this->Leads_Model->getLeadsById($id);		


		$this->title = 'Show';

		$data = array();	
		$data['navbar_admin'] = $this->load->view('templates/admin/inc/navbar',$this->userInfo,TRUE);
		$data['sidebar_admin'] = $this->load->view('templates/admin/inc/sidebar',$this->userInfo,TRUE);
		$data['title'] = $this->title;

		$data['data'] = $datas;		

		$this->load_view_admin('templates/admin/leads/show',$data);
		

	}

	public function promo($id)
	{

		$datas= $this->Leads_Model->getLeadsById($id);	

		// echo $datas;

		// print_r($datas);





		$this->email->from('contacto@opengiscrm.com', 'Test app');
		$this->email->to($datas['email']);      
		$this->email->subject('OpenGisCRM Tutorial And Courses');

		$this->email->message('visit https://opengiscrm.com/');

		$this->email->send();

		$this->session->set_flashdata('promo', 'Invoice send');

		redirect(base_url("leads"));
	}


	public function leadsPdf()
	{ 

		$data = $this->Leads_Model->getLeads();

		// $totalUsers = $this->Api_Model->countUsers();

		$this->pdf = new fpdf();

		$this->pdf->AddPage();

		$this->pdf->AliasNbPages(); 

		$this->pdf->SetTitle("Report Leads");
		$this->pdf->SetLeftMargin(15);
		$this->pdf->SetRightMargin(15);
		$this->pdf->SetFillColor(200,200,200); 

		$this->pdf->SetFont('Arial', 'B', 9);

		//establesco el ancho de las filas
		$this->pdf->SetWidths(array(15,15,15,25,15,15,15,15,15,15,30));  

		// $this->pdf->Cell(15,5,'First name','TBL',0,'L','1');
		// $this->pdf->Cell(15,5,'Last name','TB',0,'L','1');
		// $this->pdf->Cell(15,5,'Country','TB',0,'L','1');
		// $this->pdf->Cell(15,5,'State','TB',0,'L','1');
		// $this->pdf->Cell(15,5,'Role','TB',0,'L','1');
		// $this->pdf->Cell(15,5,'Created at','TB',0,'L','1');
		// $this->pdf->Cell(15,5,'First name','TBL',0,'L','1');
		// $this->pdf->Cell(15,5,'Last name','TB',0,'L','1');
		// $this->pdf->Cell(15,5,'Country','TB',0,'L','1');
		// $this->pdf->Cell(15,5,'State','TB',0,'L','1');
		// $this->pdf->Cell(15,5,'fin','TB',0,'L','1');
		$this->pdf->Row(array('f name','l name','company','email','street','state','city','country','zipcode','phone','description'));

		// $this->pdf->Ln(7);

		foreach ($data as $datos) {

			// $this->pdf->Cell(40,5,$datos['first_name'],'B',0,'L',0);
			// $this->pdf->Cell(40,5,$datos['last_name'],'B',0,'L',0);
			// $this->pdf->Cell(40,5,$datos['country'],'B',0,'L',0);
			// $this->pdf->Cell(40,5,$datos['state'],'B',0,'L',0);
			$this->pdf->Row(array($datos['first_name'],$datos['last_name'],$datos['company'],$datos['email'],$datos['street'],$datos['state'],$datos['city'],$datos['country'],$datos['postal_code'],$datos['phone'],$datos['description']));
			// $this->pdf->Cell(40,5,$datos['role'],'B',0,'L',0);
			// $this->pdf->Cell(40,5,$datos['created_at'],'B',0,'L',0);        


			// $this->pdf->Ln(5);
		}

		$this->pdf->Cell(40,5,'Total By Date:','TB',0,'L','1');
		$this->pdf->Cell(40,5, date("d-m-y"),'B',0,'L',0);
		$this->pdf->Ln(5);
		// $this->pdf->Cell(40,5,'Total Users:','TB',0,'L','1');
		// $this->pdf->Cell(40,5, $totalUsers['totalUsers']->totalusers,'B',0,'L',0);


		// $this->pdf->Output("Report leads.pdf", 'D');
		$this->pdf->Output("Report leads.pdf", 'I');


	}


}
