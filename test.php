<?php

include_once(__DIR__ . '/src/AdapterInterface.php');
include_once(__DIR__ . '/src/Database.php');
include_once(__DIR__ . '/src/Adapter/MysqlAdapter.php');

use Summer\Data\AdapterInterface;
use Summer\Data\Database;
use Summer\Data\MysqlAdapter;

$mysqlAdapter = new MysqlAdapter();
$db = new Database($mysqlAdapter);
$connection = $db->connect();