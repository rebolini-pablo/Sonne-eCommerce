<?php
    require 'splClassLoader.php';
    require 'config/database.php';
    
    $classLoader = new SplClassLoader('Sonne', 'lib\\vendor\\');
    $classLoader->register();

    try{
         $cuponesDAO = new \Sonne\DAO\Cupones\CuponesDAO($config['database']);
         $cuponesVO = new \Sonne\VO\Cupones\CuponesVO();        
        
        // Nuevo
        // $cuponesVO->setCodigo('CU-'.  uniqid());
        // $cuponesVO->setExpira('2013-11-21');
        // $cuponesVO->setValido(false);
        // $cuponesVO->setReferencia(md5('test'));
        // $cuponesDAO->nuevo($cuponesVO);  
        
        // Leer
        // $cuponesVO->setId(9); // Obtener Por ID
        // $cuponesVO->setCodigo('CU-523644e9e11f3'); // Obtener Por Codigo
        // $cupon = $cuponesDAO->obtener($cuponesVO);
        // print_r($cupon);
        
        // Eliminar
        // $cuponesVO->setId(8);
        // $cuponesDAO->eliminar($cuponesVO);
    }
    catch(PDOException $e){
        die($e->getMessage());
    }
    catch(Exception $e){
        die($e->getMessage());
    }