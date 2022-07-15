<?php
    class Backend_Model extends Model{
        function __construct(){
           parent:: __construct();
        }

        function mCatAdd(){
            $cat = array(
                'category_name' => $_POST['cat_name'],
                'parent' => $_POST['parent'],
                'status' => $_POST['status']
            );
            $this->addRecord('category', $cat);
        }
        public function getProductToEdit($id){
            $sql = "SELECT * FROM products WHERE id = '$id'";
            $list = $this->getQueryOne($sql);
            return $list;
        }
        public function getAllDetails(){
            $sql = "SELECT * FROM order_details";
            $list = $this->getQueryAll($sql);
            return $list;
        }
        
        public function getAllOrder_Details($id){
            // $sql = "SELECT * FROM order_details ";
            $sql = "SELECT order_id, product_id,product_name, image, qty, price FROM order_details, products WHERE order_details.product_id = products.id AND order_id = '".$id."'";
            $list = $this->getQueryAll($sql);
            return $list;
        }
        public function removecat($id)
        {
            $conn = mysqli_connect('localhost', 'root', '', 'store');
            mysqli_set_charset($conn, 'utf8');

            $sql = "DELETE FROM category WHERE id = '"."$id'";
            mysqli_query($conn, $sql);
        }
        public function getAllCategory(){
            $sql = "SELECT * FROM category";
            $list = $this->getQueryAll($sql);
            return $list;
        }
       
    }

    
?>