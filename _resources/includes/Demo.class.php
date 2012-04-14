<?php
/**
* Demo Class
* Provides methods for easily creating demo pages
*/

class Demo {
    public $title;
    public $description;
    public $directory;
    public $css = array();
    public $js = array();
    public $content;
    public $showInfo = true;
    
    function __construct( $title ){
        $this->title = $title;
    }
    
    public function setDescription( $description ){
        $this->description = $description;
    }
    
    public function hideInfo(){
        $this->showInfo = false;
    }
    
    public function addCSS( $path ){
        $this->css[] = $path;
    }
    
    public function addJS( $path ){
        $this->js[] = $path;
    }
    
    public function displaySource( $content, $type ) {
        if($type === "html"){
            $this->content .= '<pre id="'.$type.'" class="prettyprint"><code>'.htmlspecialchars( $this->content ).'</code></pre>';
        } else {    
            $this->content .= '<pre id="'.$type.'" class="prettyprint"><code>'.file_get_contents( $content ).'</code></pre>';
        }        
    }
    
    public function startDemo(){
        ob_start();   
    }
    
    public function endDemo(){
        $this->content = ob_get_clean();
    }
    
    public function renderDemo(){
        ob_start();
        include('demo-template.php');
        echo ob_get_clean();
    }
}
?>