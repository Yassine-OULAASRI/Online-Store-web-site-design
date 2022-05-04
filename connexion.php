
    <?php 

    session_start();
    include "server.php";
          $logMsg='';
          if ($_SERVER['REQUEST_METHOD']=='POST') {
          	if(isset($_POST['email']) && isset($_POST['pw'])) {
	            $email = htmlspecialchars($_POST['email']);
	            $pw = htmlspecialchars($_POST['pw']);
	            if (empty($email) && empty($pw)) {
	            	header("Location: login.php?error=ld");
            		exit();
	            }
	            else if (empty($email)) {
	            	header("Location: login.php?error=l");
            		exit();
	            }
	            else if (empty($pw)) {
	            	header("Location: login.php?error=d");
            		exit();
	            }
	            else {
		            $sqlQuery = "SELECT * FROM users WHERE email LIKE '$email'  AND password LIKE '$pw'";
		            $queryRes = mysqli_query($link, $sqlQuery);
		            if (mysqli_num_rows($queryRes)===1) {
			            $ligne = mysqli_fetch_assoc($queryRes);
			            $_SESSION['uName'] = $ligne['username']; 
			            header("Location: home.php");
			            exit();
		            }
		            else {
		            	header("Location: login.php?error=i");
            			exit();
		            }
		      	}
	        }  
          } 
          else {
            header("Location: login.php");
            exit();
          }
    ?> 
