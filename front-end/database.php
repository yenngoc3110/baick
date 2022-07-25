<?php 
    class database{
        public $conn;
        protected $severName  = "localhost";
        protected $userName = "root";
        protected $passWord = "";
        protected $databaseName = "data";

        function __construct()
        {
            try {
                $this->conn = new PDO("mysql:host=$this->severName;dbname=$this->databaseName", $this->userName, $this->passWord);
                // set the PDO error mode to exception
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
              } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
              }
        }
        //selectall
        function SelectAll($sql){
          try{
            $query = $this->conn->prepare($sql);
            $query->execute();
            $result =  $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
          }catch(Exception $e){
            echo "CÓ LỖI XẢY RA!";die;
          }
            
        }
        //select row
        function SelectRow($sql){
          try{
            $query = $this->conn->prepare($sql);
            $query->execute();
            $result =  $query->rowCount();
          }
          catch(Exception $e){
            echo "CÓ LỖI XẢY RA!";die;
          }
          return $result;
        }
        //import
        function ExecuteSQL($sql){
          try{
            $query = $this->conn->prepare($sql);
            return $query->execute();
          }catch(Exception $e){
            echo "CÓ LỖI XẢY RA!";die;
          }
        }
        //select sau khi insert
        function lastInsertID($sql){
          try{
            $query = $this->conn->prepare($sql);
            $query->execute();
            $id_order = $this->conn->lastInsertId();
            return $id_order;
          }catch(Exception $e){
            echo "CÓ LỖI XẢY RA!";die;
          }
        }
    }
?>