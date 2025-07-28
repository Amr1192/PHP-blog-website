<?php
session_start();
define('BASE_PATH',dirname(__DIR__).'/');
require_once BASE_PATH .'config/functions.php';
require_once 'autoload.php';
config('Database');
config('validations');
config('routes');