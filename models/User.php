<?php

/*
 * Register Class
 * 
 */
class User
{    
    public $id; 
    public $usertypeid;
    public $name;
    public $username;
    public $password;
    public $nationalid;
    public $addressid;
    public $gender;
    public $age;
    public $email;
    public $secretword;
    function __construct($data)
    {
        if(is_array($data))
        {
            $this->setData($data);
        }
        else
        {
            throw new Exception("Error: Data must be in an array.");
        }
       
    }
    
    public function setData($data)
    {
     
     $this->id          = $data['id'];
     $this->usertypeid  = $data['usertypeid'];
     $this->name        = $data['name'];
     $this->username    = $data['username'];
     $this->password    = $data['password'];
     $this->nationalid  = $data['nationalid'];
     $this->addressid   = $data['addressid'];
     $this->gender      = $data['gender'];
     $this->age         = $data['age'];
     $this->email       = $data['email'];
     $this->secretword  = $data['secretword'];
    
    }
    

    
}

?>
