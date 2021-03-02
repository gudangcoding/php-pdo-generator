<?php
ini_set( "display_errors", true );
date_default_timezone_set('Asia/Jakarta');
define( "HOST", "localhost" );
//nama database


// define( "DATABASE_NAME", "bobaindo_new" );
// define( "DB_USERNAME", "bobaindo_new" );
// //password mysql
// define( "DB_PASSWORD", "bob@2021" );
// //dir admin
// define( "DIR_ADMIN", "admina/");
// //main directory
// define( "DIR_MAIN", "/");

define( "DATABASE_NAME", "boba_new" );
define( "DB_USERNAME", "root" );
//password mysql
define( "DB_PASSWORD", "" );
//dir admin
define( "DIR_ADMIN", "boba-new/admina/");
//main directory
define( "DIR_MAIN", "boba-new/");



define('DB_CHARACSET', 'utf8');

require_once ('Database.php');
require_once ('Datatable.php');
require_once ('DTable.php');
require_once ('My_pagination.php');
require_once ('url.php');
//require_once ('Table.php');
 
$db 		= new Database();
$pg 		= new My_pagination();
$dtable 	= new TableData();
$datatable  = new DTable();

function handleException( $exception ) {
  echo  $exception->getMessage();
}

set_exception_handler( 'handleException' );


?>
