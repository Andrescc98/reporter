<?php

namespace Controllers;

use Libs\Controller;
use Libs\Query;

class ReporterController extends Controller
{

    public function listView()
    {
        $this->is_session();
        $persons = Query::select("reporters");
        echo $this->render("reporter/list", compact("persons"));
    }
}
