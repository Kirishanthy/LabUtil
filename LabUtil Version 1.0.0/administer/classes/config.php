<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of config
 *
 * @author Test
 */
class config {
    //put your code here
    public $connection;
    function __construct() {
        date_default_timezone_set('Asia/Colombo');
        $this->connection = mysqli_connect("mysql.3owl.com","u769462600_root","amuthan1","u769462600_db");
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
    }
}

?>
