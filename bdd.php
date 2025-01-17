<?php
class BDD{
    private $mysql;

    function __construct()
    {
        $this -> mysqli = false;
    }

    public function connexion()
    {
        $this -> mysqli = new mysqli('172.16.10.40','sio-tp2','Sio1TP2.56', 'rpgquest' );
        if($this -> mysqli == false)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    public function deconnexion()
    {
        if($this -> mysqli != false)
        {
            $this -> mysqli -> close();
        }
    }

    public function requete()
    {

    }
}
?>