<?php 
namespace Makaroni\Framework\View;

class View{

    public function make(string $view, array|null $data = null): void
    {
        $basePath = "../../main/view/";
        $fileExtension = ".php";

        if (!file_exists($basePath . $view . $fileExtension)) {
            throw new \Exception("The {$view} view not found!");
        }

        if(! is_null($data)){
            extract($data);
        } 
        require_once $basePath . $view . $fileExtension;
    }
}