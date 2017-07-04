<?php
//此文件必须被加载之后才能执行
use daniel007\model\Model;
$config = [
    'db_host'=>'127.0.0.1',
    'db_user'=>'root',
    'db_password'=>'root',
    'db_name'=>'students',
    'db_charset'=>'utf8'
];
Model::setConfig($config);