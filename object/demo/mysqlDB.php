<?php


/**
 * 链接数据库联系
 * Class mysqlDB
 */
class mysqlDB
{
    public  static $hostname;
    public  static $username;
    public  static $password;
    public  static $database;
    public  static $port;
    public  static $charset;

    public $link = null;

    public function __construct($config)
    {
        self::$hostname = $config['hostname'] ?: '127.0.0.1';
        self::$username = $config['username'] ?: 'root';
        self::$password = $config['password'] ?: '';
        self::$database = $config['database'] ?: '';
        self::$charset = $config['charset'] ?: 'utf8';
        self::$port = $config['port'] ?: '3306';

        $this->connect();
        if(!$this->link)
        {
            die("数据库连接失败！".$this->conn->connect_error);
        }else{
            echo "连接成功！";
        }
//        $this->setCharset();
//        $this->setDb();
    }

    public function connect()
    {
        $this->link =   mysqli_connect(self::$hostname,self::$username,self::$password,self::$database);
//        var_dump($this->link);

    }

    public function setCharset()
    {
        mysqli_set_charset($this->$link,self::$charset);
    }
    //执行sql语句
    function sql($sql){
        $res=$this->link->query($sql);
        if(!$res)
        {
            echo "数据操作失败";
        }
        else
        {
            if($this->link->affected_rows>0)
            {
                return $res;
            }
            else
            {
                echo "0行数据受影响！";
            }
        }
    }
    //返回受影响数据行数
    function getResultNum($sql){
        $res=$this->link->query($sql);
        return mysqli_num_rows($res);
    }
//    public function setDb()
//    {
//        mysqli_select_db($this->$link,self::$database);
//    }
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        mysqli_close($this->link);
    }
}
$config = [
    'hostname' => '127.0.0.1',
    'username' => 'root',
    'password' => '6e7780c30ce76854',
    'database' => 'blog',
    'charset' => 'utf8',
    'port' => '3306',

];
$link = new mysqlDB($config);
$sql = 'select * from blog_auth';
$res = $link->sql($sql);
//var_dump($res);

$num=$link->getResultNum($sql);
echo "影响的行数：".$num;
//读取并输出记录
while ($row = mysqli_fetch_assoc($res))
{
    echo "\n{$row['username']} ";
    echo "{$row['password']}";
}