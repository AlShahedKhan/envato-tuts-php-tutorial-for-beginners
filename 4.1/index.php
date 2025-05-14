<?php
    require('app/functions.php');
    $title = 'Hello, model!';

    $view_bag = [];

    $view_bag['title'] = 'This is the Title';

    view('index', $title);