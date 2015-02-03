<?php
/**
 * Application core; parses urls and sets up controllers
 */

class App {
    const ABS_PATH = "rszczers.abraham.linuxpl.info/AI/Jez/Cineasinus/public/";
    
    //default conditions
    protected $controller = 'home';    
    protected $method = 'index';    
    protected $params = array();
            
    function __construct() {
        $url = $this->parseUrl();                       
        //If there exsist such controller as the first argument, then
        //pop it and make such; else – make default home controller (home/index)     
        if(file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);            
        }        
        require_once '../app/controllers/' . $this->controller . '.php';
        
        //create new instance of $this->controller;
        // $this->controller = "controllers\\"  . $this->controller;
        $this->controller = new $this->controller;
                
        //set $url[1] as method to execute, if exists.
        if(isset($url[1])) {
            if(method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
                
        
        //following line ommits php warning if $url is null
        $this->params = $url ? array_values($url) : array();        

        call_user_func_array(array($this->controller, $this->method), $this->params);        
    }
    
    //Simple url parsing
    public function parseUrl() {        
        if(isset($_GET['url'])) {
            $url = filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL);
            return $url = explode('/', $url);
        }
    }
}
