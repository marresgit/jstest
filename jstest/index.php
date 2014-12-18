<html>
    <head>
	<title>Testar ut mina jQuery skillz</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>	
	<script type="text/javascript" src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="stylesheetMarre.css"/>


<style>
  table.db-table    {border-right:1px solid #ccc; border-bottom:1px solid #ccc;}
  table.db-table th {background:#269b2e; padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc;}
  table.db-table td {padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc;}
</style>



    </head>
   <body>
<?php
#var_dump ($_POST);

#foreach ($_POST as $k=>$v) {
#  echo '<script>$(".inpuT").attr("value", "'.$v.'");</script>';
#}

?>
      <div id="Big">
		<div class="infoButton">Info</div>
		   <div class="infoDropdown">I made this site just to save and get access to Url's from my smartphone that i get on various chat's. Enjoy!</div>


	  <center><div class="addButton">Add</div></center><br>
<!--	  <center><div class="saveButton">Save</div></center>--!>
<!--	  <center><div class="button2">Remove</div></center>--!> 

	<br><br>

      <form class="forM" method="POST">
	<div class='ruta1 divJS'>
		<div class='inputBox'>
		      <input class="inpuT" type="text" name="url-1" >
		      <input class="submitThis" type="submit" name="submit1">
		</div><!--inputBox--!>
	<a href="<?php echo $_POST['url-1']; ?>">	
	<div class="adressBox"></div><!--.adressBox--!>
	</a>
	</div><!--.divJS--!>
      </form>
<!------------.1------------!>



      <form class="forM" method="POST">
	<div class='ruta1 divJS'>
		<div class='inputBox'>
		      <input class="inpuT" type="text" name="url-2" >
		      <input class="submitThis" type="submit" name="submit2">
		</div><!--inputBox--!>
	<a href="<?php echo $_POST['url-2']; ?>">	
	<div class="adressBox"></div><!--.adressBox--!>
	</a>
	</div><!--.divJS--!>
      </form>
<!------------.2------------!>

      <form class="forM" method="POST">
	<div class='ruta1 divJS'>
		<div class='inputBox'>
		      <input class="inpuT" type="text" name="url-3" >
		      <input class="submitThis" type="submit" name="submit3">
		</div><!--inputBox--!>
	<a href="<?php echo $_POST['url-3']; ?>">	
	<div class="adressBox"></div><!--.adressBox--!>
	</a>
	</div><!--.divJS--!>
      </form>
<!------------.3------------!>

      <form class="forM" method="POST">
	<div class='ruta1 divJS'>
		<div class='inputBox'>
		      <input class="inpuT" type="text" name="url-4" >
		      <input class="submitThis" type="submit" name="submit4">
		</div><!--inputBox--!>
	<a href="<?php echo $_POST['url-4']; ?>">	
	<div class="adressBox"></div><!--.adressBox--!>
	</a>
	</div><!--.divJS--!>
      </form>
<!------------.4------------!>

      <form class="forM" method="POST">
	<div class='ruta1 divJS'>
		<div class='inputBox'>
		      <input class="inpuT" type="text" name="url-5" >
		      <input class="submitThis" type="submit" name="submit5">
		</div><!--inputBox--!>
	<a href="<?php echo $_POST['url-5']; ?>">	
	<div class="adressBox"></div><!--.adressBox--!>
	</a>
	</div><!--.divJS--!>
      </form>
<!------------.5------------!>

      <form class="forM" method="POST">
	<div class='ruta1 divJS'>
		<div class='inputBox'>
		      <input class="inpuT" type="text" name="url-6" >
		      <input class="submitThis" type="submit" name="submit6">
		</div><!--inputBox--!>
	<a href="<?php echo $_POST['url-6']; ?>">	
	<div class="adressBox"></div><!--.adressBox--!>
	</a>
	</div><!--.divJS--!>
      </form>
<!------------.6------------!>


      </div><!---#Big--!>

	<div id="footerBig2"><strong>by:</strong><p>marre</p></div>

<?php
date_default_timezone_set('Europe/Stockholm');
include('../sqlpass.php');

$urlONE   = $_POST['url-1'];
$urlTWO   = $_POST['url-2'];
$urlTHREE = $_POST['url-3'];
$urlFOUR  = $_POST['url-4'];
$urlFIVE  = $_POST['url-5'];
$urlSIX   = $_POST['url-6'];
$urlSEVEN = $_POST['url-7'];
$urlEIGHT = $_POST['url-8'];
$urlNINE  = $_POST['url-9'];

//Create connection
$conn = mysql_connect($servername, $username, $password);
$selectedDB = mysql_select_db($dbname,$conn) or die ("Could not select $dbname");

// Check connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
    echo "Connection failed";
}
echo "Connected successfully";
echo "<br>";
echo "<br>";

$connbase = mysql_select_db($dbname, $conn);
if (!$connbase) {
   die ('Can\'t use myDB : ' . mysql_error());
}
echo "Connected with database!";

if (!empty($_POST[submit1])){
$sql="INSERT INTO test (id) VALUES(1) ON DUPLICATE KEY UPDATE name='$urlONE'";
} elseif (!empty($_POST[submit2])){
$sql="INSERT INTO test (id) VALUES(2) ON DUPLICATE KEY UPDATE name='$urlTWO'";
} elseif (!empty($_POST[submit3])){
$sql="INSERT INTO test (id) VALUES(3) ON DUPLICATE KEY UPDATE name='$urlTHREE'";
} elseif (!empty($_POST[submit4])){
$sql="INSERT INTO test (id) VALUES(4) ON DUPLICATE KEY UPDATE name='$urlFOUR'";
} elseif (!empty($_POST[submit5])){
$sql="INSERT INTO test (id) VALUES(5) ON DUPLICATE KEY UPDATE name='$urlFIVE'";
} elseif (!empty($_POST[submit6])){
$sql="INSERT INTO test (id) VALUES(6) ON DUPLICATE KEY UPDATE name='$urlSIX'";
} elseif (!empty($_POST[submit7])){
$sql="INSERT INTO test (id) VALUES(7) ON DUPLICATE KEY UPDATE name='$urlSEVEN'";
} elseif (!empty($_POST[submit8])){
$sql="INSERT INTO test (id) VALUES(8) ON DUPLICATE KEY UPDATE name='$urlEIGHT'";
} elseif (!empty($_POST[submit9])){
$sql="INSERT INTO test (id) VALUES(9) ON DUPLICATE KEY UPDATE name='$urlNINE'";
} 

$myData = mysql_query($sql,$conn);
$myRS = mysql_fetch_array($myData);
#var_dump($myRS);

$sql = "SELECT * FROM test";
$myData = mysql_query($sql,$conn);
  while($record = mysql_fetch_array($myData)){
  }


#-------------------------------1-------------------------------------
$urlpost = mysql_query('SHOW TABLES',$conn) or die('Cannot show tables');
while($tableName = mysql_fetch_row($urlpost)) {
   
   $table = $tableName[0];

   echo '<h3>',$table,'</h3>';
   $urlpost2 = mysql_query('SELECT * FROM test') or die('Cannot show tables from'.$table);
   if ( mysql_num_rows($urlpost2)) {
      echo '<table cellpadding="0" cellspacing="0" class="db-table table" style="color: #fffff;">';
      echo '<tr><th>ID</th><th>Url</th><th>nothing</th><tr>';
         while ($row2 = mysql_fetch_row($urlpost2)) {
            echo '<tr>';
            foreach ($row2 as $key=>$value) {
               echo '<td>',$value,'</td>';
            }
            echo '</tr>';
            }
            echo '</table><br>';
   }
}








?>





   </body>
</html>
