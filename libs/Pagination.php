<?php
    class Pagination{
        var $base_url = '';
        var $total_rows = 0;
        var $per_page = 10;
        var $cur_page = 0;

        public function __construct($params = array()){
            if(count($params) > 0)
            {
                $this->init($params);
            }
        }
        public function init($params = array()){
            if(count($params) > 0)
            {
                foreach($params as $key => $val)
                {
                    if(isset($this->$key)){
                        $this->$key = $val;
                    }
                }
            }
            return $this->total_rows;
        }
        public function createLinks(){
            $end = ceil($this->total_rows / $this->per_page);
            $start = 1;
            $html = "<nav aria-label = 'Page navigation'>";
            $html .= "<ul class = 'pagination'>";
            $class = ($this->cur_page == 1) ? "disabled" : "";

            $html .= "<li><a aria-lable = 'Previous' class = '".$class."' href = '".$this->base_url. ($this->cur_page - 1)."'>
            <span aria-hidden='true'>&laquo;</span></a></li>";

            for($i = $start; $i <= $end; $i++){
                $class = ($this->cur_page == $i)? "active" : "";
                $html .= "<li><a class = '".$class."' href = '".$this->base_url.$i."'>".$i."</a></li>";
            }
            $class = ($this->cur_page == $end) ? "disabled" : "";

            $html .= "<li><a aria-label = 'Next' class = '".$class."'href = '".$this->base_url . ($this->cur_page + 1). "'><span aria-hidden = 'true'>&raquo;</span></a></li>";
            $html .= "</ul>";
            $html .= "</nav>";
            return $html;
        }
        public function createLinkss(){
            $end = ceil($this->total_rows / $this->per_page);
            $start = 1;
            $html = "<section class = 'product spad'><div class = 'container'><div class ='row'><div class = 'product__pagination'>";
            $html .= "<nav aria-label = 'Page navigation'>";
            $html .= "<ul class = 'pagination'>";
            $class = ($this->cur_page == 1) ? "disabled" : "";

            $html .= "<li></li>";

            for($i = $start; $i <= $end; $i++){
                $class = ($this->cur_page == $i)? "active" : "";
                $html .= "<li><a class = '".$class."' href = '".$this->base_url.$i."'>".$i."</a></li>";
            }
            $class = ($this->cur_page == $end) ? "disabled" : "";
            if($this->cur_page == $end)
            {
                // echo "";
            }else{
            $html .= "<li><a aria-label = 'Next' class = '".$class."'href = '".$this->base_url . ($this->cur_page + 1). "'><i class='fa fa-long-arrow-right'></i></a></li>";
            }
            $html .= "</ul>";
            $html .= "</nav>";
            $html .= "</div></div></div></section>";
            return $html;
        }
}
    
?>