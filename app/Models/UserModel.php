<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'User';
    protected $primaryKey = "user_id";
    protected $allowedFields = ['user_name', 'user_password', 'user_email', 'user_phone', 'age', 'registration_date'];
    protected $beforeInsert = ['beforeInsert']; 
    protected $beforeUpdate = ['beforeUpdate'];


    // public function byUserID(string $user_id) {
    //     $user = $this
    //         ->join('User_Address', 'Users.user_id = User_Address.user_id')
    //         ->join('city', 'Users.user_id = User_Address.user_id')
    //         ->join('post_code', 'Users.user_id = User_Address.user_id')
    //         ->join('address', 'Users.user_id = User_Address.user_id')
    //         ->where('user_id', $user_id)
    //         ->first();
    //     return $user;
    // } 
    
    protected function beforeInsert(array $data){
       $data = $this->passwordHash($data);

       return $data;
    }
    protected function beforeUpdate(array $data){
        $data = $this->passwordHash($data);

        return $data;
    }

    protected function passwordHash(array $data){
        if(isset($data['data']['user_password']))
        $data['data']['user_password'] = password_hash($data['data']['user_password'], PASSWORD_DEFAULT);
        
        return $data;
    }

}



?>