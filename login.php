<?php 
/*This login.php script is based on Chapter 18 of
PHP and MySQL for Dynamic Web Sites: Visual QuickPro Guide (4th Edition),
and is used to carryout the login process for the site. */

// This states a requirement to include the config file 
// an optional alternative page header, then set the page title.
require ('includes/config.inc.php'); 
$page_title = 'Login'; //Technically redundant on this page but left for future development
include ('includes/headerlogin.html');// Blank header used for spacing only

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
	require (MYSQL);
	
	// This will validate the ID Number before logging in and create a new variable
	if (!empty($_POST['id_number'])) 
            {
		$idn = mysqli_real_escape_string ($dbc, $_POST['id_number']);
            } 
        else 
            {
		$idn = FALSE;
		echo '<div class="alert alert-danger" role="alert"><p class="error">You forgot to enter your ID Number!</p></div>';
            }
	
	// This will validate the password before logging in and create a new variable
	if (!empty($_POST['password'])) 
            {
		$p = mysqli_real_escape_string ($dbc, $_POST['password']);
            } 
        else 
            {
		$p = FALSE;
		echo '<div class="alert alert-danger" role="alert"><p class="error">You forgot to enter your password!</p></div>';
            }
	
	if ($idn && $p)  // Then, IF everything is set correctly
            {
		// This will make a query to the database
		$q = "SELECT id_number, first_name, user_level FROM user WHERE (id_number='$idn' AND password=SHA1('$p'))";		
		$r = mysqli_query ($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));
		
		if (@mysqli_num_rows($r) == 1)  
		
		// Then, IF a match was made 
                    {
			// This will register the values and set a Session
			$_SESSION = mysqli_fetch_array ($r, MYSQLI_ASSOC); 
			mysqli_free_result($r);
			mysqli_close($dbc);
			
                        if ($_SESSION['user_level'] == 1)
                            {
                                // This will redirect the Admin User to their Home page
                                ob_end_clean(); // This will delete the buffer
                                header("Location: admin_home.php");
                                exit(); // This will exit the script
                            }
							
						elseif ($_SESSION['user_level'] == 2)
                        {
                            // This will redirect the Management User to their Home page
                            ob_end_clean(); // This will delete the buffer
                            header("Location: mgmt_home.php");
													
                            exit(); // This will exit the script
                        }
							
							
                        else
                            {
                                // If they are not an Admin or Management User, 
                                // this will redirect to the level 0 Staff User Home page
                                ob_end_clean(); // This will delete the buffer
                                header("Location: home.php");
                                exit(); // This will exit the script
                            }
                    }             
                    
                else  // ELSE, if no match was made
                    {	
                        echo '<div class="alert alert-danger" role="alert"><p class="error">Either the ID Number and Password entered do not match those on file or you have not yet activated your account.</p></div>';
                    }		
            } 
        else  // ELSE, if everything it did not run correctly
            {	
                echo '<div class="alert alert-danger" role="alert"><p class="error">Please try again.</p></div>';
            }
	
	mysqli_close($dbc);
} // End
?>