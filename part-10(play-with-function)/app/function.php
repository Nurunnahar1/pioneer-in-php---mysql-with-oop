<?php  

/**
 * info
 * @param string $name
 * @param int $age
 * @param string $skill
 * @return void
 */
function info(string $name,int $age,string $skill=null){
    if($skill){
        echo "Hello {$name}, You are {$age} years old and you are a {$skill}";
    
    }else{
           echo "Hello {$name}, You are {$age} years old.";
    }
}

function createTitle(string $title,string $tag = 'h1', string $align = 'center', string $font_size = '200px', string $color = 'red'){
    echo "<{$tag} style=\"text-align:{$align} ; font-size:{$font_size} ; color:{$color} ;\">{$title}</{$tag}>";
}
 