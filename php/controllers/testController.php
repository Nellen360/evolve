<?php

class testController {

    private $year;
    private $month;

    public function init(){
        
        $template = new TemplateController;

        $menuList = $template->getDataFromFileLineByLine(ROOT."/our_work/tabMenuList.txt");
        var_dump($menuList);


    
        $view = new TestView();
    }

    
}


?>