<?php
class HomeView{
    
    public function __construct(){
        $template = new TemplateView;
        $template->openStandardView("Evolve FILA", "css/home.css");
        //$template->addJS("../js/edit.js");
        $template->closeStandardHead();
        $this->drawContent();
        $template->closeStandardView();
    }

   
    
    private function drawContent(){
       echo '<div id="imgContainer">';
       echo '   <img id="homeBanner" src="images/homeBanner.jpg">';
       echo '<div>'; 

    }
          
}
?>


