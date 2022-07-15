<?php
    class Frontend_Model extends Model{
        function __construct(){
           parent:: __construct();
        }

        function testFrontendModel(){
            $a = array("hello", "xin chao", "ciao");
            return $a;
        }
        // lay menu
        public function getAllMenu(){
            $sql = "SELECT * FROM menu WHERE status = 1";
            $list = $this->getQueryAll($sql);
            return $list;
        }
        public function getCategory(){
            $sql =  "SELECT * FROM category WHERE status = 1";
            $list = $this->getQueryAll($sql);
            return $list;
        }
        public function getAllProduct(){
            $sql = "SELECT * FROM products WHERE status = 1";
            $list = $this->getQueryAll($sql);
            return $list;
        }
        public function getAllRelatedProduct(){
            $sql = "SELECT * FROM products LIMIT 0,4";
            $list = $this->getQueryAll($sql);
            return $list;
        }
        public function getBestSellProducts(){
			$sql="SELECT *
			FROM products
			WHERE status = 1 AND TRASH=0
			ORDER BY sold DESC LIMIT 0,3";
			$list=$this->getQueryAll($sql);
			return $list;
		}
        public function getAllProducts(){
            $sql = "SELECT * FROM products WHERE status = 1 limit 0,3";
            $list = $this->getQueryAll($sql);
            return $list;
        }

        public function getNewProduct(){
            $sql = "SELECT * FROM products WHERE status = 1 ORDER BY created_at DESC ";
            $list = $this->getQueryAll($sql);
            return $list;
        }
        public function getSaleProducts(){
			$sql ="SELECT * FROM products WHERE sale = 1 limit 0,8";
			$list=$this->getQueryAll($sql);
			return $list;
		}
        public function getSale(){
			$sql ="SELECT * FROM products WHERE sale = 1 limit 0,3";
			$list=$this->getQueryAll($sql);
			return $list;
		}

        public function getProductById($id) {
            $sql = "SELECT * FROM products WHERE id=".$id;
            $list = $this->getQueryOne($sql);
            return $list;
        }
        public function runlogin(){
            $u = $_POST["user"];
            $p = $_POST["pass"];
            $p = sha1($p);
            $sql = "SELECT * FROM users WHERE status = 1 AND email = '$u' AND password ='$p'";
            $r = $this->getQueryOne($sql);  
            return $r;
        }
        public function getProductByCategory($category){
			if($category!='all') {

				$sql="SELECT * FROM products WHERE status = 1 and product_category = '$category'";
			}
			else {
				$sql="SELECT * FROM products WHERE status = 1 ";
			}
			$list=$this->getQueryAll($sql);
			return $list;
		}
    }


?>