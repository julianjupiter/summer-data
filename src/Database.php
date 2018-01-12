<?php
/**
* Summer Data
* https://github.com/julianjupiter/summer-data
*/

namespace Summer\Data;

class Database
{
    protected $adapter;

    public function __constructor(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    public function connect()
    {
        $dns = '';
        $pdo = new PDO();
        return $pdo;
    }
}