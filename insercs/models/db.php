<?php

    class Database{
        private $host = DB_SERVER;
        private $user = DB_USERNAME;
        private $pass = DB_PASSWORD;
        private $dbname = DB_NAME;

        private $dbh;
        private $stmt;
        private $error;

        public function __construct(){
            $connPdo = 'mysql:host='.$this->host.';dbname='.$this->dbname; //cria conexão com DB

            $op = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
            );

            try{
                $this->dbh = new PDO ($connPdo, $this->user, $this->pass, $op);
            }catch(Exception $e){
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }
        
        //cria função para executar querry
        public function querry($sql){   
            $this->stmt = $this->dbh->prepare($sql);
        }

        //cria função para possibilitar binds com o tipo de variável
        public function binds($param, $value, $type = null){
            if(is_null($type)){
                switch(true){
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                    break;
                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                    break;
                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                    break;
                    default:
                        $type = PDO::PARAM_STR;
                    }
                }

            $this->stmt->bindValue($param, $value, $type);
            }

        //cria função para executar ação no DB
        public function execute(){
            return $this->stmt->execute();
        }

        //cria função para retornar pesquisa 
        public function resultSet(){
            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        }

        //cria função para retornar unico valor de pesquisa
        public function unico(){
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_OBJ);
        }

    }
            
        
    