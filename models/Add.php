<?php

/*
 * add class 
 *  insert the data into mysql database
 * 
 * @author Ali7amdi
 */
class Add extends DBConnect {
    
    private $data;
    private $tablename;
    private $cxn; //Database variable
    

    public function __construct($data, $tablename)
    {
        if(is_array($data))
        {
            $this->data      = $data;
            $this->tablename = $tablename;
        }
        else
        {
            throw new Exception("Error: the data must be in an array.");
        }
        
        $this->connectToDb();
        
        // isert the data into the table
        $this->AddData();
        
            
    }
    
    // isert the data into the table
    function AddData()
    {
        foreach ($this->data as $key => $value)
        {
            $keys[]  = $key;
            $values[] = $value;
        }
        
        $tblKeys    = implode($keys, ","); 
        $dataValues = '"'.  implode($values, '","').'"';
        
      $query = "INSERT INTO $this->tablename ($tblKeys) VALUES ($dataValues)";
        
        if($sql = mysql_query($query))
        {
            return TRUE;
        }
        else
        {
            throw new Exception("Error: Cannot execute the query.");
            return FALSE;
        }          
    }
    function count($count){
        $query = "UPDATE `report` SET $count = $count + 1";
        mysql_query($query);
        
    }
    
    function addNewtype()
    {
        $query = "INSERT INTO `usertypes` (`id`,`type`) VALUES (``,`newuser`)";
        mysql_query($query);
    }
    
        
    
}

?>
