<?php

namespace Kawschool;

    class Grupo{

        private $config;
        private $cn = null;

        public function __construct() {

            $this->config = parse_ini_file(__DIR__.'/../config.ini'); //devuelve el contenido del archivo
            /*print '<pre>';
            print_r($this->config);*/

            $this->cn =new \PDO($this->config['dns'],$this->config['usuario'],$this->config['clave'],array(
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            ));
        }

        public function registrar($_params){
            $sql = "INSERT INTO `cursos`(`categoria_id`, `nombre`, `precio`, `imagen`, `short_desc`, `descripcion`) VALUES (:categoria_id, :nombre, :precio, :imagen, :short_desc, :descripcion)";
    
            $resultado = $this->cn->prepare($sql);//es la variable que debe leer la consulta
    
            $_array = array(
                ":categoria_id"=>$_params['categoria_id'], 
                ":nombre"=>$_params['nombre'],
                ":precio"=>$_params['precio'], 
                ":imagen"=>$_params['imagen'],
                ":short_desc"=>$_params['short_desc'],
                ":descripcion"=>$_params['descripcion']
            );
    
            if($resultado->execute($_array))
                return true;
    
            return false;
        }

        public function actualizar($_params){
            $sql = "UPDATE `cursos` SET `categoria_id`=:categoria_id,`nombre`=:nombre,`precio`=:precio,`imagen`=:imagen,`short_desc`=:short_desc,`descripcion`=:descripcion WHERE `id`=:id";
    
            $resultado = $this->cn->prepare($sql);//es la variable que debe leer la consulta
    
            $_array = array(
                ":categoria_id"=>$_params['categoria_id'], 
                ":nombre"=>$_params['nombre'],
                ":precio"=>$_params['precio'], 
                ":imagen"=>$_params['imagen'],
                ":short_desc"=>$_params['short_desc'],
                ":descripcion"=>$_params['descripcion'],
                ":id"=>$_params['id']
            );
    
            if($resultado->execute($_array))
                return true;
    
            return false;
        }

        public function eliminar($id){

            $sql="DELETE FROM `cursos` WHERE `id`=:id";//consulta

            $resultado = $this->cn->prepare($sql);//es la variable que debe leer la consulta
    
            $_array = array(
            
                ":id"=>$_params['id']
            );
    
            if($resultado->execute($_array))
                return true;
    
            return false;
        }

        public function mostrar(){
            $sql="SELECT cursos.id, nombre,precio,imagen,short_desc,descripcion,status,categoria,estado FROM cursos
            INNER JOIN categorias
            ON cursos.categoria_id = categorias.id ORDER BY cursos.id DESC
            ";//consulta

            $resultado = $this->cn->prepare($sql);//es la variable que debe leer la consulta
    
            if($resultado->execute())
            return $resultado->fetchAll();

            return false;
        }

        public function mostrarPorId($id){
        
            $sql="SELECT * FROM `cursos` WHERE `id`=:id";//consulta

            $resultado = $this->cn->prepare($sql);
            $_array = array(
                ":id" =>  $id
            );
    
            if($resultado->execute($_array))
                return $resultado->fetch();
    
                return false;
        }
    }

?>