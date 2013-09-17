<?php
namespace Sonne\DAO\Base;
/**
 * Description of BaseDAO
 *
 * @author Rebolini Pablo <rebolini.pablo@gmail.com>
 */
class BaseDAO{
    
    private static $dbHandler;
    private $statement;
    
    protected $error;
    
    public function __construct(array $dbConfig) {
        try{
            $_dsn = "mysql:host={$dbConfig['host']};dbname={$dbConfig['name']}";        
            $_opt = [
                \PDO::ATTR_PERSISTENT => true, 
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ];
            
            self::$dbHandler = new \PDO($_dsn, $dbConfig['user'], $dbConfig['pass'],$_opt);
        }
        catch(PDOException $e){
            $this->error = $e->getMessage();
        }
    }

    protected function query($query){
        $this->statement = self::$dbHandler->prepare($query);
    }  

    protected function bind($param, $value, $type = null){
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = \PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = \PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = \PDO::PARAM_NULL;
                    break;
                default:
                    $type = \PDO::PARAM_STR;
            }
        }
        $this->statement->bindValue($param, $value, $type);
    }
    
    protected function execute(){
       return $this->statement->execute();
    }    
    
    protected function resultset(){
        $this->execute();
        return $this->statement->fetchAll(\PDO::FETCH_ASSOC);
    }    

    protected function single(){
        $this->execute();
        return $this->statement->fetch(\PDO::FETCH_ASSOC);
    }    

    protected function rowCount(){
        return $this->statement->rowCount();
    }    
    
    protected function lastInsertId(){
        return self::$dbHandler->lastInsertId();
    }  
    
    protected function beginTransaction(){
        return self::$dbHandler->beginTransaction();
    }    
    protected function endTransaction(){
        return self::$dbHandler->commit();
    }

    protected function cancelTransaction(){
        return self::$dbHandler->rollBack();
    }
    
    protected function debugDumpParams(){
        return self::$dbHandler->debugDumpParams();
    }    
    
}

?>
