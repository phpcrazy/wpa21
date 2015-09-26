<?php 


class DB extends PDO {

    private $engine;
    private $host;
    private $database;
    private $user;
    private $pass;

    private static $_instance;

    private $table_name;
    private $where_key;
    private $where_value;

    private $where_mark = false;

    public function __construct() {
        $this->engine = 'mysql';
        $this->host = 'localhost';
        $this->database = 'wpa21';
        $this->user = 'root';
        $this->pass = 'mmlinks';
        $dns = $this->engine.':dbname='.$this->database.";host=".$this->host;
        // mysql:dbname=wpa21;host=localhost;
        parent::__construct($dns, $this->user, $this->pass);
    }


    public static function table($table_name) {

		// Make Singaleton
		if(!self::$_instance instanceof DB) {
			self::$_instance = new DB();
		}
        self::$_instance->table_name = $table_name;
		return self::$_instance;
	}

    public function where($key, $value) {
        $this->where_mark = true;
        $this->where_key = $key;
        $this->where_value = $value;
        return $this;
    }

    // INSERT INTO USERS (name, address, phoneno) VALUES ('Hla Hla', 'Hledan', '094234234');

    public function get() {

        if($this->where_mark == true) {
            $sql = "SELECT * FROM "
                . $this->table_name
                . " WHERE " . $this->where_key . " = '" . $this->where_value . "'";

            $this->where_mark = false;
        } else {
            $sql = "SELECT * FROM " . $this->table_name;
        }

		return $this->query($sql);

	}


    public function __destruct() {
        echo "Destruct!";
    }
}


 ?>