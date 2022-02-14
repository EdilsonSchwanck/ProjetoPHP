<?php

class ConnectClass{

    var $conn;

    public function openConnect(){
        $serverName = 'db';
        $userName = 'root';
        $password = 'test';
        $dbName = 'pw_exemple';

        $this -> conn =new mysqli($serverName, $userName, $password, $dbName);

       if($this -> conn -> connect_error){
           die("conexão com Banco de dados falhou ->". $this -> conn -> connect_error);
       }

    }

    public function getConn(Type $var = null)
    {
        return $this -> conn;
    }



}









?>