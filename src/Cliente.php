<?php

namespace Kawschool;

class Cliente{

    private $config;
    private $cn = null;

    public function __construct(){

        $this->config = parse_ini_file(__DIR__.'/../modelo/config.ini') ;

        $this->cn = new \PDO( $this->config['dns'], $this->config['usuario'],$this->config['clave'],array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        ));
        
    }

    public function registrar($_params){
        $sql = "INSERT INTO `clientes`(`nombre`, `apellidos`, `email`, `telefono`,`direccion`,`cp`,`ciudad`,`estado`, `comentario`,`nom_tarjetaH`,`num_tarjeta`,`cvc`,`exp_cvc`) 
        VALUES (:nombre,:apellidos,:email,:telefono,:direccion,:cp,:ciudad,:estado,:comentario,:nom_tarjetaH,:num_tarjeta,:cvc,:exp_cvc)";

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ":nombre" => $_params['nombre'],
            ":apellidos" => $_params['apellidos'],
            ":email" => $_params['email'],
            ":telefono" => $_params['telefono'],
            ":direccion" => $_params['direccion'],
            ":cp" => $_params['cp'],
            ":ciudad" => $_params['ciudad'],
            ":estado" => $_params['estado'],
            ":comentario" => $_params['comentario'],
            ":nom_tarjetaH" => $_params['nom_tarjetaH'],
            ":num_tarjeta" => $_params['num_tarjeta'],
            ":cvc" => $_params['cvc'],
            ":exp_cvc" => $_params['exp_cvc']
        );

        if($resultado->execute($_array))
            return $this->cn->lastInsertId();

        return false;
    }


}