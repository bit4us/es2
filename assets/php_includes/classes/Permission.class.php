<?php

class Permission {
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

  public function getPermissionById($permissionId){
    $database = new Database;
    $database->query('SELECT name FROM permissions WHERE id=:id');
    $database->bind(':id', $permissionId);
    $row = $database->single();
    if($row){
    $this->setName($row['name']);
    return true;
    } else{ 
      return false;
    }
  }

  public function getPermissionByName($permissionName){
    $database = new Database;
      $database->query('SELECT id FROM permissions WHERE name=:name');
      $database->bind(':name', $permissionName);
      $row=$database->single();
      if($row){
        $this->setId($row['id']);
        return true;
      }
      else{
        return false;
      }
  }
  
  public function createPermission($userId, $permissionName){
    $database = new Database;
    if(!$getPermissionByName($permissionName)){
      try {
        $database->query('INSERT INTO permissions (name) VALUES (:name)');
        $database->bind(':name', $permissionName);
        $log = new Log();
        $log->setUserID($userId);
        $log->setLabelIcon('gears');
        $log->setLabelType('success');
        $log->setOperation('Permission created successfully');
        $log->writeToLog();

        return true;
      }
      catch(Exception $e){
        $log = new Log();
        $log->setUserID($userId);
        $log->setLabelIcon('gears');
        $log->setLabelType('danger');
        $log->setOperation('Permission could not be created. Error: '. $e);
        $log->writeToLog();

        return false;
      }
    } else {
      $log = new Log();
      $log->setUserID($userId);
      $log->setLabelIcon('gears');
      $log->setLabelType('danger');
      $log->setOperation('Permission could not be created. Error: Role '. $this->getName . 'already exists');
      $log->writeToLog();
      return false;
    }
  }
  public function editPermission($userId, $permissionName){
    $database = new Database;
    if(!getRoleByName($permissionName)){
      try{
        $database->query('UPDATE permissions SET name=:name where id=:id');
        $database->bind(':id', $this->getId());
        $database->bind(':name', $permissionName);
        $log = new Log();
        $log->setUserID($userId);
        $log->setLabelIcon('gears');
        $log->setLabelType('success');
        $log->setOperation('Permission '. $this->name.' has been updated successfully');
        $log->writeToLog();
      }
      catch(Exception $e){
        $log = new Log();
        $log->setUserID($userId);
        $log->setLabelIcon('gears');
        $log->setLabelType('danger');
        $log->setOperation('Permission could not be updated. Error: '. $e);
        $log->writeToLog();
        return false;
      }  
    } else {
      $log = new Log();
      $log->setUserID($userId);
      $log->setLabelIcon('gears');
      $log->setLabelType('danger');
      $log->setOperation('Permission could not be updated. Error: Role '. $this->getName . 'already exists');
      $log->writeToLog();
      return false;
    }
  }
  public function deletePermission($userId){
    $database = new Database;
    try{
      $database->query('DELETE FROM permissions where id=:id');
      $database->bind(':id', $this->getId());
      $log = new Log();
      $log->setUserID($userId);
      $log->setLabelIcon('gears');
      $log->setLabelType('success');
      $log->setOperation('Permission '. $this->name.' has been deleted');
      $log->writeToLog();
    }
    catch(Exception $e){
      $log = new Log();
      $log->setUserID($userId);
      $log->setLabelIcon('gears');
      $log->setLabelType('danger');
      $log->setOperation('Permission could not be deleted. Error: '. $e);
      $log->writeToLog();
      return false;
    }
  }
}

