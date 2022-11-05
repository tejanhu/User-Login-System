<?php

namespace App\Controllers;

use App\Models\UserModel;


class User extends BaseController
{
    public function index()
    {
        $data = [];
        
        $db = \Config\Database::connect();
        $query = $db->query('SELECT user_name from User');
        $result = $query->getResult();
        print_r($db);
        echo view('login', $data);

        
    }

    public function dashboard()
    {
        $data = [];
        helper(['form','url']);
        echo view('dashboard', $data);
    }
    public function updateDetails()
    {
        $data = [];
        helper(['form','url']);
        echo view('updateDetails', $data);
    }

    public function register()
    {

        $data = [ $validation = \Config\Services::validation()];

       

       helper(['form','url']);

       echo view('register');
     
       helper(['curl']);
       
       $email = $this->request->isAJAX('email', TRUE);
       $email_api_base_url = 'https://tls.bankaccountchecker.com/listener.php?key=c81f37c232169ebfa5a080c8d67ce6cf&password=Hussein95!&output=json&type=email&email=<?$email?>';

        $response = perform_http_request('GET', $email_api_base_url);
        
        echo $response;
       if($this->request->getMethod() == 'post'){
        helper(['form']);
        $rules = [
            'email' => ['rules' => 'required',
                'errors' => [
                    'required' => $response
                ]
                ]
                // ,
                // 'phone' => ['rules' => 'required',
                // 'errors' => [
                //     'required' => $response
                // ]
                // ]
                ];
        // $validation = \Config\Services::validation();
        // $verify = $this->validate([
        //  'email' => 'required',
        //  'phone' => 'required'
        // ]);

        // if(!$verify)

       

        if(!$this->validate($rules))
        {
            echo view('register', array('validation' => $this->validator));
        }
        else{
                $model = new UserModel();
                
                $newData = [
                    'username' => $this->request->getVar('user_name'),
                    'password' => $this->request->getVar('user_password'),
                    'email' => $this->request->getVar('user_email'),
                    'phone' => $this->request->getVar('user_phone'),
                    'age' => $this->request->getVar('age'),
                    'reg_date' => $this->request->getVar('registration_date')
                ];

                // $model->save($newData);

                $session = session();
                $session->setFlashData('success', 'Successful Registration');

                return redirect()->to('/');

        }
    }
    
    }
}
