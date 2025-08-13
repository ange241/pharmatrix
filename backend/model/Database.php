<?php
class Database {
    private $dsn;
    private $username;
    private $pdo;
    private $password;

    public function __construct(){
        $this->dsn= 'mysql:host=localhost;dbname=pharmatrixdb;port=3306;charset=utf8';
        $this->username= 'root';
        $this->password= '';
    }

    public function getConnect() {
        if($this->pdo === null) {
            try{
                $this->pdo= new PDO($this->dsn, $this->username, $this->password);//creation d'une chaine de connexion
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//parametres de la chaine de connexion
                $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);//parametres de la chaine de connexion
            }
            catch(Exception $ex) {
                die('Echec de connection : ' . $ex->getMessage());
            }
        }
        return $this->pdo;
    }

    public function prepare($sql, $params= null) {
        $req= $this->getConnect()->prepare($sql);
        if(is_null($params)) {
            $req->execute();
        }
        else{
            $req->executet($params);
        }
        return $req;
    }
    public function getDatas($req, $one= true) {
        $datas= null;
        if($one == true) {
            $datas= $req->fetch();
        }
        else{
            $datas= $req->fetchAll();
        }
        return $datas;
    }
}

// $pdo= new PDO('mysql:host=localhost;dbname=pharmatrixdb;port=3306;charset=utf8', 'root'); //entrer ou saisir des parametres de la chaine de connexion
// $req= $pdo->prepare('selec * from etudiant');  //prepare les parametres de la chaine de connexion
// $req->execute(); //execute la chaine de connexion
// $req->setFetchMode(PDO::FETCH_OBJ);
// $datas= $req->fetchAll();


?>