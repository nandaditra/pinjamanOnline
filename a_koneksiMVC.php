<?php
class a_koneksiMVC{
public function __construct(){
$this->mysql = new mysqli('localhost', 'root', '', 
'login_register');
}
public function getConnection(){ 
return $this->mysql;
}
}
?>