<?php

class bddAccess {
    
    private $host;
    private $dbuser;
    private $dbmdp;
    
    public function connect($host, $dbuser, $dbmdp){
        
        $this->host = $host;
        $this->dbuser = $dbuser;
        $this->dbmdp = $dbmdp;
        
        try{ 
            $pdo= new PDO($this->host, $this->dbuser, $this->dbmdp);
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
        return $pdo;
        
    }
    
}


 
?>