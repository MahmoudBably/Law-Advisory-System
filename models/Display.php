<?php

/*
 * Display to get the requested data from the databse
 *
 * @author Ali7amdi
 */

class Display extends DBConnect {

    private $tablename;
    private $cxn;
    private $position;
    public function __construct($tablename) {

        $this->tablename = $tablename;
        
        $this->connectToDb();
        
        
    }
 
    function getAllData()
    {
        $query = "SELECT * FROM `$this->tablename` ORDER BY `id` DESC";
        if(!$sql = mysql_query($query))
        {
            throw new Exception("Error: Cannot excute the query.");
        }
        else
        {
            $num = mysql_num_rows($sql);
            if($num>0)
            {
                for($i=0;$i<$num;$i++)
                {
                    $data[$i] = mysql_fetch_assoc($sql);
                }
            }
        }
        
        return @$data;
        
    }
    
    
    function getLastRecordDESC() {
        
        $query = "SELECT * FROM `$this->tablename` ORDER BY `id` DESC LIMIT 1";

        if(!$sql = mysql_query($query))
        {
            throw new Exception("Error: Can not excute the query.");
        }
        else
        {
            $num = mysql_num_rows($sql); // 1            
            while ($num > 0)
            {
               $data = mysql_fetch_array($sql);
               $num--;
            }
        }        
        return $data;
    }
    
    function LastTypeID()
    {
        $query = "SELECT id FROM `usertypes` ORDER BY `id` DESC LIMIT 1";
        
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
            throw new Exception("Query not Executed!");
        }
    }
    
    function getRecordByID($id)
    {
        $id = intval($id);
        $query = "SELECT * FROM `$this->tablename` WHERE `id` = $id";
        if(!$sql = mysql_query($query))
        {
            throw new Exception("Error: Can not excute the query.");
        }
        else
        {
            $num = mysql_num_rows($sql);
            while ($num > 0)
            {
               $data = mysql_fetch_array($sql);
               $num--;
            }
        }
        return $data;
    }
    function getReplyID($id)
    {
        $id = intval($id);
        $query = "SELECT * FROM `$this->tablename` WHERE `recieverid` = $id";
        if(!$sql = mysql_query($query))
        {
            throw new Exception("Error: Can not excute the query.");
        }
        else
        {
            $num = mysql_num_rows($sql);
            while ($num > 0)
            {
               $data = mysql_fetch_assoc($sql);
               $num--;
            }
        }
        return @$data;
    }
    function getCases()
    {
        $id = $_SESSION['id'];
        $query = "SELECT * FROM `$this->tablename` WHERE `id` = $id";
        if(!$sql = mysql_query($query))
        {
            throw new Exception("Error: Cannot excute the query.");
        }
        else
        {
            $num = mysql_num_rows($sql);
            if($num>0)
            {
                for($i=0;$i<$num;$i++)
                {
                    $data[$i] = mysql_fetch_array($sql);
                }
            }
        }
       
        return @$data;
        echo '<script type="text/javascript">alert("Deleted Successfully!"); history.back();</script>';
    }
    function getTypeData($id)
    {
        $query = "SELECT * FROM `$this->tablename` WHERE `usertypeid` = $id";
        if(!$sql = mysql_query($query))
        {
            throw new Exception("Error: Cannot excute the query.");
        }
        else
        {
            $num = mysql_num_rows($sql);
            if($num>0)
            {
                for($i=0;$i<$num;$i++)
                {
                    $data[$i] = mysql_fetch_assoc($sql);
                }
            }
        }
        
        return @$data;
        
    }
    function UserTypes($id)
    {
        $query = "SELECT * FROM `$this->tablename` WHERE `id` = $id";
        if(!$sql = mysql_query($query))
        {
            throw new Exception("Error: Cannot excute the query.");
        }
        else
        {
            $num = mysql_num_rows($sql);
            if($num>0)
            {
                for($i=0;$i<$num;$i++)
                {
                    $data[$i] = mysql_fetch_assoc($sql);
                }
            }
        }
        
        return @$data;
        
    }
    function geAppData($position)
    {
        $query = "SELECT * FROM `users` WHERE `position` = '$position'";
        if(!$sql = mysql_query($query))
        {
            throw new Exception("Error: Cannot excute the query.");
        }
        else
        {
            $num = mysql_num_rows($sql);
            if($num>0)
            {
                for($i=0;$i<$num;$i++)
                {
                    $data[$i] = mysql_fetch_assoc($sql);
                }
            }
        }
        
        return @$data;
        
    }
    function LawApp($usertypename1,$usertypename2)
    {   
        $id = $_SESSION['id'];
        $query = "SELECT appointments.id,`name`,`time`,`about` FROM `appointments` JOIN `users` ON users.id = appointments.$usertypename1 WHERE appointments.$usertypename2 = $id";
        if(!$sql = mysql_query($query))
        {
            throw new Exception("Error: Cannot excute the query.");
        }
        else
        {
            $num = mysql_num_rows($sql);
            if($num>0)
            {
                for($i=0;$i<$num;$i++)
                {
                    $data[$i] = mysql_fetch_assoc($sql);
                }
            }
        }
        
        return @$data;
        
    }
     function LawCase()
    {   
        $id = $_SESSION['id'];
        $query = "SELECT casesdata.id,`name`,`time`,`about` FROM `casesdata` JOIN `users` ON users.id = casesdata.clientid WHERE casesdata.lawyerid = $id";
        if(!$sql = mysql_query($query))
        {
            throw new Exception("Error: Cannot excute the query.");
        }
        else
        {
            $num = mysql_num_rows($sql);
            if($num>0)
            {
                for($i=0;$i<$num;$i++)
                {
                    $data[$i] = mysql_fetch_assoc($sql);
                }
            }
        }
        
        return @$data;
        
    }
    function ClientCase()
    {   
        $id = $_SESSION['id'];
        $query = "SELECT `name`,`time`,`about` FROM `casesdata` JOIN `users` ON users.id = casesdata.lawyerid WHERE casesdata.clientid = $id";
        if(!$sql = mysql_query($query))
        {
            throw new Exception("Error: Cannot excute the query.");
        }
        else
        {
            $num = mysql_num_rows($sql);
            if($num>0)
            {
                for($i=0;$i<$num;$i++)
                {
                    $data[$i] = mysql_fetch_assoc($sql);
                }
            }
        }
        
        return @$data;
        
    }
        
}

?>
