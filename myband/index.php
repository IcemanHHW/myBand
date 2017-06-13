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

$url = isset($_GET['url']) ? $_GET['url'] : 'home';

switch ($url) {
    case 'home':
        include 'model/getpagination.php';
        $templateParser->assign('page',$page);
        include 'model/getarticles.php';
        include 'model/getsidebar.php';
        $templateParser->assign('number_of_pages',$number_of_pages);
        $templateParser->assign('result',$result);
        $templateParser->assign('result_list2',$result_list2);
        $templateParser->display('home.tpl');
        break;
    case 'agenda':
        require_once 'model/getagenda.php';
        require_once 'model/getsidebar.php';
        $templateParser->assign('result_list2',$result_list2);
        $templateParser->assign('result_list3',$result_list3);
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
