<?php

session_start();

if($_SERVER['REQUEST_METHOD'] ==='POST'){

    require 'funciones.php';
    require '../admin/autoload.php';

    if(isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])){
        $cliente = new Kawschool\Cliente;
    
        $_params = array(
            'nombre' => $_POST['nombre'],
            'apellidos' => $_POST['apellidos'],
            'email' => $_POST['email'],
            'telefono' => $_POST['telefono'],
            'direccion' => $_POST['direccion'],
            'cp' => $_POST['cp'],
            'ciudad' => $_POST['ciudad'],
            'estado' => $_POST['estado'],
            'comentario' => $_POST['comentario'],
            'nom_tarjetaH' => $_POST['nom_tarjetaH'],
            'num_tarjeta' => $_POST['num_tarjeta'],
            'cvc' => $_POST['cvc'],
            'exp_cvc' => $_POST['exp_cvc']
        );
    
        $cliente_id = $cliente->registrar($_params);
    
        $pedido = new Kawschool\Pedido;
    
        $_params = array(
            'cliente_id'=>$cliente_id,
            'total' => calcularTotal(),
            'fecha' => date('Y-m-d')
        );
        
        $pedido_id =  $pedido->registrar($_params);

        foreach($_SESSION['carrito'] as $indice => $value){
            $_params = array(
                "pedido_id" => $pedido_id,
                "productos_servicios_id" => $value['id'],
                "precio" => $value['precio'],
                "cantidad" => $value['cantidad'],
            );

            $pedido->registrarDetalle($_params);
        }

        $_SESSION['carrito'] = array();

        header('Location: gracias.php');

    }

}