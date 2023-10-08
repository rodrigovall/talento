<?php
namespace App\Controllers;
use App\Models\usuario_Model;
use CodeIgniter\Controller;

class usuario_controller extends Controller
{
	
	public function __construct()
	{
		helper(['form', 'url']); //Helpers biblioteca que brinda CodeIgniter
	}

	public function create() //Es donde se va a crear el usuario
	{
		$data['titulo']='Registro';
		echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('Back/usuario/registro');
        echo view('front/footer_view');
	}

	public function formValidation() //formValidation se utiliza para validar nuestro formulario
	{
		//Validamos cada uno de los campos desde la tabla de usuarios
		$input = $this->validate([
				'nombre'	=> 'required|min_length[3]',
				'apellido' 	=> 'required|min_length[3]|max_length[25]',
				'usuario'	=> 'required|min_length[3]',
				'email'		=> 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
				'pass'		=> 'required|min_length[3]|max_length[10]'
		],
		);

		$formModel = new usuario_Model();

		//Si "no existe el input ingresado" le dara errores por no existir 
		if (!$input) {
			$data['titulo']='Registro';
	        echo view('front/head_view',$data);
	        echo view('front/navbar_view');
	        echo view('Back/usuario/registro', ['validation' => $this->validator]);
	        echo view('front/footer_view');
		} else {
			$formModel ->save([
				//getVar = son los datos que obtiene cuando de cargan.
				'nombre'	=> $this->request->getVar('nombre'), //deben coincider con el input name del registro.
				'apellido' 	=> $this->request->getVar('apellido'),
				'usuario' 	=> $this->request->getVar('usuario'),
				'email' 	=> $this->request->getVar('email'),
				'pass' 		=> password_hash( $this->request->getVar('pass'),	PASSWORD_DEFAULT)
				//password_hash() crea un nuevo hash de contraseña usando un algoritmo de hash de unico sentido.
				//Solo ENCRIPTA la password.
			]);
			//Flashdata funciona solo en redirigir la funcion en el controlador en la vista de carga.
			//Muestra los mensajes de exito o error.
			session()->setFlashdata('success', 'Usuario registrado con exito');
			return $this->response->redirect(base_url('/registro'));
		}

	}
}