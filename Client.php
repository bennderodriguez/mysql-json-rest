<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Client
 *
 * @author Admin
 */
class Client {

    protected $mysqli;

    const LOCALHOST = 'localhost';
    const USER = 'root';
    const PASSWORD = 'zebralimon10';
    const DATABASE = 'request';

    public function __construct() {
        try {
            //conexión a base de datos
            $this->mysqli = new mysqli(self::LOCALHOST, self::USER, self::PASSWORD, self::DATABASE);
        } catch (mysqli_sql_exception $e) {
            //Si no se puede realizar la conexión
            http_response_code(500);
            exit;
        }
    }

    /**
     * obtiene un solo registro dado su ID
     * @param int $id identificador unico de registro
     * @return Array array con los registros obtenidos de la base de datos
     */
    public function getClient($id = 0) {
        $stmt = $this->mysqli->prepare("SELECT * FROM client WHERE id=? ; ");
        $stmt->bind_param('s', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $clients = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        return $clients;
    }

    /**
     * obtiene todos los registros de la tabla "client"
     * @return Array array con los registros obtenidos de la base de datos
     */
    public function getClients() {
        $result = $this->mysqli->query('SELECT * FROM client');
        $clients = $result->fetch_all(MYSQLI_ASSOC);
        $result->close();
        return $clients;
    }

    /**
     * añade un nuevo registro en la tabla persona
     * @param String $name nombre completo de persona
     * @return bool TRUE|FALSE 
     */
    public function insertClient($First_Name = '', $Last_Name='', $Title='', $Departament='', $Account_Name='', $Email_Address='', $Fax, $Phone='', $Address_Street='', $Address_City='', $State='', $Postal_Code='', $Country='') {
        $stmt = $this->mysqli->prepare("INSERT INTO client "
                . "(First_Name, Last_Name, Title, Departament, Account_Name, Email_Address, Fax, Phone, Address_Street, Address_City, State, Postal_Code, Country) "
                . "VALUES "
                . "(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
        $stmt->bind_param('sssssssssssss', $First_Name, $Last_Name, $Title, $Departament, $Account_Name, $Email_Address, $Fax, $Phone, $Address_Street, $Address_City, $State, $Postal_Code, $Country);
        $r = $stmt->execute();
        $stmt->close();
        return $r;
    }

    /**
     * elimina un registro dado el ID
     * @param int $id Identificador unico de registro
     * @return Bool TRUE|FALSE
     */
    public function deleteClient($id = 0) {
        $stmt = $this->mysqli->prepare("DELETE FROM client WHERE id = ? ; ");
        $stmt->bind_param('s', $id);
        $r = $stmt->execute();
        $stmt->close();
        return $r;
    }

    /**
     * Actualiza registro dado su ID
     * @param int $id Description
     */
    public function updateClient($id, $newName) {
        if ($this->checkID($id)) {
            $stmt = $this->mysqli->prepare("UPDATE client SET name=? WHERE id = ? ; ");
            $stmt->bind_param('ss', $newName, $id);
            $r = $stmt->execute();
            $stmt->close();
            return $r;
        }
        return false;
    }

    /**
     * verifica si un ID existe
     * @param int $id Identificador unico de registro
     * @return Bool TRUE|FALSE
     */
    public function checkID($id) {
        $stmt = $this->mysqli->prepare("SELECT * FROM client WHERE ID=?");
        $stmt->bind_param("s", $id);
        if ($stmt->execute()) {
            $stmt->store_result();
            if ($stmt->num_rows == 1) {
                return true;
            }
        }
        return false;
    }

}
