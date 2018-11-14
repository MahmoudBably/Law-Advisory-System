<?php

/*

 */
class DBConnect {
    
    
    private $cxn;
    
    function connectToDb()
    {
        require_once '/models/Database.php';
        $vars = "include/vars.php";
        $this->cxn = new Database($vars);
    }
    
    function close()
    {
        $this->cxn->close();
    }
    
}

?>
