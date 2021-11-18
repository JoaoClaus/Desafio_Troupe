<?php

    class API{
        private $db;

        public function __construct(){  //constroi conexão com SB
            $this->db = new Database;
        }

        public function findbySQL($querry){    //cria a função para pesquisa do DB (get)
            $this->db->querry($querry);        //roda a querry de seleção dos dados
            $set = $this->db->resultSet();     //armazena na variável os valores
            return $set;                       //retorna os valores de seleção do DB
        }

        //cria função para adicionar dados ao DB
        public function addUser($nome, $snome, $cpf, $email, $cel, $cep, $log, $bair, $cid, $uf){   
            $this->db->querry('INSERT INTO dados(nome, sobrenome, cpf, email, celular, cep, logradouro, bairro, 
            cidade, uf) VALUES(:n, :ln, :cpf, :em, :cl, :cp, :lg, :br, :cd, :uf)');

            //binda os valores a serem inseridos no DB com as variáveis de inserção
            $this->db->binds(':n', $nome);
            $this->db->binds(':ln', $snome);
            $this->db->binds(':cpf', $cpf);
            $this->db->binds(':em', $email);
            $this->db->binds(':cl', $cel);
            $this->db->binds(':cp', $cep);
            $this->db->binds(':lg', $log);
            $this->db->binds(':br', $bair);
            $this->db->binds(':cd', $cid);
            $this->db->binds(':uf', $uf);

            //condição para checar retorno do DB
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        //cria função para atualizar dados no DB
        public function updateUser($id, $nome, $snome, $cpf, $email, $cel, $cep, $log, $bair, $cid, $uf){
            $this->db->querry('UPDATE dados SET nome = :n, sobrenome = :ln, cpf = :cpf, email = :em, celular = :cl, cep = :cp, 
            logradouro = :lg, bairro = :br, cidade = :cd, uf = :uf WHERE id = :id');

            //binda os valores a serem atualizados no DB com as variáveis de inserção
            $this->db->binds(':id', $id);
            $this->db->binds(':n', $nome);
            $this->db->binds(':ln', $snome);
            $this->db->binds(':cpf', $cpf);
            $this->db->binds(':em', $email);
            $this->db->binds(':cl', $cel);
            $this->db->binds(':cp', $cep);
            $this->db->binds(':lg', $log);
            $this->db->binds(':br', $bair);
            $this->db->binds(':cd', $cid);
            $this->db->binds(':uf', $uf);

            //condição para checar retorno do DB
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        //cria função para excluir dados no DB
        public function deleteUser(int $id){
            $this->db->querry("DELETE FROM dados WHERE id = :id");
            //binda o valor de id para excluir registro do DB
            $this->db->binds(':id', $id);

            //condição para checar retorno do DB
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        //cria função para selecionar dado especifico no DB
        public function selUserCPF($cpf){
            $this->db->querry('SELECT * FROM dados WHERE cpf = :cp');
            //binda o valor de cpf para presuisa
            $this->db->binds(':cp', $cpf);

            //armazena o valor do DB na variavel row
            $row = $this->db->unico();

            //retorna a variavel row com os valores
            return $row;
        }

        //cria função para selecionar todos os dados do DB
        public function selTudo(){
            $querry = "SELECT * FROM dados ORDER BY nome ASC";
            
            //retorna valores da seleção
            return $this->findbySQL($querry);
        }

        
    }
    //cria a variável API para não necessitar chamar a classe toda vez nos outros arquivos
    $api = new API();