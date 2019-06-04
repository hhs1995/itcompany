<?php

class ACFfunctions extends Functions {
    public function __construct() {
      
                
        add_action('unique_action_tag', 'image_acf');
        function image_acf($image){
            if( !empty($image) ){ 
                echo '<img src="'.$image['url'].'" alt="'.$image['alt'].'"/>';
            }
        }
        function image_acff($image){
            if( !empty($image) ){ 
                   echo '<img class="img-fluid" src="'.$image['url'].'" alt="'.$image['alt'].'"/>';
             }
        }
    }   
 
}
new ACFfunctions;


