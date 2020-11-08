<?php
    namespace Libs;
    use League\Plates\Engine;

    abstract class Controller{

        use Session;

        public function __construct() {
            $this->template = new Engine("../views");
        }

        protected function render(string $template, array $data=null){

            return $data 
                ? $this->template->render($template, $data)
                : $this->template->render($template);
            
        }
    }