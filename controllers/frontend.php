<?php

    class Frontend extends Controller{
        
        public function __construct(){
            parent::__construct();
            $this->p = new Pagination();
            
        }
        function index(){
            $this->model = new Frontend_Model;
            $data = array(
                'products' => $this->model->getAllProduct(),
                'productss' => $this->model->getAllProducts(),
				'best' => $this->model->getSaleProducts()??[],
                'seller'=> $this->model->getBestSellProducts(),
                'sale'=> $this->model->getSale(),
            );
            $this->load->view("frontend/index", $data);
        }
        function greeting($name, $age){
            echo "xin chào ".$name." Tuoi: ".$age;
        }
        function getFrontendModel(){
            $data['list'] = $this->model->testFrontendModel();
			print_r($data['list']);
        }

        function shop_grid($page) {
            $cat = $this->model->getRecordByTrash('products', 0);
            $n = count($cat);
            $config = array(
                'base_url' => "http://localhost/TH_1/index.php/frontend/shop_grid/",
                'total_rows' => $n,
                'per_page' => 9,
                'cur_page' => $page
            );
            $this->p->init($config);
            $this->model = new Frontend_Model;
            $data = array(
                'products' => $this->model->getAllProduct(),
                'newproducts' => $this->model->getNewProduct(),
				'best' => $this->model->getSaleProducts()??[]
            );
            $data['allCat'] = $cat;
            $data['category'] = $this->model->getData('products', $config['per_page'], $page);  
            $data['paginator'] = $this->p->createLinkss(); 
            $this->load->view("frontend/shop-grid", $data);
        }

        function shop_details($id) {
            $this->model = new Frontend_Model;
            $data = array(
                'details' => $this->model->getProductById($id),
                'Related' => $this->model->getAllRelatedProduct(),
                'products' => $this->model->getAllProduct(),
            );
            $this->load->view("frontend/shop-details", $data);
        }
        // function shopping_cart() {
        //     $this->model = new Frontend_Model;
        //     $this->load->view("frontend/shoping-cart");
        // }
        function checkout() {
            $this->model = new Frontend_Model;
            $data=array();
            if(!isset($_SESSION['cart'])){
                $data['cart']=null;
            }
            else{
                $data['cart']=$this->model->m_Cart();
            }
            $this->load->view("frontend/checkout", $data);
        }
        function blog_details() {
            $this->model = new Frontend_Model;
            $this->load->view("frontend/blog-details");
        }
        function blog() {
            $this->model = new Frontend_Model;
            $this->load->view("frontend/blog");
        }
        function contact() {
            $this->model = new Frontend_Model;
            $this->load->view("frontend/contact");
        }
        function login() {
            $this->model = new Frontend_Model;
            $this->load->view("frontend/login");
        }
        function register() {
            $this->model = new Frontend_Model;
            $this->load->view("frontend/register");
        }
        function runlogin(){
            
            $r = $this->model->runlogin();
            if(count($r) > 0){
                $_SESSION['user'] = $r['name'];
                $_SESSION['email'] = $r['email'];
                $_SESSION['id'] = $r['id'];

                header('Location: http://localhost/TH_1/index.php');
            }else{
                header('Location: http://localhost/TH_1/index.php/frontend/login');
            }
        }
        public function runregister(){
            $data = array(
                'page' => "frontend/register"
            );
            $this->load->view("frontend/index", $data);
        }
        public function doRegister(){   
            $this->model->doRegister();
            header('Location: http://localhost/TH_1/index.php/frontend/login');
        }
        public function logout(){
            // unset($_SESSION['user']);
            session_destroy();
            header('Location: http://localhost/TH_1/index.php');
            
        }
        public function addToCart($id) {
            if(isset($_SESSION['user'])){

                if(!isset($_SESSION['cart'])){
                    $_SESSION['cart'] = array();
                    $_SESSION['amount']=array();
                    $_SESSION['number_of_item']=0;
                }
                $k=array_search($id,$_SESSION['cart'],$id);
                if($k===false){
                    array_push($_SESSION['cart'],$id);
                    array_push($_SESSION['amount'], $_POST['quantity']);
                    $_SESSION['number_of_item']++;
                }
                else{
                    $_SESSION['amount'][$k]+= $_POST['quantity'];
                }
                header('Location: http://localhost/TH_1/index.php/frontend/cart');
            }
            else{
                header('Location: http://localhost/TH_1/index.php/frontend/login');

            }
        }
        function cart() {
            $data=array();
            if(!isset($_SESSION['cart'])){
                $data['cart']=null;
            }
            else{
                $data['cart']=$this->model->m_Cart();
            }
            $this->load->view("frontend/cart",$data);
        }

        function removeToCart($id){
            
            $k=array_search($id,$_SESSION['cart']);
            if($k== 0 || $k){
                unset($_SESSION['cart'][$k]);
                unset($_SESSION['amount'][$k]);
                $_SESSION['number_of_item']--;
            }
            header('Location: http://localhost/TH_1/index.php/frontend/cart');
        }
        
        function category($category){
            $this->model = new Frontend_model;

            $data = array(
                'products' => $this->model -> getProductByCategory($category)??[],
                'productss' => $this->model->getAllProducts(),
                'best' => $this->model->getSaleProducts()??[],
                'seller'=> $this->model->getBestSellProducts(),
                'sale'=> $this->model->getSale(),
                )??[];


            $this->load->view("frontend/index", $data); 
        }
        function buy(){
            $conn = mysqli_connect('localhost', 'root', '', 'store');
            mysqli_set_charset($conn, 'utf8');
            if(isset($_SESSION['cart']))
            {
                $data['cart']=$this->model->m_Cart();
                if(isset($_POST['name'])){
                    $id_user = $_SESSION['id'];
                    $name = $_POST['name'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
        
                    $query = mysqli_query($conn, "INSERT INTO orders(customer_id,fullname,address,email,phone) VALUES ($id_user, '$name', '$address', '$email', '$phone')");
        
                    if($query){
                        $order_id = mysqli_insert_id($conn);
                        if(isset($data['cart'])){
                            foreach($data['cart'] as $value){
                                $k=array_search($value['id'],$_SESSION['cart']);
                                $q = $_SESSION['amount'][$k];
                                $id = $value['id'];
                                    mysqli_query($conn, "INSERT INTO order_details(order_id,product_id,qty) VALUES ($order_id, $id, $q)");
                                }
                                $_SESSION['number_of_item'] = 0;
            
                            unset($_SESSION['cart']);
                        }
                        
                    }
                }
            }
            header('Location: http://localhost/TH_1/index.php/frontend/checkout');
        }
    }

?>