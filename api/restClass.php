<?php    
class restClass{
    private $requestMethod;
    private $requestUri;
    private $resource;
    private $name;

    public function __construct(){
        $this->setData();
        $this->requestDataHandler();

    }

    public function setData(){
        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
        $this->requestUri = $_SERVER['REQUEST_URI'];
    }

    public function requestDataHandler(){
        $this->resource = array_shift($this->requestUri);
        if($this->resource != ''){
            $this->name = array_shift($this->requestUri);
            if(empty($this->name)){
                $this->handle_base(); //if www.example.com handle base name
            }
            else{
                $this->handle_name();//if www.example.com/admin etc do something
            }
        }
    }

    public function handle_base(){
        include("include/main.php");
    }

    public function handle_name(){
        return " ";
    }

}
?>