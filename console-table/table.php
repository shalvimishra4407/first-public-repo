<?php
require __DIR__.'/vendor/autoload.php';
$table = new LucidFrame\Console\ConsoleTable();
$table
    ->addHeader('Id')
    ->addHeader('Name')
    ->addHeader('Email')
    ->addRow()
        ->addColumn(1001)
        ->addColumn('abcd')
        ->addColumn('abcd@gmail.com')
    ->addRow()
        ->addColumn(1002)
        ->addColumn('efgh')
        ->addColumn('efgh@gmail.com')
    ->addRow()
        ->addColumn(1003)
        ->addColumn('ijkl')
        ->addColumn('ijkl@gmail.com')
    ->display()
;