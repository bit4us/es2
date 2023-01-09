<?php

include_once('Permission.class.php');

class Sidebar {
  private $id, $position, $parent, $title, $link, $accordion, $icon;

  public function setId($id){
    $this->id=$id;
  }
  public function getId(){
    return $this->id;
  }
  public function setPosition($position){
    $this->position=$position;
  }
  public function getPosition(){
    return $this->position;
  }
  public function setParent($parent){
    $this->parent=$parent;
  }
  public function getParent(){
    return $this->parent;
  }
  public function setTitle($title){
    $this->title=$title;
  }
  public function getTitle(){
    return $this->title;
  }
  public function setLink($link){
    $this->link=$link;
  }
  public function getLink(){
    return $this->link;
  }
  public function setAccordion($accordion){
    $this->accordion=$accordion;
  }
  public function getAccordion(){
    return $this->accordion;
  }
  public function setIcon($icon){
    $this->icon=$icon;
  }
  public function getIcon(){
    return $this->icon;
  }

  public function addSidebarItem () {

  }

  public function getSidebarItem() {

  }

  public function getSidebar(){

  }

}