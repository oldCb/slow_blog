<?php


class General {
    
    private $pdo;
    private $cat;
    private $result;
    
    public function menu($pdo){
        
        $this->cat = $pdo->query("SELECT * FROM categories");
        
        $this->result = '';
        
        while ($row = $this->cat->fetch()) {
            
            $this->result.= '  <li class="nav-item active">
                                    <a class="nav-link" href="?page=cat&cat='.$row['c_id'].'">'.$row['nom_cat'].'</a>
                                </li>';
        }
        
        return $this->result;
    }
    
}


?>