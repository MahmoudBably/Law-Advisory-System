<?php

/*
 * Login Class
 * @author Ali7amdi
 */
class Login {
 
    private $id;
    private $password;
    private $cxn;       // database object
    private $tablename;
            
    function __construct($id,$password)
    {
        // set data
        $this->setData($id, $password);
        // connect DB
        $this->connectToDb();
        // get Data
        $this->getData();
        
        $this->count();
    }
    
    private function setData($id,$password)
    {
        
        $this->id = $id;
        $this->password = $password;
    }
    
    private function connectToDb()
    {
        require_once './models/Database.php';
        $vars = "include/vars.php";
        $this->cxn = new Database($vars);
    }
    
    function getData()
    {
        $query = "SELECT * FROM `users` WHERE `id` = '$this->id' AND `password` = '$this->password'";
        $sql   = mysql_query($query);
        
        if(mysql_num_rows($sql)>0)
        {
            $num = mysql_num_rows($sql);
           for($i=0;$i<$num;$i++)
                {
                    $data[$i] = mysql_fetch_assoc($sql);
                }
                return @$data;
                
        }
        else
        {
            throw new Exception("ID or password is invalid, please try again.");
        }
        
    }
    
        function count(){
        $query = "UPDATE `report` SET l_users = l_users + 1";
        mysql_query($query);
        
    }

 
    function close()
    {
        $this->cxn->close();
    }
    
    
    
    
}

?>
