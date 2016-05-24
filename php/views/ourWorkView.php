<?php
class OurWorkView{
    
    public function __construct(){
        $template = new TemplateView;
        $template->openStandardView("Evolve FILA", "css/ourWork.css");
        $template->addJS("js/ourWork.js");
        $template->closeStandardHead();
        $this->drawContent();
        $template->closeStandardView();
    }

   
    
    private function drawContent(){
       
        echo '<div class="textContentContainer">';
        echo '  <iframe id="iframeContent" src="our_work/ourWork.htm" onload="setIframeHeight(this.id)"></iframe>';
        echo '</div>';

    }
          
}
?>


