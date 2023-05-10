<?php
function get_hashtags() {
    
  global $db; 
  $sql = "SELECT * FROM hashtags"; 
  $result = mysqli_query($db, $sql);
  $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $data;
}

function get_fields() {
    
  global $db; 
  $sql = "SELECT * FROM field"; 
  $result = mysqli_query($db, $sql);
  $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $data;
}

function get_connections() {
    
  global $db; 
  $sql = "SELECT hashtags.name AS hashtagname, field.name AS fieldname, connections.id AS id
  FROM connections
  JOIN hashtags ON connections.id_hastags = hashtags.id
  JOIN field ON connections.id_field = field.id"; 

  $result = mysqli_query($db, $sql);
  $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

  return $data;
}

function get_alone() {
    
  global $db; 
  $sql = "SELECT name FROM hashtags WHERE id NOT IN (SELECT id_hastags FROM connections)";
  $result = mysqli_query($db, $sql);
  $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

  return $data;
}


?>