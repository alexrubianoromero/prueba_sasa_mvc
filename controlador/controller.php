<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/prueba_sasa_mvc/modelo/usuario.php';

class Controller{
      
        public function __construct(){
             $this->iniciar();
        }
        
        public function iniciar(){
            try{   
                $this->_usuario = new Usuario();
                if(!isset($_REQUEST['accion'])){
                    $this->procesoUsuarios();
                } 
                else { 
                    switch ($_REQUEST['accion']){
                        case "publicaciones" :
                            $this->procesoPublicaciones($_REQUEST['id']);
                        break; 
                        case "comentarios" :    
                            $this->procesoComentarios($_REQUEST['id']); 
                    }
                }
             } catch (Exception $e) {
                 return $e->getMessage();
             }   
        }


        public function procesoUsuarios(){
            $this->mostrarResultados($this->traerUsuarios(),'Usuario','vista'); 
        }

        public function traerUsuarios(){
            return  $arregloUsuarios = $this->_usuario->traerUsuarios();  
        }     

        public function procesoPublicaciones($id){
            $this->mostrarResultados($this->traerPublicaciones($id),'Publicacion','vista');
        }

        public function traerPublicaciones($id){
            return  $arregloPublicaciones = $this->_usuario->traerPublicaciones($id);  
        }     
        public function procesoComentarios($id){
            $this->mostrarResultados($this->traerComentarios($id),'Comentarios','vista');
        }
        public function traerComentarios($id){
            return  $arregloComentarios = $this->_usuario->traerComentarios($id);  
        }     
        
        public function mostrarResultados($resultado,$titulo,$vista){
            require_once $_SERVER['DOCUMENT_ROOT'] . '/prueba_sasa_mvc/vista/'.$vista.'.php';          
        }
    }
    $instancia= new Controller();
    ?>