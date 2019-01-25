<?php

namespace MyApp\Controllers\Client;

use MyApp\Models\Client;
use MyApp\Config;

class ClientController extends Client
{
   private $client;
   private $db;
   
   public function __construct(){
       $this->db=Config\DB::doConnect();
       $this->client=array();
   }
   
    public function Index(){
        $client = Clientes::Get('client');
        return json_encode($client, JSON_NUMERIC_CHECK);
    }
    
    public function Create($id_cliente, $first_name, $last_name, $email){
        $clientes = array(
            'id_cliente' => $id_cliente,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email
        );
        if(!empty($clientes)){
            Clientes::Save('client', 'campos', $clientes);
        }
        return $clientes;
    }
}