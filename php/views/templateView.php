<?php
class TemplateView{

    public function openStandardView($title, $styleSheet){
        $this->openHtml();
        $this->openHead();
        $this->addTitle($title);
        $this->addStyleSheet($styleSheet);
        $this->addJS("importedLibraries/jquery-1.11.2.min.js");
        $this->addJS("js/template.js");

    }

    public function closeStandardHead(){
        $this->closeHead();
        $this->openBody();
        $this->addHeader();
        $this->openContent();
    }

    public function closeStandardView(){
        $this->closeContent();
        $this->closeBody();
        $this->closeHtml();
    }

    public function openHtml(){
        echo '<html>';
    }

    public function openHead(){
        echo '  <head>';
        echo '      <meta charset="windows-1252">';
        echo '      <meta name="author" content="Ellen Alton">';
        echo '      <base href="http://localhost/evolvefila/" target="_blank">';
    }

    public function addTitle($title){
        echo '      <title>'.$title.'</title>';
    }

    public function addStyleSheet($path){
        echo '      <link rel="stylesheet"  href="'.$path.'" type="text/css">';
    }

    public function addJS($path){
        echo '      <script src="'.$path.'"></script>';
    }

    public function closeHead(){
        echo '  </head>';
    }

    public function openBody(){
        echo '  <body onresize="onWindowResize()">';
    }

    public function addHeader(){

        echo '      <div id="Header">';
        echo '          <img id="logo" src="images/logo.png">';
        echo '          <div id="navBar" class="tabContainer">';
        echo '              <ul class="tabList clickable">';
        echo '                  <li class="tab" onclick="selectNavTab()" data-link="our_work">Our Work <span class="caret">&#9660</span></li>';
        echo '                  <li class="tab" onclick="selectNavTab()" data-link="current_projects">Current Projects<span class="caret">&#9660</span></li>';
        echo '                  <li class="tab" onclick="selectNavTab()" data-link="our_people">Our People<span class="caret">&#9660</span></li>';
        echo '                  <li class="tab" onclick="selectNavTab()" data-link="testimonials">Testimonials<span class="caret">&#9660</span></li>';
        echo '                  <li class="tab" onclick="selectNavTab()" data-link="gallery">Gallery<span class="caret">&#9660</span></li>';
        echo '                  <li class="tab" onclick="selectNavTab()" data-link="contact">Contact<span class="caret">&#9660</span></li>';
        echo '                  <li class="tab" onclick="selectNavTab()" data-link="donate">Donate</li>';
        echo '              </ul>';
        echo '          </div>';
    	echo '      </div>';
        
    }

    public function openContent(){
        echo '      <div id="Content">';
    }

    public function openContentSlider($id){
        echo '<div id ='.$id.' class="contentSlider">';
        echo '  <div class="sliderNavigation">';
        echo '      <div class="leftSliderArrowContainer" onclick="navigateSlider()">';
        echo '          <img src="images/sliderArrowLeft.png">';
        echo '      </div>';
        echo '      <div class="rightSliderArrowContainer" onclick="navigateSlider()">';
        echo '          <img src="images/sliderArrowRight.png">';
        echo '      </div>';
        echo '      <div class="sliderNavBar">';
        echo '          <div class="navDotsContainer">';
        echo '              <div class="sliderDot sliderDotHighlighted" data-slide="1"></div>';
        echo '              <div class="sliderDot" data-slide="2"></div>';
        echo '              <div class="sliderDot" data-slide="3"></div>';
        echo '          </div>';
        echo '      </div>';
        echo '  </div>';
        echo '  <div class="sliderSlideCollection">';
        echo '      <ul class="slideList">';
    }

    public function closeContentSlider(){
        echo '      </ul>';
        echo '  </div>';
        echo '</div>';
    }

    public function closeContent(){
        echo '      </div>';
    }

    public function closeBody(){
        echo '  </body>';
    }

    public function closeHtml(){
        echo '</html>';
    }
  
        
}
?>


