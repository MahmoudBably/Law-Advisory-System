<?php


/**
 * Updating Table Data
 */
class Update extends DBConnect {
    
    private $tablename;
    private $data;
    public function __construct($data,$tablename) {
        if(is_array($data))
        {
            $this->data = $data;
        }
        $this->tablename = $tablename;
        $this->connectToDb();
    }
    
    function editData($id)
    {
        $id = intval($id);
        
        $query  = "UPDATE $this->tablename SET ";
        foreach($this->data as $key=>$value)
        {
            $query .= "`".$key."` = '".$value."', " ;
        }
        $pattern = "+/0-=";
        $query .= $pattern;
        $query = str_replace(", ".$pattern, " ", $query);
        $query .= " WHERE `id` = $id";
        if(!$sql = mysql_query($query))
    {
            throw new Exception("Error: Cannot Execute Query!");
        }
        else
        {
            return TRUE;
        }
        
    }
}

