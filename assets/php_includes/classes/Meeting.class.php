<?php

include_once('Log.class.php');
include_once('User.class.php');

class Meeting {
  private $id, $image, $title, $description, $date, $location, $location_map, $userId;

  public function setID($id){
    $this->id=$id;
  }
  public function getID($id){
    return $this->id;
  }
  public function setImage ($image){
    $this->image = $image;
  }
  public function getImage(){
    return $this->image;
  }
  public function setTitle($title){
    $this->title = $title;
  }
  public function getTitle(){
    return $this->title;
  }
  public function setDescription($description){
    $this->description = $description;
  }
  public function getDescription(){
    return $this->description;
  }
  public function setDate($date){
    $this->date = $date;
  }
  public function getDate(){
    return $this->date;
  }
  public function setLocation($location){
    $this->location = $location;
  }
  public function getLocation(){
    return $this->location;
  }
  public function setLocationMap($location_map){
    $this->location_map = $location_map;
  }
  public function getLocationMap (){
    return $this->location_map;
  }
  public function setUserId($userId){
    $this->userId = $userId;
  }
  public function getUserId(){
    return $this->userId;
  }

  public function createMeeting(){
    $database = new Database;
    try{
      $database->query('INSERT into meeting
                          (image, title, description, date, location, location_map, ownerid)
                          VALUES
                          (:image, :title, :description, :date, :location, :location_map), :userId');
      $database->bind(':image', $this->getImage());
      $database->bind(':title', $this->getTitle());
      $database->bind(':description', $this->getDescription());
      $database->bind(':date', $this->getDate());
      $database->bind(':location', $this->getLocation());
      $database->bind(':location_map',$this->getLocationMap());
      $database->bind(':userId', $this->getUserId());
      $database->execute();
      $this->setID($database->lastInsertId());
      $myLog = new Log();
      $myLog->setUserId($this->getUserId());
      $myLog->setLabelicon('handshake');
      $myLog->setLabeltype('success');
      $myLog->setOperation('Meeting <b>'.$this->title.'</b> created');
      $myLog->writeToLog();
      return true;
    }
    catch(Exception $e){
      echo $e->getMessage();
      return false;
    }
  }

  public function updateMeeting($id){
    //TODO
  }

  public function getMeetingById($id){
    $database = new Database;
    try{
      $database->query('
      SELECT 
        id, image, title, description, date, location, location_map, ownerid from meeting where id=:id
      ');
      $database->bind(':id', $id);
      $row = $database->single();
      $this->setImage($row['image']);
      $this->setTitle($row['title']);
      $this->setDescription($row['description']);
      $this->setDate($row['date']);
      $this->setLocation($row['location']);
      $this->setLocationMap($row['location_map']);
      $this->setUserId($row['ownerid']);
      return true;
    }
    catch(Exception $e){
      return false;
    } 
  }

  public function getNextMeeting(){
    $database = new Database;
    try{
      $database->query('
      SELECT 
        id, image, title, description, date, location, location_map, ownerid 
      FROM meeting
      WHERE date >= NOW()
      ORDER BY date
      LIMIT 1
      ');
      $row = $database->single();
      if($row){
        $this->setImage($row['image']);
        $this->setTitle($row['title']);
        $this->setDescription($row['description']);
        $this->setDate($row['date']);
        $this->setLocation($row['location']);
        $this->setLocationMap($row['location_map']);
        $this->setUserId($row['ownerid']);
        return true;
      } else {
        return false;
      }
    }
    catch(Exception $e){
      return false;
    } 
  }
  public function getLastMeeting(){
    $database = new Database;
    try{
      $database->query('
      SELECT 
        id, image, title, description, date, location, location_map, ownerid 
      FROM meeting
      WHERE date < NOW()
      ORDER BY date DESC
      LIMIT 1;
      ');
      $row = $database->single();
      if($row){
        $this->setImage($row['image']);
        $this->setTitle($row['title']);
        $this->setDescription($row['description']);
        $this->setDate($row['date']);
        $this->setLocation($row['location']);
        $this->setLocationMap($row['location_map']);
        $this->setUserId($row['ownerid']);
        return true;
      }
      else {
        return false;
      }
      
    }
    catch(Exception $e){
      return false;
    }
  }

}