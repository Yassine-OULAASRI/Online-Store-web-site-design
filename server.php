<!-- <?php 
	
	try {
        $log = new PDO("mysql:host=localhost;dbname=ordishop;port=3306;charset=latin1",'root','');
    } catch (Exception $e) {
        echo 'Connexion error : '.$e -> getMessage();    
      } 

 ?> -->


 <?php 
	$server = "localhost";
	$UN = "root";
	$PW = "";
	$database = "ordishop";

	$link = mysqli_connect($server, $UN, $PW, $database);

	if (!$link) {
	 	echo "CONNECTION FAILED !";
	 } 
 ?> 