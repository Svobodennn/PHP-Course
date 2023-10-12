<?php

/*
 * Usage of Namespace
Not mandatory but helpful for avoiding naming conflicts.
Enables the distinction of classes with the same name.
Traditionally, a namespace is defined that extends to
the folder it is in, all the way to the root directory.
*/

namespace NamespaceUsage;

// or --> use app\view\Home;

require 'app/controller/home.php';
require 'app/view/home.php';

$home = new \app\view\Home();
$home = new \app\controller\Home();