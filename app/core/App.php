<?php
class App {
    
    protected $controller = 'home';
    
    protected $method = 'index';
    
    protected $params = array();
            
    function __construct() {
        $this->parseURL();
    }

    public function parseURL() {        
        if(isset($_GET['url'])) {
            var_dump($_GET);
        } else {
            echo "chuj!";
        }
    }
}
