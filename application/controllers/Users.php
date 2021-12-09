<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Users extends OGC_Controller {

	// public $algo;	


	public function __construct()
	{		
		parent::__construct();

		$this->auth();			

	}


	public function index()
	{

		// $id = 1;

		// echo $id;

		$datas= $this->Users_Model->getUsers();

		

		// $_POST["id"] = 0;

		// $_POST["id"] = $id;

		// $_GET["id"];


		// if (isset($_GET)) {
		// 	# code...

		// 	$_GET["id"] = 0;

		// 	print_r("esta vacio".$_GET["id"]);
		// }else{

		// 	print_r("no esta vacio".$_GET["id"]);

		// }

		// print_r(isset($_GET));

		// print_r(isset($_GET["id"]));

		// print_r(is_null($_GET["id"]));

		// print_r(empty($_GET["id"]));

		// if (empty($_GET["id"])) {
		// 	# code...
		// 	print_r("estas vacio");

		// }elseif (empty($_GET["id"]) !== null) {
		// 	# code...
		// 	print_r("no esta vacio");
		// }



		// switch (isset($_GET)) {
		// 	case 'id':
		// 		# code...
		// 	print_r("no esta vacio".$_GET["id"]);

		// 		break;

		// 	default:
		// 		# code...
		// 		break;
		// }



		// print_r($_POST);
		// print_r($_GET);
		// $datass = null;


		// if ( isset($_GET)) {

		// 	print_r($_GET);
		// 	# code...

		// 	// $id = $_POST["id"];

		// 	// $datass= $this->Users_Model->getUsersById($_POST["id"]);

		// 	// $datass= $this->Users_Model->getUsersById($_GET);
		// 	// $data['datass'] = $datass;
		// }

		// $id = $_POST['id'];

		// $datass = null;

		// $datass= $this->Users_Model->getUsersById($id);

		// $this->load_layout('login', array('hola' => 'Hola Mundo!'));
		$this->title = 'Users';

		$data = array();	
		$data['navbar_admin'] = $this->load->view('admin/inc/navbar',$this->userInfo,TRUE);
		$data['sidebar_admin'] = $this->load->view('admin/inc/sidebar',$this->userInfo,TRUE);
		$data['title'] = $this->title;

		$data['data'] = $datas;

		// $data['datass'] = $datass;


		// if ($this->prue()) {
		// 	# code...

		// 	$data['datass'];

		// }else{

			// $data['datass'] = $this->prue();
		// }

		// print_r($_GET);


		// if ($_GET === true) {
		// 	# code...
		// 	print_r($_GET);
		// }

		$this->load_layout_back('admin/users',$data);


		// echo json_encode($_POST["id"]);

		 // echo json_encode($id);

	}

	public function usersTable()
	{

		$data= $this->Users_Model->getUsers();

		// echo json_encode($data);

		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data));
	}


	      // probando datatable
        //  public function cargar()
        // {
          
        //   $datos = $this->Usuarios_Model->seleccionarUsuarios();
        //   $draw=$this->input->get('draw');
        //   // esto es util para obetener varia data el array
        //   $outpot = array(
        //     'draw' =>$draw ,
        //     'datos' =>$datos 
        //      );
        //   echo json_encode( $outpot );
        // }
