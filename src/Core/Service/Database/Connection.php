<?php

namespace Src\Core\Service\Database;

class Connection
{
    private $link;

    public function __construct()
    {
        $this->connect();
    }

    public function connect(){
        try{
			$config = require_once CONFIG_DIR . 'config.php';
 
            $config = $config['database'];
 
            $dsn = 'mysql:host='.$config['host'].';port=3307;dbname='.$config['db_name'].';charset'.$config['charset'];
 
            $this->link = new \PDO($dsn, $config['user'], $config['pass']);
            var_dump($this->link);

        }catch (\Exception $e){
            $e->getMessage();
        }
    }

    public function execute($sql, $values = [])
    {
        $sth = $this->link->prepare($sql);

        return $sth->execute($values);
    }

    public function query($sql, $values = [])
    {
    	var_dump($this->link);

        $sth = $this->link->prepare($sql);

        $sth->execute($values);

        $result = $sth->fetchAll(\PDO::FETCH_ASSOC);

        if($result == false){
            return[];
        }

        return $result;
    }
}