<?php
    class Home_Model extends Model{
        parent::__construct;
        echo "This is home model";
    }
    public function test(){
        $a = array("quan", "ao", "giay", "dep");
        return $a;
    }
    public function m_getProducts(){
        $sql = "SELECT * FROM `products`";
        $result = $this->db->conn->query($sql);
        if($result->num_rows > 0){
            $a = $result->fetch_all(MYSQLI_ASSOC);
            return $a;
        }
        return null;
    }

?>