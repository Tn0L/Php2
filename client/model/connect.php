<?php
    class Connect{
        private $conn;
        function __construct(){
            $servername = "localhost";
            $username = "root";
            $password = "";

            try {
                    $this->conn = new PDO("mysql:host=$servername;dbname=shop", $username, $password);
                    $this->conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }
            catch(PDOException $e)
                {
                    echo "Connection failed: " . $e->getMessage();
                }
        }
        function getAll($sql){
            $kq= $this->conn->query($sql);
            $kq= $kq ->fetchAll();
            return $kq;
        }   
    }
?>