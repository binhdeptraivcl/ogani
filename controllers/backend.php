<?php

    class Backend extends Controller{
        
        public function __construct(){
            parent::__construct();
            $this->p = new Pagination();
            
        }
        function index(){
            $data = array();
            $data['page'] = "backend/pages/home";
            $this->load->view('backend/index', $data);
        }
        function cartList($page){ // quản lý sản phẩm
            $cat = $this->model->getRecordByTrash('products', 0);
            $n = count($cat);
            $config = array(
                'base_url' => "http://localhost/TH_1/index.php/backend/cartList/",
                'total_rows' => $n,
                'per_page' => 10,
                'cur_page' => $page,
            );
            $this->p->init($config);
            $data = array();
            $data['allCat'] = $cat;
            $data['category'] = $this->model->getData('products', $config['per_page'], $page);
            $data['page'] = "backend/pages/product/list";   
            $data['paginator'] = $this->p->createLinkss(); 
            $this->load->view("backend/index", $data);
        } //
        function removeToProduct($id){ //xóa sản phẩm
            $conn = mysqli_connect('localhost', 'root', '', 'store');
            mysqli_set_charset($conn, 'utf8');

            $sql = "DELETE FROM products WHERE id = '"."$id'";
            mysqli_query($conn, $sql);
            header('Location: http://localhost/TH_1/index.php/backend/cartList/1');
        }
        function removecate($id){
           $this->model->removecat($id);
            header('Location: http://localhost/TH_1/index.php/backend/cateList/1');
        }
        function cateAdd(){
            $data = array(
                'page' => "backend/pages/category/addcate",
                'category' => $this->model->getAllCategory(),
            );
            $this->load->view("backend/index", $data);
        }
        function catAdd(){
            $data['page'] = "backend/pages/product/add";
            $this->load->view("backend/index", $data);
        }
        function editAdd($id){ //edit sản phẩm
            $data = array(
                'page' => "backend/pages/product/edit",
                'product' => $this->model->getProductToEdit($id),
                'id' => $id,
            );
            $this->load->view("backend/index", $data);
        }
        function editcate($id){ //edit category
            $data = array(
                'page' => "backend/pages/category/editcate",
                'product' => $this->model->getProductToEdit($id),
                'category' =>$this->model->getAllCategory(),
                'id' => $id,
            );
            $this->load->view("backend/index", $data);
        }
        function userList($page){ // quản lí người dùng
            $cat = $this->model->getRecordByTrash('users', 0);
            $n = count($cat);
            $config = array(
                'base_url' => "http://localhost/TH_1/index.php/backend/userList/",
                'total_rows' => $n,
                'per_page' => 10,
                'cur_page' => $page,
            );
            $this->p->init($config);
            $data = array();
            $data['allCat'] = $cat;
            $data['category'] = $this->model->getData('users', $config['per_page'], $page);
            $data['page'] = "backend/pages/user/user";   
            $data['paginator'] = $this->p->createLinkss(); 
            $this->load->view("backend/index", $data);
        }
        function cateList($page){ // quản lý danh mục
            $cat = $this->model->getRecordByTrash('category', 0);
            $n = count($cat);
            $config = array(
                'base_url' => "http://localhost/TH_1/index.php/backend/cateList/",
                'total_rows' => $n,
                'per_page' => 10,
                'cur_page' => $page,
            );
            $this->p->init($config);
            $data = array();
            $data['allCat'] = $cat;
            $data['category'] = $this->model->getData('category', $config['per_page'], $page);
            $data['page'] = "backend/pages/category/catelist";   
            $data['paginator'] = $this->p->createLinkss(); 
            $this->load->view("backend/index", $data);
        }
        function ordersList($page){ // quản lý đơn hàng
            $cat = $this->model->getRecordByTrash('orders', 0);
            $n = count($cat);
            $config = array(
                'base_url' => "http://localhost/TH_1/index.php/backend/ordersList/",
                'total_rows' => $n,
                'per_page' => 10,
                'cur_page' => $page,
            );
            $this->p->init($config);
            $data = array();
            $data['allCat'] = $cat;
            $data['category'] = $this->model->getData('orders', $config['per_page'], $page);
            $data['page'] = "backend/pages/order/orders";   
            $data['paginator'] = $this->p->createLinkss(); 
            $this->load->view("backend/index", $data);
        }
        function order_detail($id){ //quản lý sản phẩm đơn hàng
            $this->model = new Backend_Model;
            $data = array(
                'details' => $this->model->getAllDetails(),
                'page' => "backend/pages/order/order_details",
                'products' => $this->model->getAllOrder_Details($id),
                'id' => $id,
            );
            $this->load->view("backend/index", $data);
        }
        function add()
        {
            $conn = mysqli_connect('localhost', 'root', '', 'store');
            mysqli_set_charset($conn, 'utf8');

            if(isset($_POST['name']))
            {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $category = $_POST['category'];
                $status = $_POST['status'];

                if(isset($_FILES['image'])){
                    $file = $_FILES['image'];
                    $file_name = $file['name'];

                    move_uploaded_file($file['tmp_name'], 'view/backend/img/'.$file_name);
                }

                $sql = "INSERT INTO products(product_name,product_category,image,price,status) VALUES('$name', '$category', '$file_name', $price, $status)";

                $query = mysqli_query($conn, $sql);

                if($query)
                {
                    header('Location: http://localhost/TH_1/index.php/backend/cartList/1');
                }else{
                    echo "Lỗi";
                }
            }
        }
        function addcate()
        {
            $conn = mysqli_connect('localhost', 'root', '', 'store');
            mysqli_set_charset($conn, 'utf8');

            if(isset($_POST['name']))
            {
                $name = $_POST['name'];
                $category = $_POST['category'];
                $status = $_POST['status'];

                $sql = "INSERT INTO category(category_name,parent,status) VALUES('$name', '$category', $status)";

                $query = mysqli_query($conn, $sql);

                if($query)
                {
                    header('Location: http://localhost/TH_1/index.php/backend/cateList/1');
                }else{
                    echo "Lỗi";
                }
            }
        }
        function edit($id)
        {
            $conn = mysqli_connect('localhost', 'root', '', 'store');
            mysqli_set_charset($conn, 'utf8');

            if(isset($_POST['name']))
            {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $category = $_POST['category'];
                $status = $_POST['status'];

                if(isset($_FILES['image'])){
                    $file = $_FILES['image'];
                    $file_name = $file['name'];

                    move_uploaded_file($file['tmp_name'], 'view/backend/img/'.$file_name);
                }
                $sql = "UPDATE products SET id = '".$id."', product_name = '".$name."', product_category = '".$category."', image = '".$file_name."', price = '".$price."', status = '".$status."' WHERE id = '".$id."'";

                $query = mysqli_query($conn, $sql);

                if($query)
                {
                    header('Location: http://localhost/TH_1/index.php/backend/cartList/1');
                }else{
                    echo "Lỗi";
                }
            }
        }
        function editcategory($id)
        {
            $conn = mysqli_connect('localhost', 'root', '', 'store');
            mysqli_set_charset($conn, 'utf8');

            if(isset($_POST['name']))
            {
                $name = $_POST['name'];
                $category = $_POST['category'];
                $status = $_POST['status'];

                $sql = "UPDATE category SET id = '".$id."', category_name = '".$name."', parent = '".$category."', status = '".$status."' WHERE id = '".$id."'";

                $query = mysqli_query($conn, $sql);

                if($query)
                {
                    header('Location: http://localhost/TH_1/index.php/backend/cateList/1');
                }else{
                    echo "Lỗi";
                }
            }
        }
        
        
    }
?>