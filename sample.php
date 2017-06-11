<?php

require_once('vendor/autoload.php');

use kuralab\jsonviewer\JsonViewer;

$data = [
    'a' => '1',
    'b' => '2',
    'c' => [
        'x',
        'y',
        'z'
    ],
    'd' => [
        'a' => '1',
        'b' => '2',
        'c' => '3'
    ]
];
$rowJson = json_encode($data);
$delimiter = "\n";
$indent = 1;
$indentTab = "\t";

$viewer = new JsonViewer($rowJson, $delimiter, $indent, $indentTab);
echo $viewer->visualize();
