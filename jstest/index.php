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
<div id="Big">
  <div class="infoButton">Info</div>
  <div class="infoDropdown">I made this site just to save and get access to Url's from my smartphone that i get on various chat's. Enjoy!</div>

<!--  <center><div class="addButton">Add</div></center><br>-->
  <div class="text1">Submit the url you want to save</div>
  <br>

<?php

echo "<form class=\"postThis\" method=\"POST\">
        <input type=\"text\" name=\"onlyInput\">
        <input class=\"OnlySubmit\" type=\"submit\" name=\"onlySubmit\" value=\"1\">
      </form>
     ";


echo "<br><br>";
$db = new SQLite3('jstestDB.sqlite');
$result = $db->query("SELECT url_id, url FROM url");
$i = 1;
$f = 1;
$url_id = "WHOHA";
while ($row = $result->fetchArray(SQLITE3_NUM)) {
        $url_id = $row[0];
        $url    = $row[1];
        $parse  = parse_url($url);
        echo "<form class=\"forM\" method=\"POST\">
                <div class=\"ruta1 divJS\">
                  <div class=\"url_id\">${url_id}</div>
                  <div class='deleteS'><strong>x</strong></div>
                    <a href=\"${url}\">
                    <div class=\"adressBox\"></div><!--.adressBox-->
                    </a>
                <div class=\"urlText\">${parse['host']}</div>
                </div><!--.divJS-->
              </form>
             ";
}

date_default_timezone_set('Europe/Stockholm');
#include('jstestThephp.php');

$db = new SQLite3('jstestDB.sqlite');
$urlID = ('');

# New url:
if (array_key_exists('onlySubmit', $_POST) && $_POST['onlySubmit'] == '1') {
    $newUrl = $_POST['onlyInput'];
    $db->exec("INSERT OR REPLACE INTO url (url) VALUES ('$newUrl')");
    header("Location: http://${_SERVER['SERVER_NAME']}/jstest-master/jstest/index.php", true, 303);
    exit();
}
 
# Delete:
if (array_key_exists('action', $_POST)) {
  if ($_POST['action'] == 'removeUrl') {
    $db->exec("DELETE FROM url WHERE url_id = ${_POST['urlId']}");
  }
  header("Location: http://${_SERVER['SERVER_NAME']}/jstest-master/jstest/index.php", true, 303);
  exit();

}



?>



</div><!---#Big--!>

<div id="footerBig2"><strong>by:</strong><p>marre</p></div>
<br><br>


<?php
#-------------------------------1-------------------------------------
#$urlpost = $db->query('SELECT * FROM url');
#echo "<br><br><br>";
#echo "<div style='border:1px solid black;'>";
#while($tableName = $urlpost->fetchArray()) {
#  echo "<pre style='width:;'>" ;echo json_encode($tableName,JSON_PRETTY_PRINT); echo "</pre>";
#}   
#echo "</div>";


#echo "<h1>$url_id</h1>";

#   $table = $tableName[0];
#
#   echo '<h3>',$table,'</h3>';
#   $urlpost2 = mysql_query('SELECT * FROM test') or die('Cannot show tables from'.$table);
#   if ( mysql_num_rows($urlpost2)) {
#      echo '<table cellpadding="0" cellspacing="0" class="db-table table" style="color: #fffff;">';
#      echo '<tr><th>ID</th><th>Url</th><th>nothing</th><tr>';
#         while ($row2 = mysql_fetch_row($urlpost2)) {
#            echo '<tr>';
#            foreach ($row2 as $key=>$value) {
#               echo '<td>',$value,'</td>';
#            }
#            echo '</tr>';
#            }
#            echo '</table><br>';
#   }
#}

?>


</body>
</html>
