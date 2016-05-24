<?php
class CurrentProjectsView{
    
    public function __construct(){
        $template = new TemplateView;
        $template->openStandardView("Evolve FILA", "css/currentProjects.css");
        //$template->addJS("../js/edit.js");
        $template->closeStandardHead();
        $this->drawContent();
        $template->closeStandardView();
    }

   
    
    private function drawContent(){
        echo '<div class="textContentContainer">';
        echo '  <iframe id="iframeContent" src="current_projects/currentProjects.htm" onload="setIframeHeight(this.id)"></iframe>';
        echo '</div>';

    }
          
}
?>


