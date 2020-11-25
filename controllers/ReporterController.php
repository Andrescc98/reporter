<?php
    namespace Controllers;
    use Libs\Controller;

    class ReporterController extends Controller{

        public function listView(){
            $this->is_session();
            echo $this->render("reporter/list");
        }
    }
