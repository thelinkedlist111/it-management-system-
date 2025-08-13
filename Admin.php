<?php 
class Admin{
    private User $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function See_History(int $ticket_id){
        require_once "config.php";

        $sql = "SELECT * FROM tickets";

        $result = mysqli_query($link, $sql);

        if (!$result) {
            echo "Error retrieving tickets: " . mysqli_error($link);
        }
        mysqli_close($link);
    }

    public function Add_user(string $name, string $email, string $password){
        require_once "config.php";

        $name = $email = $password = "";
        $name_err = $email_err = $password_err = "";
 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        $input_name = trim($_POST["username"]);
        if(empty($input_name)){
            $name_err = "Please enter a name.";
        } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
            $name_err = "Please enter a valid name.";
        } else{
            $name = $input_name;
        }
    
        $input_email = trim($_POST["email"]);
        if(empty($input_email)){
            $email_err = "Please enter an email.";     
        } else{
            $email = $input_email;
        }
    
        $input_password = trim($_POST["password"]);
        if(empty($input_password)){
            $password_err = "Please enter password.";     
        } else{
            $password = $input_password;
        }
    
        if(empty($name_err) && empty($email_err) && empty($password_err)){
            $sql = "INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)";
         
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "ssss", $param_name, $param_email, $param_password, $param_role);
            
                $param_name = $name;
                $param_email = $email;
                $param_password = $password;
                $param_role = 'user';

                if(mysqli_stmt_execute($stmt)){
                    header("location: AdminDash.php");
                    exit();
                } else{
                    echo "Something went wrong. Please try again later.";
                }
            }
            mysqli_stmt_close($stmt);
        }
        mysqli_close($link);
    }
    }

    public function Remove_User(int $user_id){
        if(isset($_POST["id"]) && !empty($_POST["id"])){
            require_once "config.php";

            $sql = "DELETE FROM users WHERE id = ?";
    
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "i", $param_id);
                $param_id = trim($_POST["id"]);
                if(mysqli_stmt_execute($stmt)){
                    header("location: AdminDash.php");
                    exit();
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
            }
            mysqli_stmt_close($stmt);
            mysqli_close($link);
        }
    }

    public function Delete_Ticket(int $ticket_id){
        
    }

    public function Update_Ticket(int $ticket_id){
        require_once "config.php";
 
$name = $email = $password = "";
$name_err = $email_err = $password_err = "";
 
if(isset($_POST["id"]) && !empty($_POST["id"])){
    $id = $_POST["id"];
    
    $input_name = trim($_POST["username"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    

    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Please enter an email.";     
    } else{
        $email = $input_email;
    }
    

    $input_password = trim($_POST["password"]);
    if(empty($input_password)){
        $password_err = "Please choose a password.";     
    } 
    else{
        $password = $input_password;
    }

    if(empty($name_err) && empty($email_err) && empty($password_err)){
        $sql = "UPDATE users SET username=?, email=?, password=? WHERE id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "sssi", $param_name, $param_email, $param_password, $param_id);
            
            $param_name = $name;
            $param_email = $email;
            $param_password = $password;
            $param_id = $id;
            if(mysqli_stmt_execute($stmt)){
                header("location: AdminDash.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }

        mysqli_stmt_close($stmt);
    }
    
    mysqli_close($link);
    } else{
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        $id =  trim($_GET["id"]);
        $sql = "SELECT * FROM users WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            $param_id = $id;
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                $name = $row["username"];
                $email = $row["email"];
                $password = $row["password"];
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($link);
    } 
}
}

}
?>