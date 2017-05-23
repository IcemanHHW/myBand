<?php

require 'libs/Smarty.class.php';
//set up template engine
$templateParser = new Smarty();
$templateParser->template_dir = "views";
$templateParser->compile_dir = "views/compiled";

 ?>
