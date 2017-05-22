<?php

require 'include/config.php';

//head
$templateParser->assign('myTitle',$title);
$templateParser->display('head.tpl');

// header
$templateParser->display('header.tpl');

// menu
$templateParser->display('menu.tpl');

$action = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($action) {
    case 'home':
        $templateParser->display('home.tpl');
        break;
    case 'agenda':
        $templateParser->display('agenda.tpl')
          break;
    case 'contact':
        $templateParser->display('contact.tpl')
        break;
    case 'legal':
        $templateParser->display('legal.tpl')
        break;
}

// footer
$templateParser->assign('myFooter',$footer);
$templateParser->display('footer.tpl');


 ?>
