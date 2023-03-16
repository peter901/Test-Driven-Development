<?php 

namespace App;

class Article {
    public $title;


    public function getSlug(){

        $slug = $this->title;

        $slug = preg_replace('/\s+/','_',trim($slug));
        
        $slug = preg_replace('/[^\w]+/','',trim($slug));
        return $slug;
    }
}