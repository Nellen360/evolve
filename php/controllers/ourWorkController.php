<?php

class OurWorkController {

    public function init(){
        $template = new TemplateController;
        $menuList = $template->getDataFromFileLineByLine(ROOT."/our_work/tabMenuList.txt");
        $view = new OurWorkView($menuList);
    }


}


?>