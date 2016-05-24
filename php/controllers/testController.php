<?php

class testController {

    private $year;
    private $month;

    public function init(){
        
        $template = new TemplateController;

        $data= $template->getDataFromFile("../our_work/test.htm");


    
        $view = new TestView();
    }

    
}


?>