<?php

class Log {
  private $id, $userID, $labelicon, $labeltype, $operation, $timestamp;

  public function setID($id){
      $this->id=$id;
  }
  public function getID(){
      return $this->id;
  }
  public function setUserID($userID){
    $this->userID=$userID;
  }
  public function getUserID(){
      return $this->userID;
  }
  public function setLabelicon($labelicon){
    $this->labelicon=$labelicon;
  }
  public function getLabelicon(){
      return $this->labelicon;
  }
  public function setLabeltype($labeltype){
    $this->labeltype=$labeltype;
  }
  public function getLabeltype(){
      return $this->labeltype;
  }
  public function setOperation($operation){
    $this->operation=$operation;
  }
  public function getOperation(){
    return $this->operation;
  }
  public function setTimestamp($timestamp){
    $this->timestamp=$timestamp;
  }
  public function getTimestamp(){
    return $this->timestamp;
  }


  public function writeToLog(){
    $database = new Database;
    $database->query('
        INSERT INTO log_operations
            (userID, labelicon, labeltype, operation)
        VALUES
            (:userID, :labelicon, :labeltype, :operation)
    ');
    $database->bind(':userID', $this->getUserID());
    $database->bind(':labelicon', $this->getLabelicon());
    $database->bind(':labeltype', $this->getLabeltype());
    $database->bind(':operation', $this->getOperation());
    $database->execute();
  }

  public function getUserLogsLast30Days(){
    $database = new Database;
    $database ->query('
    SELECT 
      labelicon, labeltype, operation, timestamp 
    FROM 
      log_operations 
    WHERE 
      userID=:userID 
      and timestamp > NOW() - INTERVAL 1 MONTH
    ORDER BY 
      id DESC;
    ');
    $database->bind(':userID', $this->getUserID());
    return $database->resultset();
  }


}