<?php
    require 'splClassLoader.php';
    require 'config/database.php';
    
    $classLoader = new SplClassLoader('Sonne', 'lib\\vendor\\');
    $classLoader->register();

    try{
         $clientesDAO = new \Sonne\DAO\Clientes\ClientesDAO($config['database']);
         $clientesVO = new \Sonne\VO\Clientes\ClientesVO();        
        
        // Nuevo
         $clientesVO->setNombre('Bombita');
         $clientesVO->setApellido('Rodriguez');
         $clientesVO->setDni('4225147');
         $clientesVO->setEmail('bombita@montoneros.org');
         $clientesVO->setTelefono('4425845');
         $clientesVO->setDireccion('Peron 554');
         $clientesVO->setReferencia(md5('test'));

         $clientesDAO->nuevo($clientesVO);  
        
        // Leer
//         $clientesVO->setId(9); // Obtener Por ID
//         $clientesVO->setCodigo('CU-523644e9e11f3'); // Obtener Por Codigo
//         $cupon = $clientesDAO->obtener($clientesVO);
//         print_r($cupon);
        
        // Eliminar
//         $clientesVO->setId(8);
//         $clientesDAO->eliminar($clientesVO);
    }
    catch(PDOException $e){
        die($e->getMessage());
    }
    catch(Exception $e){
        die($e->getMessage());
    }