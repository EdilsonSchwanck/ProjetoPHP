<?php

    class ClientsModel{

        public function listClients()
        {
            require_once('db/connectClass.php');
            $connectClass = new ConnectClass();
            $connectClass -> openConnect();
            $connection = $connectClass -> getConn();

            $sql = 'SELECT * FROM clients';

             return $connection -> query($sql);

        }
    }
?>