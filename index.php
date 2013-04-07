<?php
/**
 *  Disaster and Relief Management System
 */
    $url=parse_url(getenv("CLEARDB_DATABASE_URL"));

    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"],1);

    mysql_connect($server, $username, $password);
            
    
    mysql_select_db($db);
?>
<h1>Disaster and Relief Management System</h1>

<?php
	echo "Username: " . $username . " Password: " . $password;
?>