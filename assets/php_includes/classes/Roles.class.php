<?php

include_once('User.class.php');
include_once('Log.class.php');

class Role {
  private $id, $name;

  public function setId($id){
    $this->id = $id;
  }
  public function getId(){
    return $this->id;
  }
  public function setName($name){
    $this->name = $name;
  }
  public function getName(){
    return $this->name;
  }

  public function getRoleById($roleId){
    $database = new Database;
    $database->query('SELECT name FROM roles WHERE id=:id');
    $database->bind(':id', $roleId);
    $row = $database->single();
    if($row){
    $this->setName($row['name']);
    return true;
    } else{ 
      return false;
    }
  }

  public function getRoleByName($roleName){
    $database = new Database;
      $database->query('SELECT id FROM roles WHERE name=:name');
      $database->bind(':name', $roleName);
      $row=$database->single();
      if($row){
        $this->setId($row['id']);
        return true;
      }
      else{
        return false;
      }
  }
  
  public function createRole($userId, $roleName){
    $database = new Database;
    if(!$getRoleByName($roleName)){
      try {
        $database->query('INSERT INTO roles (name) VALUES (:name)');
        $database->bind(':name', $roleName);
        $log = new Log();
        $log->setUserID($userId);
        $log->setLabelIcon('gears');
        $log->setLabelType('success');
        $log->setOperation('Role created successfully');
        $log->writeToLog();

        return true;
      }
      catch(Exception $e){
        $log = new Log();
        $log->setUserID($userId);
        $log->setLabelIcon('gears');
        $log->setLabelType('danger');
        $log->setOperation('Role could not be created. Error: '. $e);
        $log->writeToLog();

        return false;
      }
    } else {
      $log = new Log();
      $log->setUserID($userId);
      $log->setLabelIcon('gears');
      $log->setLabelType('danger');
      $log->setOperation('Role could not be created. Error: Role '. $this->getName . 'already exists');
      $log->writeToLog();
      return false;
    }
  }
  public function editRole($userId, $roleName){
    $database = new Database;
    if(!getRoleByName($roleName)){
      try{
        $database->query('UPDATE roles SET name=:name where id=:id');
        $database->bind(':id', $this->getId());
        $database->bind(':name', $roleName);
        $log = new Log();
        $log->setUserID($userId);
        $log->setLabelIcon('gears');
        $log->setLabelType('success');
        $log->setOperation('Role '. $this->name.' has been updated successfully');
        $log->writeToLog();
      }
      catch(Exception $e){
        $log = new Log();
        $log->setUserID($userId);
        $log->setLabelIcon('gears');
        $log->setLabelType('danger');
        $log->setOperation('Role could not be updated. Error: '. $e);
        $log->writeToLog();
        return false;
      }  
    } else {
      $log = new Log();
      $log->setUserID($userId);
      $log->setLabelIcon('gears');
      $log->setLabelType('danger');
      $log->setOperation('Role could not be updated. Error: Role '. $this->getName . 'already exists');
      $log->writeToLog();
      return false;
    }
  }
  public function deleteRole($userId){
    $database = new Database;
    try{
      $database->query('DELETE FROM roles where id=:id');
      $database->bind(':id', $this->getId());
      $log = new Log();
      $log->setUserID($userId);
      $log->setLabelIcon('gears');
      $log->setLabelType('success');
      $log->setOperation('Role '. $this->name.' has been deleted');
      $log->writeToLog();
    }
    catch(Exception $e){
      $log = new Log();
      $log->setUserID($userId);
      $log->setLabelIcon('gears');
      $log->setLabelType('danger');
      $log->setOperation('Role could not be deleted. Error: '. $e);
      $log->writeToLog();
      return false;
    }
  }

}