<?php
    require_once 'vendor/autoload.php';

    use Ozdemir\Datatables\Datatables;
    use Ozdemir\Datatables\DB\MySQL;

    $config = [ 'host'     => 'localhost',
                'port'     => '3306',
                'username' => 'root',
                'password' => '',
                'database' => 'boba' ];

    $dt = new Datatables( new MySQL($config) );

    $dt->query('Select id,nama,kode from bank');

    // edit 'id' column
    $dt->edit('id', function ($data) {
        return '<a class="btn btn-primary" href="#'.$data['id'].'">#edit </a> '.$data['id'];
    });

    // add 'action' column
    $dt->add('action', function ($data) {
        return '<a href="#edit'.$data['id'].'">#edit </a> '.'/ <a href="#del'.$data['id'].'">#delete </a> ';
    });

    // edit 'UnitPrice' column.
    $dt->edit('nama', function ($data) {
        return '$' . $data['nama'];
    });

    echo $dt->generate();
    
    //https://datatables.ozdemir.be/edit-column#2