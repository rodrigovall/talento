<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuario_Model;

class login_controller extends BaseController
{
	public function index()
	{
		helper(['form', 'url']); //Helpers biblioteca que brinda CodeIgniter

		$data['titulo']='Login';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('Back/usuario/login');
        echo view('front/footer_view');
	}

	public function auth()
	{
		$session = session();
		$model = new usuario_Model();

		//Traer los datos del formulario
		$email = $this->request->getVar('email');
		$password = $this->request->getVar('pass');

		$data = $model->where('email', $email)->first();
		if($data)
		{
					$pass = $data['pass'];
					$ba = $data['baja'];
					if($ba == 'SI'){
									$session->setFlashdata('msg', 'Usuario dado de baja');
									return redirect()->to('/login');	
					}
				//Se verifican los datos ingresados para iniciar, si cumple la verificacion inicia la sesion
				$verify_pass = password_verify($password, $pass);
				//password_verify determina los requisitos de configuracion de la contraseña
				if($verify_pass)
				{
					$ses_data = [
								 'id_usuario'	=> $data['id_usuario'],
								 'nombre'		=> $data['nombre'],
								 'apellido'		=> $data['apellido'],
								 'email'		=> $data['email'],
								 'usuario'		=> $data['usuario'],
								 'perfil_id'	=> $data['perfil_id'],
								 'logged_in'	=> TRUE 
								];
					//Si se cumple la verificacion inicia la sesion
					$session->set($ses_data);

					session()->setFlashdata('msg', 'Bienvenido!!');
					return redirect()->to('/panel');

				}else { 
						//no paso la validacion de la password
						$session->setFlashdata('msg', 'Password Incorrecta, por favor ingrese nuevamente su 
							Email y contraseña.');
						return redirect()->to('/login');
					  }
		} else {
				$session->setFlashdata('msg', 'No existe el Email o es Incorrecta, por favor ingrese nuevamente su 
							Email y contraseña.');
				return redirect()->to('/login');
				}
		
	}
	
	public function logout()
	{
		$session = session();
		$session->destroy();
		return redirect()->to('/');
	}

}