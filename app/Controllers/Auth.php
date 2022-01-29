<?php 
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthModel;

class Auth extends BaseController
{
	// Instansiasi 
    protected $authModel;
    public function __construct()
    {
        $this->authModel = new AuthModel();
    }

	public function admin()
	{
		$session = session();
        //$model = new AuthModel();
        $email = $this->request->getVar('emailAdmin');
        $password = $this->request->getVar('passwordAdmin');
        //dd($email);
        //$data = $model->where('email', $email)->first();
        $data = $this->authModel->getUser($email);
        //dd($data);
        if($data){
            $pass = $data['password'];               
            $role = "Administrator";
            
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['id'],
                    'user_name'     => $data['username'],
                    'user_email'    => $data['email'],
                    'user_tipe'    => $role,
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/admin');
            }else{
                $session->setFlashdata('msg', 'Wrong_Password');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email_not_Found');
            return redirect()->to('/login');
        }
	}

    public function guru()
    {
        $session = session();
        $model = new AuthModel();
        $email = $this->request->getVar('emailGuru');
        $password = $this->request->getVar('passwordGuru');
        //dd($email2);
        $data = $model->where('email', $email)->first();
        //dd($data);
        if($data){
            $pass = $data['password'];               
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['id'],
                    'user_name'     => $data['username'],
                    'user_email'    => $data['email'],
                    'user_tipe'    => 'Guru',
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/guru');
            }else{
                $session->setFlashdata('msg', 'Wrong_Password');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email_not_Found');
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