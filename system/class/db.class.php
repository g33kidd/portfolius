<?php
if (!defined("_VALID_PHP"))
	die('Direct access to this location is not allowed.');
	
Class db extends PDO {
	
	public function __construct() {
		$dsn = "mysql:dbname=codejo_main;host=212.48.68.86";
		try {
			parent::__construct($dsn, "codejo_db", "K7SLqTcQWVy9eckDqu");
		}catch(PDOException $e) {
			echo "<h1>Couldn't connect to Database!</h1><hr><h4>Reason:</h4><pre>{$e}</pre>";
			die;
		}
	}
	
	/* Example usage: db->query($query,PDO::FETCH_ASSOC or PDO::FETCH_BOTH); */
	
	public function query($querystr){
		return(parent::query($querystr));
    }
		
	/* Example usage: db->fetch($query,PDO::FETCH_ASSOC or PDO::FETCH_BOTH); */ 
	
	public function fetch($query,$options=PDO::FETCH_ASSOC/*PDO::FETCH_BOTH*/){
    	return $query->fetch($options);
    }
	
	/* Example usage: db->fetchAll($query, PDO::FETCH_ASSOC or PDO::FETCH_BOTH); */ 
	
	public function fetchAll($query,$options=PDO::FETCH_ASSOC/*PDO::FETCH_BOTH*/){
    	return $query->fetchAll($options);
    }
	
	/* Example usage: db->exec($query); */ 
	
	public function exec($querystr){
    	return $this->exec($querystr);
    }
	
	/* Example usage: db->select("users","id=1","lastname","order by id asc"); */ 
	
	public function select($tablename,$cond=1,$names='*',$suffix=''){  
      	$qr = $this->query("SELECT {$names} from `{$tablename}` where {$cond} {$suffix}");
       	if($qr)
	    	return $qr->fetchAll(PDO::FETCH_ASSOC);
	    return(array());	
    }
	
	/* Example usage: db->insert("users",array(lastname => $lastname ,firstname => $firstname )); */ 
	
	public function insert($tablename,$values){
    	$_names = '(';$_values='(';
		foreach ($values as $k=>$v) {
    		$_names .= "`{$k}`,";
    		$_values .="'{$v}',";
    	}	
    	$_names = substr($_names,0,-1).')';
    	$_values = substr($_values,0,-1).')';
		$sql = "INSERT INTO `{$tablename}` {$_names} VALUES {$_values};";
		return $this->exec($sql); 
    }
    
	/* Example usage: db->insert("users",array(lastname => $lastname ,firstname => $firstname ),"id=1"); */ 
	
    public function update($tablename,$values,$cond){
    	$_nvalues ='';
    	foreach ($values as $k=>$v) $_nvalues .= "`{$k}`='{$v}',";
    	$_nvalues = substr($_nvalues,0,-1);
    	$sql = "UPDATE `{$tablename}` SET {$_nvalues} WHERE  {$cond};"; 
		return $this->exec($sql); 
    }
    /* Example usage: db->delete("users","id=1"); */ 
    public function delete($tablename,$cond){
    	$sql = "DELETE from `{$tablename}` WHERE {$cond};";
		return $this->exec($sql);
    }
	
	/* Example usage: db->lastInsertId(); */ 
	
	public function lastInsertId($name=null){
		return $this->lastInsertId($name);
	}
	
	function errorInfo(){
		return $this->errorInfo();
	}
	
}
?>