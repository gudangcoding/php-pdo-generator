<?php
    require_once 'localhost/boba-new/admina/inc/datatable/vendor/autoload.php';

    use Ozdemir\Datatables\Datatables;
    use Ozdemir\Datatables\DB\MySQL;

    // $config = [ 'host'     => 'localhost',
    //             'port'     => '3306',
    //             'username' => 'bobaindo_new',
    //             'password' => 'bob@2021',
    //             'database' => 'bobaindo_new' ];

    $config = [ 'host'     => 'localhost',
                'port'     => '3306',
                'username' => 'root',
                'password' => '',
                'database' => 'boba_new' ];

    $dt = new Datatables( new MySQL($config) );