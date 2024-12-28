<?php

namespace App\Controllers;
use App\Models\Model_login;
use App\Models\Model_pasien;
use App\Models\Model_user;

class Login extends BaseController
{
    private $loginModel=NULL;
	private $googleClient=NULL;
    public function index()
    {
        $session = session();

        if ($session->get('nama_login') || $session->get('status_login') == 'Admin') {
            return redirect()->to('Admin/Dashboard');
        } else if ($session->get('nama_login') || $session->get('status_login') == 'Karyawan') {
            return redirect()->to('Karyawan/Dashboard');
        }

        helper(['form']);
        return view('viewLogin');
    }

    public function loginAdmin()
    {
        $session = session();

        if ($session->get('nama_login') || $session->get('status_login') == 'Admin') {
            return redirect()->to('Admin/Dashboard');
        } 

        helper(['form']);
        return view('viewLoginAdmin');
    }

    public function loginSistemAdmin()
    {
        $session = session();

        $model = new Model_login();
        $encrypter = \Config\Services::encrypter();

        $status = $this->request->getPost('status');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $data = $model->loginAdmin($email)->getRowArray();

        if ($data) {
            $pass = $data['password'];
            $status = 'Admin';
            $verify_pass =  $encrypter->decrypt(base64_decode($pass));
            if ($verify_pass == $password) {
                $ses_data = [
                    'user_id' => $data['id_admin'],
                    'nama_login' => $data['nama_admin'],
                    'foto' => 'no_image.png',
                    'status_login' => $status,
                    'logged_in' => TRUE,
                    'is_admin' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/Admin/Dashboard');
            } else {
                $session->setFlashdata('msg', 'Password Tidak Sesuai');
                return redirect()->to('/Login/loginAdmin');
            }
        } else {
            $session->setFlashdata('msg', 'Email Tidak di Temukan');
            return redirect()->to('/Login/loginAdmin');
        }
    }


    public function loginSistem()
    {
        $session = session();

        if ($session->get('nama_login') || $session->get('status_login') == 'Admin') {
            return redirect()->to('Admin/Dashboard');
        } else if ($session->get('nama_login') || $session->get('status_login') == 'Karyawan') {
            return redirect()->to('Karyawan/Dashboard');
        }
        
        $model = new Model_login();
        $encrypter = \Config\Services::encrypter();

        $username = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $data = $model->loginSistem($username)->getRowArray();

        if ($data) {
            $pass = $data['password'];
            $status = 'Admin';
            $verify_pass =  $encrypter->decrypt(base64_decode($pass));
            if ($verify_pass == $password) {
                $ses_data = [
                    'user_id' => $data['id'],
                    'nama_login' => $data['nama'],
                    'logged_in' => TRUE,
                    'is_admin' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/Admin/Dashboard');
            } else {
                $session->setFlashdata('msg', 'Password Tidak Sesuai');
                return redirect()->to('/Login');
            }
        } else {
            $session->setFlashdata('msg', 'Email Tidak di Temukan');
            return redirect()->to('/Login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        
		session()->remove('LoggedUserData');
		session()->remove('AccessToken');
        return redirect()->to('/Login');
    }
}
