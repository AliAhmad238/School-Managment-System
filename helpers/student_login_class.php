
<?php /*
ob_start();

class StudentLogin{
    private $conn;
    public function __construct()
    {
        #database Host, D-user, D-pass, D-name
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = "";
        $dbname = 'school_managment_system';
        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        
        if(!$this->conn){
            die("Database Connection Erroe");
        } 
    }

    public function Stdlogin($data){
        $pssword = $data['pass'];
        $user = $data['user'];
     $query = "SELECT * FROM student_registration WHERE username = '$user' AND pass = '$pssword'";
     
        if($action = mysqli_query($this->conn, $query)){
           $numRow = mysqli_num_rows($action);
           if($numRow > 0){
               $StdData = mysqli_fetch_assoc($action);
               session_start();
               $_SESSION['StdsessionID'] = $StdData['student_id'];            
               $_SESSION['StdsessionNAME'] = $StdData['username'];
              // echo("<script>location.href = '".ADMIN_URL."/index.php?msg=$msg';</script>");
               //header("Location: dashboard.php");
               echo "<script type='text/javascript'>window.top.location='dashboard.php';</script>"; 
               $_GET['std'] == 'std-dash-view';
               exit;
            
           } 
        }
    }


    public function stdLogout(){
       // unset($_SESSION['StdsessionID']);
        session_destroy($_SESSION['StdsessionID']);
        session_destroy($_SESSION['StdsessionNAME']);
        session_write_close();
        //unset($_SESSION['StdsessionNAME']);
        header("location: std-login.php");
    }



}
*/

ob_start();
session_start(); // Start the session at the beginning of the script

class StudentLogin{
    private $conn;

    public function __construct()
    {
        #database Host, D-user, D-pass, D-name
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = "";
        $dbname = 'school_managment_system';
        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        
        if(!$this->conn){
            die("Database Connection Error");
        } 
    }

    public function Stdlogin($data){
        $pssword = $data['pass'];
        $user = $data['user'];
        $query = "SELECT * FROM student_registration WHERE username = '$user' AND pass = '$pssword'";
     
        if($action = mysqli_query($this->conn, $query)){
            $numRow = mysqli_num_rows($action);
            if($numRow > 0){
                $StdData = mysqli_fetch_assoc($action);
                $_SESSION['StdsessionID'] = $StdData['student_id'];            
                $_SESSION['StdsessionNAME'] = $StdData['username'];
                echo "<script type='text/javascript'>window.top.location='dashboard.php';</script>"; 
                $_GET['std'] == 'std-dash-view';
                exit;
            } 
        }
    }

    public function stdLogout(){
        // Unset all session variables
        $_SESSION = array();

        // Destroy the session
        session_destroy();

        // Redirect to the login page
        header("location: std-login.php");
        exit;
    }
}


?>
