<?php

    class Model{
         function __construct(){
            $this->db = new Database();
            $this->c = $this->db->conn;
        }
        public function setQuery($sql){
            $result = $this->db->conn->query($sql);
            return $result;
        }
        public function getQueryOne($sql){
            $result = $this->c->query($sql);
            if($result->num_rows == 1){
                $a = $result->fetch_assoc();
                return $a;
            }
            return null;
        }
        public function getQueryAll($sql){
            $result = $this->c->query($sql);
            if($result->num_rows > 0){
                $a = $result->fetch_all(MYSQLI_ASSOC);
                return $a;
            }
            return null;
        }
        public function doRegister(){
            $user = array(
                
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => sha1($_POST['pass'])
            );
            $sql1 = "SELECT * FROM users WHERE email = '".$user['email']."'";
            $result = $this->getQueryOne($sql1);
            if(is_null($result)){
                $this->addRecord("users", $user);
                return 1;
            }else{
                return 0;
            }
        }
        public function addRecord($table, $params= array()){
            $sql = "INSERT INTO ".$table."(";
            $txtKey = "";
            $txtValue = "";
            $i = 0;
            foreach($params as $key=>$value) {
                if($i<count($params)-1) {
                    $txtKey .= "`".$key."`, ";
                    $txtValue .="'".$value."',";
                }else{
                    $txtKey .= "`".$key."`";
                    $txtValue .= "'".$value."'";
                }
                $i++;
            }

            $sql .= $txtKey;
            $sql .= ") VALUES (";

            $sql .= $txtValue;
            $sql .= ")";
            $this->setQuery($sql);

        }
        public function m_Cart(){
            $c=array();	
            $n=count($_SESSION['cart']);
            $_SESSION['cart']=array_values($_SESSION['cart']);
            $_SESSION['amount']=array_values($_SESSION['amount']);
            for($i=0;$i<$n;$i++){
                $sql="SELECT*FROM products WHERE id=".$_SESSION['cart'][$i];
                $list=$this->getQueryOne($sql);
                array_push($c,$list);
            }
        return $c;    
        }  
        function getRecordByTrash($table, $trash = 0){
            $sql = "SELECT * FROM $table WHERE trash = $trash";
            $result = $this->getQueryAll($sql);

            return $result;
        }
        function getData($table, $limit, $page){
            $sql = "SELECT * FROM $table WHERE trash = 0 LIMIT ". ($page - 1)*$limit. ",". $limit;
            $result = $this->getQueryAll($sql);
            return $result;
        } 
    }
?>