<?php 

class DatabaseClass  
{  
    private $host = "localhost"; // your host name  
    private $username = "root"; // your user name  
    private $password = ""; // your password  
    private $db = "studentcrud"; // your database name  
    public $mysqliConn;
  
    /**
     * Connect with Database 
     */

public function getDB()  
{  
    $this->mysqliConn = new mysqli( $this->host, $this-> username, $this-> password, $this->db ) or die( mysqli_error("database") );  
    
    // see if connection has been established properly
    if ( $this->mysqliConn->connect_error ) { 
      die("Failed to connect: " . $this->mysqliConn->connect_error);
    } 

    return $this->mysqliConn;

}  
  
    
 public function insertStudentDetails( $name, $phone, $email )
 {
   
      if (isset( $name ) && isset( $phone ) && isset( $email )) 
      {
        
            $mysqliConn =  $this->getDB();

            $insertStudentQuery = 'INSERT INTO `studentdetails` ( `name`, `phone`, `email` ) VALUES (?, ?, ?)';

            $stmt = $mysqliConn->prepare($insertStudentQuery);

            $stmt->execute([ $name, $phone, $email ]);

            header('Location: ../index.php');

      }

 }



 public function studentDetails()
 {

      $studentDetailList = "";
      $mysqliConn =  $this->getDB();
      $query = 'SELECT * FROM `studentdetails`';
      $stmt = $mysqliConn->query($query);

      if ($stmt->num_rows > 0) 
      {
            // OutPut Data 
            while($studentDetail = $stmt->fetch_assoc()) {
              $studentDetailList .=  '<tr><td>'.$studentDetail['id'].'</td>'.'<td>'.$studentDetail['name'].'</td>'.'<td>'.$studentDetail['phone'].'</td>'.'<td>'.$studentDetail['email'].'</td></tr>';
            }
      } else 
      {
            echo "0 results";
      }

      return $studentDetailList;
  
   }

/**
 * Close Database Connection
 */

  public function close()
  {
      $this->mysqliConn->close();
  }
  
}  

?>
