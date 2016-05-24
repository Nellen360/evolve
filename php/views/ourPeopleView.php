<?php
class OurPeopleView{
    
    public function __construct(){
        $template = new TemplateView;
        $template->openStandardView("Evolve FILA", "css/ourPeople.css");
        //$template->addJS("../js/edit.js");
        $template->closeStandardHead();
        $this->drawContent();
        $template->closeStandardView();
    }

   
    
    private function drawContent(){
        echo '<div class="textContentContainer">';
        echo '  <iframe id="iframeContent" src="our_people/ourPeople.htm" onload="setIframeHeight(this.id)"></iframe>';
        echo '</div>';

    }
          
}
?>


