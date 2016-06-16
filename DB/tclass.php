<?php
include_once 'config.inc.php';
class DB_Class
{
  private static $bd = null;
      public static function getDB() {
    if (self::$bd == null) self::$bd = new DB_Class();
    return self::$bd;
  }
    protected $db;
    function __construct(PDO $db = null){
        //$host='mysql.hostinger.ru';
        //$dbname='u902653330_prime';
        $dsn ='mysql:host='.$host.';dbname='.$dbname;
        $this->db = $db;

    try{
        if($this->db === null)
        {
            //$this->db = new PDO($dsn, $user, $password);
            $this->db = new PDO($dsn, 'u902653330_prime', '17m08a11');
        }
      } catch(PDOException $e){
        echo $e->getMessage();
      }
    }
}
?>