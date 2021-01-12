<?php
    class Usuario{
        public function traerUsuarios(){
            $data = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/users'));
            return $data;
        }
        public function traerPublicaciones($id){
            $data = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/users/'.$id.'/posts'));
            return $data;
        }
        public function traerComentarios($id){
            $data = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/posts/'.$id.'/comments'));
            return $data;
        }
    }
?>