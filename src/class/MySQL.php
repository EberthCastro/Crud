<?php

class MySQL
{

  // Atributos
  private String $user;
  private String $password;
  private String $hostName;
  private String $database;
  private String $url;  



  public function __construct($user, $password, $hostName, $database, $url)
  {
    $this->user = $user;
    $this->password = $password;
    $this->hostName = $hostName;
    $this->database = $database;
    $this->url = $url;

    $this->url = "mysql:host=" . $hostName . ";dbname=" . $database . ";charset=utf8";
  }

  // Setter de hostName, por si hiciera falta redefinir el parámetro
  public function setHostName($hostName, $database)
  {
    $this->hostName = $hostName;
    return $this->url = "mysql:host=" . $hostName . ";dbname=" . $database . ";charset=utf8";
  }

  // Comportamientos
  ////////////////////////////////////////////////////////////////////////////////////////
  
  public function getData() {

    $this->table = $table;
    $this->fields = $fields;

    $sql = "SELECT" . $fields . "FROM" . $table;

    if($where != ""){
      $sql += "WHERE" + $where;
    }

    if($orderBy!= ""){
      $sql += "ORDER BY". $orderBy;
    }

    $result = getData($sql);

    return $result;
  }

}