<?php
class TestimonialsView{
    
    public function __construct(){
        $template = new TemplateView;
        $template->openStandardView("Evolve FILA", "css/testimonials.css");
        //$template->addJS("../js/edit.js");
        $template->closeStandardHead();
        $this->drawContent();
        $template->closeStandardView();
    }

   
    
    private function drawContent(){


    }
          
}
?>


