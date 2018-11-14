<?php


/**
 * Description of Delete
 * Delete Requested ID
 * @author Mahmoud Osama
 */
class Delete extends DBConnect {
    private $tablename;
    
    public function __construct($tablename) {
        $this->tablename= $tablename;
        $this->connectToDb();
    }
    
    function deleteRecordByID($id)
    {
      $id= intval($id);
      $query = "DELETE FROM `$this->tablename` WHERE `id` = '$id' ";
      if(!$sql = mysql_query($query))
      {
          throw new Exception("Error: Query not Executed!");
      }
      else
      {
          return TRUE;
      }
    }
  
    
}
