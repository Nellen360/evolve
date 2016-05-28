<?php
class HomeView{
    
    public function __construct(){
        $template = new TemplateView;
        $template->openStandardView("Evolve FILA", "css/home.css");
        //$template->addJS("../js/edit.js");
        $template->closeStandardHead();
        $template->openContentSlider("homeSlider");
        



        $this->drawContent();
        $template->closeContentSlider();
        $template->closeStandardView();
    }

   
    
    private function drawContent(){
        echo '<li class="sliderSlide">';
        echo '  <div>';
        echo '      <img id="homeBanner" src="images/homeBanner.jpg">';
        echo '  </div>';
        echo '</li>';
        echo '<li class="sliderSlide">';
        echo '  <div>';
        echo '      <img id="test" src="images/logo.png">';
        echo '  </div>';
        echo '</li>';
    }
          
}
?>


