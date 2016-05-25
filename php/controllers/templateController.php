<?php

class TemplateController {

    public function init(){

    }

    public function getCurrentPageWithParams(){
        $uri = $_SERVER['REQUEST_URI'];
        $path = explode("/",$uri);
        $endDir = count($path) - 1;
        $currentPage = $path[$endDir];

        return $currentPage;
    }

    public function getCurrentPage(){
        $currentPage=$this->getCurrentPageWithParams();
        if (strpos($currentPage, '?') !== false) {
            $separateData = explode("?",$currentPage);
            $currentPage = $separateData[0];
        }
        return $currentPage;
    }

    public function getPageId(){
        $currentPage = $this->getCurrentPage();
        $separateData = explode(".",$currentPage);
        $id = $separateData[0];

        return $id;
    }

    public function getAction(){
        $result = array('action'=>"init");
        
        if(isset($_POST['action'])){
            $result['action']=$_POST['action'];
        }
        if(isset($_POST['actionParams'])){
            $result['params']=$_POST['actionParams'];
        }

        return $result;
    }

    public function getDataFromFile($path){
        $data = "";

        if (file_exists($path) ){
            $file = fopen($path, "r") or die("Unable to open file!");
            $data = fread($file,filesize($path));
            fclose($file);
        }

        return $data;
    }

    public function getDataFromFileLineByLine($path){
        $data = array();

        if (file_exists($path) ){
            $file = fopen($path, "r") or die("Unable to open file!");
            while(! feof($file)){
                array_push($data, fgets($file));
            }
            fclose($file);
        }

        return $data;
    }

}

?>