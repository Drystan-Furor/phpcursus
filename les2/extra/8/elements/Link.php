<?php
class Link 
{
    private $html = '<a href="link">title</a>'; 
    private $url;
    private $title;

    public function __construct($url, $title)
    {
        $this->url = $url;
        $this->title = $title;

        $this->html = '<a href="'.$this->url.'" target="_blank">'.$this->title.'</a>';
    }

    public function show() {
       echo $this->html;
    }
}