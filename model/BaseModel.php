<?php
// tạo kết nối từ project php sang mysql
namespace model;
use PDO;

require_once "env.php";

class BaseModel
{
    protected $connect;

    public function __construct()
    {
        $this->connect = new PDO(
            "mysql:host=" . DBHOST
            . ";dbname=" . DBNAME
            . ";charset=" . DBCHARSET,
            DBUSER,
            DBPASS
        );
    }

    function dataProcess($query, $getDataAll = true)
    {
        $stmt = $this->connect->prepare($query);
        $stmt->execute();
        if ($getDataAll) {
            return $stmt->fetchALL();
        } else {
            return $stmt->fetch();
        }
    }
}
