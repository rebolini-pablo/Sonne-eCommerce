<?php
    require 'splClassLoader.php';
    require 'config/database.php';
    
    $classLoader = new SplClassLoader('Sonne', 'lib\\vendor\\');
    $classLoader->register();

    try{
         $categoriasDAO = new \Sonne\DAO\Categorias\CategoriasDAO($config['database']);
         $categoriasVO = new \Sonne\VO\Categorias\CategoriasVO();        
        
        // Nuevo
        // $categoriasVO->setTitulo('Categoria de ejemplo');
        // $categoriasVO->setTipo('parent');
        // $categoriasVO->setReferencia(md5('test'));
        // $categoriasDAO->nuevo($categoriasVO);  
        
        // Leer
         //$categoriasVO->setId(6); // Obtener Por ID
         //$categoriasVO->setTipo(''); // Obtener Por tipo
         //$categoriasVO->setReferencia(md5('test')); // obtener por ref 
         //$categoria = $categoriasDAO->obtener($categoriasVO);
         //print_r($categoria);
        
        // Eliminar
         $categoriasVO->setId(5);
         $categoriasDAO->eliminar($categoriasVO);
    }
    catch(PDOException $e){
        die($e->getMessage());
    }
    catch(Exception $e){
        die($e->getMessage());
    }

?>
