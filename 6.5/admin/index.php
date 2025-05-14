<?php

session_start();
require('../app/app.php');

ensure_user_is_authenticated();

// echo __FILE__;
view('admin/index', Data::get_terms());
