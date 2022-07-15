<?php
    class Home extends Controller{
        public function __construct(){
            parent:: __construct();
            echo "This is home controller";
        }
        public function index(){
            $this->model = new Home_Model;
            $data['new_products'] = $this->model->m_getProducts();
            $this->load->view("shop/index", $data);
        }
    }
?>