<?php

namespace ToDo;

    class Router{
        private $routes = [];

        public static function load($file){
            $router = new static;
            require $file;
            return $router;
        }

        public function define ($routes){
            $this->routes = $routes;
        }

        public function direct($uri)
        {
            $uriPart=explode('/', $uri);
            if (array_key_exists($uri, $this->routes)) { //tikrina ar egzistuoja uri masyve
                return $this->routes[$uri];
            } else {
                $newUri = $uriPart[0]."/".$uriPart[1];
                if(array_key_exists($newUri, $this->routes)){ //tikrinam ar egzituoja pirma uri dalis masyve
                   //var_dump($newUri);
                    $this->routes[$uri] = $this->routes[$newUri];//perra6om masyvo elemento indeksa su reikiamu id
                    unset($this->routes[$newUri]);
                   // var_dump($this->routes);
                    if(array_key_exists($uri, $this->routes)){//tikrinam ar masyve yra rout'as su reikiamu indeksu
                        return $this->routes[$uri];//grazinam faila
                    }
                }else{
                    return $this->routes[404];//parasom, kad nieko neradom
                }
                return $this->routes[404];
            }
        }
}