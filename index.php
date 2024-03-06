<?php

require 'functions.php';
require 'Database.php';
require 'router.php';


   $config = require('config.php');

        $db= new Database($config['database']);


foreach ($posts as $post) {
    echo "<li>{$post['title']}</li>";
}