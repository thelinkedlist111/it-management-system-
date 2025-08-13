<?php
// Include config file
require_once "../Model/config.php";
 
// Define variables and initialize with empty values
$name = $email = $department = $type = $priority= $description= "";
$name_err = $email_err = $department_err = $type_err=$priority_err=$description_err="";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate address address
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Please enter an email.";     
    } else{
        $email = $input_email;
    }
    
    // Validate salary
    $input_department = trim($_POST["department"]);
    if(empty($input_department)){
        $department_err = "Please choose a department.";     
    } 
    else{
        $department = $input_department;
    }
    
    $input_type = trim($_POST["type"]);
    if(empty($input_type)){
        $type_err = "Please choose a type.";     
    } 
    else{
        $type = $input_type;
    }

    $input_priority= trim($_POST["priority"]);
    if(empty($input_priority)){
        $priority_err = "Please choose a priority.";     
    } 
    else{
        $priority = $input_priority;
    }

     $input_description= trim($_POST["description"]);
    if(empty($input_description)){
        $description_err = "Please enter the description.";     
    } 
    else{
        $description = $input_description;
    }
    // Check input errors before inserting in database
    if(empty($name_err) && empty($email_err) && empty($department_err)&& empty($type_err)&& empty($priority_err)&& empty($description_err)){
        // Prepare an update statement
        $sql = "UPDATE tickets SET name=?, email=?, department=? , type=?, priority=? , description=? WHERE id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssss", $param_name, $param_email, $param_department, $param_type,$param_priority,$param_description, $param_id);
            
            // Set parameters
            $param_name = $name;
            $param_email = $email;
            $param_department = $department;
            $param_type = $type;
            $param_priority = $priority;
            $param_description = $description;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: ../View/UserDash.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM tickets WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $name = $row["name"];
                $email = $row["email"];
                $department = $row["department"];
                $type = $row["type"];
                $priority = $row["priority"];
                $description = $row["description"];
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    } 
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                            <label>Email</label>
                            <textarea name="email" class="form-control"><?php echo $email; ?></textarea>
                            <span class="help-block"><?php echo $email_err;?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($department_err)) ? 'has-error' : ''; ?>">
                            <label>Department</label><br>
                            <label class="radio-inline">
                            <input type="radio" name="department" value="Design" <?php echo ($department == 'Design') ? 'checked' : ''; ?>> Design
                            </label>
    
                            <label class="radio-inline">
                            <input type="radio" name="department" value="Construction" <?php echo ($department == 'Construction') ? 'checked' : ''; ?>> Construction
                            </label>
    
                            <label class="radio-inline">
                                <input type="radio" name="department" value="Administrative" <?php echo ($department == 'Administrative') ? 'checked' : ''; ?>> Administrative
                            </label>

                            <label class="radio-inline">
                                <input type="radio" name="department" value="Finance" <?php echo ($department == 'Finance') ? 'checked' : ''; ?>> Finance
                            </label>

                            <label class="radio-inline">
                                <input type="radio" name="department" value="HR" <?php echo ($department == 'HR') ? 'checked' : ''; ?>> HR
                            </label>

                            <br><span class="help-block"><?php echo $department_err; ?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($type_err)) ? 'has-error' : ''; ?>">
                            <label>Type</label><br>

                            <label class="radio-inline">
                                <input type="radio" name="type" value="Software" <?php echo ($type == 'Software') ? 'checked' : ''; ?>> Software
                            </label>

                            <label class="radio-inline">
                                <input type="radio" name="type" value="Hardware" <?php echo ($type == 'Hardware') ? 'checked' : ''; ?>> Hardware
                            </label>
                        <span class="help-block"><?php echo $type_err; ?></span>
                        </div>

                        <span class="help-block"><?php echo $type_err; ?></span>

                    

                        <div class="form-group <?php echo (!empty($priority_err)) ? 'has-error' : ''; ?>">
                        <label>Priority</label><br>

                        <label class="radio-inline">
                            <input type="radio" name="priority" value="Low" <?php echo ($priority == 'Low') ? 'checked' : ''; ?>> Low
                        </label>

                        <label class="radio-inline">
                            <input type="radio" name="priority" value="Medium" <?php echo ($priority == 'Medium') ? 'checked' : ''; ?>> Medium
                        </label>

                        <label class="radio-inline">
                            <input type="radio" name="priority" value="High" <?php echo ($priority == 'High') ? 'checked' : ''; ?>> High
                        </label>

                        <br><span class="help-block"><?php echo $priority_err; ?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($description_err)) ? 'has-error' : ''; ?>">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control" value="<?php echo $description; ?>">
                            <span class="help-block"><?php echo $description_err;?></span>
                        </div>

                        
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="../View/UserDash.php" class="btn btn-default">Cancel</a>
                        
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>