// este ejemplo de datables funciona
      // public function cargar()
      //   {        
      //     // Datatables Variables
      //     $draw = intval($this->input->get("draw"));
      //     $start = intval($this->input->get("start"));
      //     $length = intval($this->input->get("length"));
      //     $books = $this->Usuarios_Model->pruebaTabla();
      //     $data = array();
      //     foreach($books->result() as $r) {
      //          $data[] = array(
      //               $r->id,
      //               $r->nombre,
      //               $r->apellido,
      //               $r->email ,
      //               $r->role
      //          );
      //     }
      //     $output = array(
      //          "draw" => $draw,
      //            "recordsTotal" => $books->num_rows(),
      //            "recordsFiltered" => $books->num_rows(),
      //            "data" => $data
      //       );
      //     echo json_encode($output);
      //     exit();
      //   }
  // esta version de datable funciona
        public function testeando()
        {        
          // Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));
          $users =  $this->Users_Model->getUsers();
          $data = array();
          foreach($users->result() as $r) {
               $data[] = array(
                    $r->id_user,
                    $r->first_name,
                    $r->last_name,
                    $r->email ,
                    $r->role
               );
          }
          $output = array(
               "draw" => $draw,
                 "recordsTotal" => $users->num_rows(),
                 "recordsFiltered" => $users->num_rows(),
                 "data" => $data
            );
          echo json_encode($output);
          exit();
        }


	public function prue()
	{

		$id = $_GET["id"];



		$datass= $this->Users_Model->getUsersById($id);

		// return $datass;

		// echo json_encode($datass);

		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($datass));


	}


	public function idTest()
	{

		$datass= $this->Users_Model->getUsersById($_POST["id"]);

	}

	public function register(){

		$this->form_validation->set_rules('first_name', 'first_name', 'required|max_length[30]');
		$this->form_validation->set_rules('last_name', 'last_name', 'required|max_length[30]');
		$this->form_validation->set_rules('email', 'email', 'required|max_length[35]');
		$this->form_validation->set_rules('password', 'password', 'required|max_length[25]');
		$this->form_validation->set_rules('country', 'country', 'required|max_length[100]');
		$this->form_validation->set_rules('state', 'state', 'required|max_length[100]');
		$this->form_validation->set_rules('role', 'role', 'required|max_length[100]');
		
		 

		if ($this->form_validation->run() == FALSE){
			
			
			// $this->index();

			// echo json_encode("Todos los campos son requeridos");

			echo json_encode("All fields required");			
			
		}else{

		$first_name = $_POST["first_name"];
		$last_name = $_POST["last_name"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$country = $_POST["country"];
		$state = $_POST["state"];
		$role = $_POST["role"];


		$tUsers=array(			
			'img' => 'user.png',
			'first_name' => $first_name,
			'last_name' => $last_name,			
			'email' => $email,
			'password' => password_hash($password,PASSWORD_BCRYPT),
			'id_country' => $country,
			'id_state' => $state,
			'id_role' => $role,	  	
			'created_at' => date('d-m-Y'),
			'updated_at' => date('d-m-Y'),
			'last_access' => date('H-i-s')
		);

		

		// $this->session->set_flashdata('personRegister', 'Persona registrada');

		$this->db->insert('users', $tUsers);

		// redirect(base_url("users"));

		// $this->email->from('contacto@jonathancastrodev.com', 'Jonathan Castro');
		// $this->email->to($email);      
		// $this->email->subject('Bienvenido a esta aplicacion de prueba');

		// $this->email->message('Tu usuario'.$email.'y contraseña son:'.$password);

		// $this->email->send();

		echo json_encode("Register success");

	}


	}

	//respaldo
	// public function register(){

	// 	$first_name = $_POST["first_name"];
	// 	$last_name = $_POST["last_name"];
	// 	$email = $_POST["email"];
	// 	$password = $_POST["password"];
	// 	$country = $_POST["country"];
	// 	$state = $_POST["state"];
	// 	$role = $_POST["role"];

	// 	// echo $first_name;



	// 	$tUsers=array(			
	// 		'img' => 'user.png',
	// 		'first_name' => $first_name,
	// 		'last_name' => $last_name,			
	// 		'email' => $email,
	// 		'password' => password_hash($password,PASSWORD_BCRYPT),
	// 		'id_country' => $country,
	// 		'id_state' => $state,
	// 		'id_role' => $role,	  	
	// 		'created_at' => date('d-m-Y'),
	// 		'updated_at' => date('d-m-Y'),
	// 		'last_access' => date('H-i-s')
	// 	);


		
	// 	// $tUsers=array(			
	// 	// 	'img' => 'user.png',
	// 	// 	'first_name' => $this->input->post('first_name'),
	// 	// 	'last_name' => $this->input->post('last_name'),			
	// 	// 	'email' => $this->input->post('email'),
	// 	// 	'password' =>  $password = password_hash($this->input->post('password'),PASSWORD_BCRYPT),
	// 	// 	'id_country' => $this->input->post('country'),
	// 	// 	'id_state' => $this->input->post('state'),
	// 	// 	'id_role' => $this->input->post('role'),	  	
	// 	// 	'created_at' => date('d-m-Y'),
	// 	// 	'updated_at' => date('d-m-Y'),
	// 	// 	'last_access' => date('H-i-s')
	// 	// );


	// 	// $tUsers=array(			
	// 	// 	'img' => 'user.png',
	// 	// 	'first_name' => 'Jonathan',
	// 	// 	'last_name' => 'Castro',			
	// 	// 	'email' => 'castrov_30@hotmail.com',
	// 	// 	'password' =>  $password = password_hash('Admin123',PASSWORD_BCRYPT),
	// 	// 	'id_country' => 1,
	// 	// 	'id_state' => 1,
	// 	// 	'id_role' => 1,	  	
	// 	// 	'created_at' => $date = date('d-m-Y'),
	// 	// 	'updated_at' => $dateu = date('d-m-Y'),
	// 	// 	'last_access' => $datel = date('H-i-s')
	// 	// );


	// 	// $tUsers=array(			
	// 	// 	'img' => 'user.png',
	// 	// 	'first_name' => 'Maria',
	// 	// 	'last_name' => 'Rodriguez',			
	// 	// 	'email' => 'raforin@hotmail.com',
	// 	// 	'password' =>  $password = password_hash('User123',PASSWORD_BCRYPT),
	// 	// 	'id_country' => 2,
	// 	// 	'id_state' => 2,
	// 	// 	'id_role' => 2,	  	
	// 	// 	'created_at' => $date = date('Y-m-d'),
	// 	// 	'updated_at' => $dateu = date('Y-m-d'),
	// 	// 	'last_access' => $datel = date('H-i-s')
	// 	// );



	// 	$this->db->insert('users', $tUsers);

	// 	// redirect(base_url("users"));

	// 	// $this->email->from('contacto@jonathancastrodev.com', 'Jonathan Castro');
	// 	// $this->email->to($email);      
	// 	// $this->email->subject('Bienvenido a esta aplicacion de prueba');

	// 	// $this->email->message('Tu usuario'.$email.'y contraseña son:'.$password);

	// 	// $this->email->send();

	// 	echo json_encode("Registro exitoso");


	// }



	public function update(){

		$this->form_validation->set_rules('first_name', 'first_name', 'required|max_length[30]');
		$this->form_validation->set_rules('last_name', 'last_name', 'required|max_length[30]');
		$this->form_validation->set_rules('email', 'email', 'required|max_length[35]');
		 

		if ($this->form_validation->run() == FALSE){
			
			
			// $this->index();

			// echo json_encode("Todos los campos son requeridos");

			echo json_encode("All fields required");			
			
		}else{

		$id_user = $_POST["id_user"];
		$first_name = $_POST["first_name"];
		$last_name = $_POST["last_name"];
		$email = $_POST["email"];		

		$data=array(
		    'id_user' => $id_user,			
			'first_name' => $first_name,
			'last_name' => $last_name,			
			'email' => $email,			
			'updated_at' => date('d-m-Y')			
		);		

		$this->Users_Model->update($data);		

		echo json_encode("Updated success");

	}


	}

	public function deleteUser($id)
	{
		
		// obtengo el id del usuario
		$userRole = $this->Users_Model->userRoleValidation($id);

		// print_r($userRole['id_role']);

		// valido el id_role del usuario, con sus mensajes
		if ($userRole['id_role'] == 1) {
			
			// echo "Es admin";

			// $this->session->set_flashdata('noDelete', 'el usuario admin no se puede eliminar');

			$this->session->set_flashdata('noDelete', 'admin user cannot be deleted');
		}else{

			// echo "Es user";

			// $this->session->set_flashdata('deleteUser', 'usuario eliminado');

			$this->session->set_flashdata('deleteUser', 'User Deleted');

			$this->Users_Model->deleteUsers($id);

		}		
		
		redirect(base_url("users"));
	}


	public function usersPdf()
	{ 

		$data = $this->Users_Model->getUsers();

		// $totalUsers = $this->Api_Model->countUsers();

		$this->pdf = new fpdf();

		$this->pdf->AddPage();

		$this->pdf->AliasNbPages(); 

		$this->pdf->SetTitle("Report Users");
		$this->pdf->SetLeftMargin(15);
		$this->pdf->SetRightMargin(15);
		$this->pdf->SetFillColor(200,200,200); 

		$this->pdf->SetFont('Arial', 'B', 9);  

		$this->pdf->Cell(40,5,'First name','TBL',0,'L','1');
		$this->pdf->Cell(40,5,'Last name','TB',0,'L','1');
		$this->pdf->Cell(40,5,'Country','TB',0,'L','1');
		$this->pdf->Cell(40,5,'State','TB',0,'L','1');
		$this->pdf->Cell(40,5,'Role','TB',0,'L','1');
		$this->pdf->Cell(40,5,'Created at','TB',0,'L','1');          
		$this->pdf->Ln(7);

		foreach ($data as $datos) {

			$this->pdf->Cell(40,5,$datos['first_name'],'B',0,'L',0);
			$this->pdf->Cell(40,5,$datos['last_name'],'B',0,'L',0);
			$this->pdf->Cell(40,5,$datos['country'],'B',0,'L',0);
			$this->pdf->Cell(40,5,$datos['state'],'B',0,'L',0);
			$this->pdf->Cell(40,5,$datos['role'],'B',0,'L',0);
			$this->pdf->Cell(40,5,$datos['created_at'],'B',0,'L',0);        


			$this->pdf->Ln(5);
		}

		$this->pdf->Cell(40,5,'Total By Date:','TB',0,'L','1');
		$this->pdf->Cell(40,5, date("d-m-y"),'B',0,'L',0);
		$this->pdf->Ln(5);
		// $this->pdf->Cell(40,5,'Total Users:','TB',0,'L','1');
		// $this->pdf->Cell(40,5, $totalUsers['totalUsers']->totalusers,'B',0,'L',0);


		$this->pdf->Output("Report users.pdf", 'D');


	}



	public function usersExcel()
	{

		$data = $this->Users_Model->getUsersExcel();
		

       //load our new PHPExcel library
		$this->load->library('phpexcel');
        //activate worksheet number 1
		$this->phpexcel->setActiveSheetIndex(0);

        //name the worksheet
		$this->phpexcel->getActiveSheet()->setTitle('Report Users');       

		$this->phpexcel->getActiveSheet()->fromArray($data);


    $filename='Report users.xls'; //save our workbook as this file name
    header('Content-Type: application/vnd.ms-excel'); //mime type
    header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
    header('Cache-Control: max-age=0'); //no cache

    //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
    //if you want to save it as .XLSX Excel 2007 format
    $objWriter = PHPExcel_IOFactory::createWriter($this->phpexcel, 'Excel5');  
    //force user to download the Excel file without writing it to server's HD
    $objWriter->save('php://output');   



}


}
