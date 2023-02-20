<?php
class database{
  private $link;
  private $host , $username , $password , $database;

  public function __construct(T $host , $username , $password , $database)
  {
    $this->host =$host;
    $this->username =$username;
    $this->password =$password;
    $this->database =$database;

    $this->link =mysql_connect($this->host , $this->username , $this->password , $this->database);


    if ($this-> link->connect_error){
      die("connection field:" . $this->linkconnect_error)
    }



  }
    public function echo($department) {
		//echo $string;
        $sql = "CREATE TABLE department (
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(30) ,
           faculty_id INT UNSIGNED NOT NULL,
            FOREIGN KEY (faculty_id) REFERENCES faculty(id),
              martricle VARCHAR(50) NOT NULL)";
            
            
            if ($conn->query($sql) === TRUE) {
                echo "Table department created successfully";
              } else {
                echo "Error creating table: " . $conn->error;
              }
	}
    public function echo($region) {
        

    }
}
?>