<?php
// Connect to thd Database and execute the query

class Database
{
    public $connection;
    public $statement;

    public   function __construct($config, $username = 'ondimu', $password = 'ondimu12') {
        $dsn = 'mysql:' . http_build_query($config, '', ';');
        // dd($dsn);

        // $dsn = "mysql:
        //     host={$config['host']};
        //     port={$config['port']};
        //     dbname={$config['dbname']};
        //     charset={$config['utf8mb4']}";
    
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

    }

    public function query($query,$params = [])
    {

        $this->statement = $this->connection->prepare($query);
        // $statement = $this->connection->prepare($query);

        $this->statement->execute($params);
        // $statement->execute($params);

        return $this;
        // return $statement;

    }

    public function find(){
        return $this->statement->fetch();

    }

    public function findOrFail () {
        $result =$this->find();
        dd($result);

        if(! $result){
            abort();
        }
        return $result;
    }
    public function get() {
        return $this->statement->fetchAll();
    }
}