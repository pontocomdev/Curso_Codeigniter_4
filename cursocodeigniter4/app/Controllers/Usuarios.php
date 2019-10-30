<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UsuariosModel;

	class Usuarios extends Controller{

		public function index(){
			$data['session'] = \Config\Services::session();
			$data['title'] = 'Login';

			echo view('templates/header', $data);
			echo view('login_page');
			echo view('templates/footer');
		}

		public function login(){
			$model = new UsuariosModel();

			$user = $this->request->getVar('user');
			$senha = $this->request->getVar('senha');

			$data['usuarios'] = $model->getUsuarios($user,$senha);
			$data['session'] = \Config\Services::session();

			if(empty($data['usuarios'])){

				return redirect('login');
			}else{
				$sessionData = [
					'user' => $user,
					'logged_in' => TRUE
				];
				$data['session']->set($sessionData);
				return redirect('noticias');
			}

		}

		public function logout(){
			$data['session'] = \Config\Services::session();
			$data['session']->destroy();
			return redirect('login');
		}

	}