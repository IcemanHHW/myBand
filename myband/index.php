<?php

require 'include/config.php';

require 'include/template.php';

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
        require_once 'model/getarticles.php';
        require_once 'model/getsidebar.php';
        $templateParser->assign('result_list',$result_list);
        $templateParser->assign('result_list2',$result_list2);
        $templateParser->display('home.tpl');
        break;
    case 'agenda':
        require_once 'model/getsidebar.php';
        $templateParser->assign('result_list2',$result_list2);
        $templateParser->display('agenda.tpl');
        break;
    case 'contact':
        require_once 'model/getsidebar.php';
        $templateParser->assign('result_list2',$result_list2);
        $templateParser->display('contact.tpl');
        break;
    case 'legal':
        require_once 'model/getsidebar.php';
        $templateParser->assign('result_list2',$result_list2);
        $templateParser->display('legal.tpl');
        break;
}

// footer
$templateParser->display('footer.tpl');


 ?>
