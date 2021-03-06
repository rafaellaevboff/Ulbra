<?php

class ClientController{

    var $ClientModel;

    function __construct(){
        // if(!isset($_SESSION['user'])){
        //     header('Location:index.php?controller=main&action=login');
        // }
        require_once('models/ClientModel.php');
        $this -> ClientModel = new ClientModel();
    }

    function ListClients(){
        $result = $this -> ClientModel -> ListClients();
        $arrayClients = array();
        while($line = $result -> fetch_assoc()){
            array_push($arrayClients, $line);
        }
        header('Content-Type: application/json');
        echo json_encode($arrayClients);
    }

    function listClient($idClient){
        $result = $this -> ClientModel -> ListClient($idClient);
        if($client = $result->fetch_assoc()){
            header('Content-Type: application/json');
            echo json_encode($client);
        }else{
            header('Content-Type: application/json');
            echo('{"error": 01 "cliente não encontrado"}');
        }
    }

    function insertClient(){
        $client = json_decode(file_get_contents('php://input'));
        $arrayClient = array(
            'name' => $client -> name,
            'phone' => $client -> phone,
            'email' => $client -> email,
            'address' => $client -> address
        );
        $idClient = $this -> ClientModel -> insertClient($arrayClient);
        header('Content-Type: application/json');
        echo('{"cod": 01 "cliente foi cadastrado"}');
    }

    function updateClient($idClient){
        $client = json_decode(file_get_contents('php://input'));
        $arrayClient = array(
            'idClient' => $idClient,
            'name' => $client -> name,
            'phone' => $client -> phone,
            'email' => $client -> email,
            'address' => $client -> address
        );
        $this -> ClientModel -> updateClient($arrayClient);
    }

    function deleteClient($idClient){
        $this -> ClientModel -> deleteClient($idClient);
    }    
}

?>