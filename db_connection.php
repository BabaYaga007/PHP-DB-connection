 <?php
    function OpenCon() {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "7699";
        $db = "collabeo";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db); //or die("Connect failed: %s\n". $conn -> error);
        
        // check connection 
        if ($conn->connect_error) {
            die("Connect failed: %s\n". $conn -> error);
        }
        return $conn;
     }
     
    function CloseCon($conn)
     {
     $conn -> close();
     }
       
?>
