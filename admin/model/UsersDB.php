<?php
require_once 'Database.php';

class UserDB {
    private $db;
    private $tableid;
    private $tablename;

    public function __construct() {
        $this->db= new Database();
        $this->tablename= 'users';
        $this->tableid= 'id_users'; //users_id
    }

    public function create($first_name, $last_name, $phone, $photo, $location, $email, $password, $role) {
        // avec la methode 'values' on aura:
        // 'paramètres anonymes'$sql= "insert into $this->tablename (first_name, last_name, phone, location, email, password, role) values(?, ?, ?, ?, ?, ?, ?, ?)";
        // *'paramètres nommées'$sql= "insert into $this->tablename (first_name, last_name, phone, location, email, password, role) values(:?, :?, :?, :?, :?, :?, :?, :?)";
        $sql= "insert into $this->tablename set first_name=?, last_name=?, phone=?, location=?, email=?, password=?, role=?";
        $params= array($first_name, $last_name, $phone, $photo, $location, $email, $password, $role);
        //*'paramètres nommées'
        // $params= array (
        // 'first_name'= $first_name;
        // 'last_name'= $last_name; etc...
        // ); 

        $this->db->prepare($sql, $params);
    }

     public function update($id, $first_name, $last_name, $phone, $photo, $location, $email, $password, $role) { //id_users = id
        $sql= "update $this->tablename set first_name=?, last_name=?, phone=?, location=?, email=?, password=?, role=? where $this->tableid=?";
        $params= array($first_name, $last_name, $phone, $photo, $location, $email, $password, $role, $id);
        $this->db->prepare($sql, $params);
    }

    public function delete($id) { //id_users = id
        $sql= "delete from $this->tablename   where $this->tableid=?";
        $params= array($id);
        $this->db->prepare($sql, $params);
    }

    public function read($id) { //id_users = id
        $sql= "*select* from $this->tablename   where $this->tableid=?";
        $params= array($id);
        $req= $this->db->prepare($sql, $params);
        return $this->db->getData($req, true);
    }

    public function readAll() { //recuperation de tous les elements
        $sql= "*select* from $this->tablename order by $this->tableid desc";
        $params= null;
        $req= $this->db->prepare($sql, $params);
        return $this->db->getData($req, false);
    }

    public function readConnexion($email, $password) { // pour les pages de connexion
        $sql= "*select* from $this->tablename where email=? and password=?";
        $params= array($email, $password);
        $req= $this->db->prepare($sql, $params);
        return $this->db->getData($req, true);
    }
}
?>