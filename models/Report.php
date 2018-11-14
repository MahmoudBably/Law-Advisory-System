<?php

class Report extends DBConnect {
    private $count;
    private $cxn;
    public function __construct($count) {
        $this->connectToDb();
        $this->count();
        
    }
      function count(){
        $query = "UPDATE `report` SET `$this->count` = `$this->count` + 1";
        mysql_query($query);
        
    }
}
