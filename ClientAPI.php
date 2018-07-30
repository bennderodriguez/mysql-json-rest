<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClientAPI
 *
 * @author Admin
 */
class ClientAPI {

    public function __construct() {
        header('Content-Type: application/JSON');
        $method = $_SERVER['REQUEST_METHOD'];
        switch ($method) {
            case 'GET'://consulta
                //echo 'GET';
                $this->getClient();
                break;
            case 'POST'://inserta
                //echo 'success';
                $this->addClient();
                break;
            case 'PUT'://actualiza
                echo 'PUT';
                break;
            case 'DELETE'://elimina
                //echo 'DELETE';
                $this->deleteCLient();
                break;
            default://metodo NO soportado
                echo 'METODO NO SOPORTADO';
                break;
        }
    }

    /**
      2 * función que segun el valor de "action" e "id":
      3 *  - mostrara una array con todos los registros de personas
      4 *  - mostrara un solo registro
      5 *  - mostrara un array vacio
      6 */
    public function getClient() {
        if ($_GET['action'] == 'clients') {
            include './Client.php';
            $db = new Client();
            if (isset($_GET['id'])) {//muestra 1 solo registro si es que existiera ID                 
                //$response = $db->getPeople($_GET['id']);
                $response = $db->getClient($_GET['id']);
                echo json_encode($response, JSON_PRETTY_PRINT);
                //$this->response(200, "Ok", $response);
            } else { //muestra todos los registros                   
                $response = $db->getClients();
                echo json_encode($response, JSON_PRETTY_PRINT);
                //$this->response(200, "Ok", $response);
            }
        } else {
            $this->response(400);
        }
    }

    function addClient() {
        if ($_POST['action'] == 'clients') {
            $errorMSG = "";

            if (empty($_POST["First_Name"])) {
                $errorMSG = ' First_Name empty ';
            } else {
                $First_Name = $_POST['First_Name'];
            }
            if (empty($_POST["Last_Name"])) {
                $errorMSG .= ' Last_Name empty ';
            } else {
                $Last_Name = $_POST['Last_Name'];
            }
            if (empty($_POST["Title"])) {
                $errorMSG .= ' Title empty ';
            } else {
                $Title = $_POST['Title'];
            }
            if (empty($_POST["Departament"])) {
                $errorMSG .= ' Departament empty ';
            } else {
                $Departament = $_POST['Departament'];
            }
            if (empty($_POST["Account_Name"])) {
                $errorMSG .= ' Account_Name empty ';
            } else {
                $Account_Name = $_POST['Account_Name'];
            }
            if (empty($_POST["Email_Address"])) {
                $errorMSG .= ' Email_Address empty ';
            } else {
                $Email_Address = $_POST['Email_Address'];
            }
            if (empty($_POST["Fax"])) {
                $errorMSG .= ' Fax empty ';
            } else {
                $Fax = $_POST['Fax'];
            }
            if (empty($_POST["Phone"])) {
                $errorMSG .= ' Phone empty ';
            } else {
                $Phone = $_POST['Phone'];
            }
            if (empty($_POST["Address_Street"])) {
                $errorMSG .= ' Address_Street empty ';
            } else {
                $Address_Street = $_POST['Address_Street'];
            }
            if (empty($_POST["Address_City"])) {
                $errorMSG .= ' Address_City empty ';
            } else {
                $Address_City = $_POST['Address_City'];
            }
            if (empty($_POST["State"])) {
                $errorMSG .= ' State empty ';
            } else {
                $State = $_POST['State'];
            }
            if (empty($_POST["Postal_Code"])) {
                $errorMSG .= ' Postal_Code empty ';
            } else {
                $Postal_Code = $_POST['Postal_Code'];
            }
            if (empty($_POST["Country"])) {
                $errorMSG .= ' Country empty ';
            } else {
                $Country = $_POST['Country'];
            }

            // si no hay errores
            if ($errorMSG == "") {
                //echo 'Sin errores';
                include './Client.php';
                $newClient = new Client();
                $respuesta = $newClient->insertClient($First_Name, $Last_Name, $Title, $Departament, $Account_Name, $Email_Address, $Fax, $Phone, $Address_Street, $Address_City, $State, $Postal_Code, $Country);
                if ($respuesta) {
                    echo 'success';
                } else {
                    echo 'Client not added';
                }
            } else {
                if ($errorMSG == "") {
                    echo " Something went wrong : Login invalid ";
                } else {
                    echo $errorMSG;
                }
            }
        } else {
            $this->response(400);
        }
    }

    /**
     * elimina persona
     */
    function deleteCLient() {
        $method = $_SERVER['REQUEST_METHOD'];
        if ('DELETE' === $method) {
            parse_str(file_get_contents('php://input'), $_DELETE);
            //var_dump($_DELETE); //$_PUT contains put fields 
            $id =  $_DELETE['ID'];
            include './Client.php';
            $delete = new Client();
            $respuesta = $delete->deleteClient($id);
            if($respuesta){
                echo 'Delete Client with ID ' . $id;
            }else{
                echo 'Error to delete client with ID ' . $id;
            }
        }
    }

    /**
     * metodo para guardar un nuevo registro de persona en la base de datos
     */
    function saveClient() {
        if ($_POST['action'] == 'clients') {
            //Decodifica un string de JSON
            $obj = json_decode(file_get_contents('php://input'));
            $objArr = (array) $obj;
            if (empty($objArr)) {
                $this->response(422, "error", "Nothing to add. Check json");
            } else if (isset($obj->$First_Name)) {
                include './Client.php';
                $saveClient = new Client();
                $saveClient->insertClient($obj->$First_Name, $obj->$Last_Name, $obj->$Title, $obj->$Departament, $obj->$Account_Name, $obj->$Email_Address, $obj->$Fax, $obj->$Phone, $obj->$Address_Street, $obj->$Address_City, $obj->$State, $obj->$Postal_Code);
                $this->response(200, "success", "new record added");
            } else {
                $this->response(422, "error", "The property is not defined");
            }
        } else {
            $this->response(400);
        }
    }

    /**
     * Respuesta al cliente
     * @param int $code Codigo de respuesta HTTP
     * @param String $status indica el estado de la respuesta puede ser "success" o "error"
     * @param String $message Descripcion de lo ocurrido
     */
    function response($code = 200, $status = "", $message = "") {
        http_response_code($code);
        if (!empty($status) && !empty($message)) {
            $response = array("status" => $status, "message" => $message);
            echo json_encode($response, JSON_PRETTY_PRINT);
        }
    }

}
