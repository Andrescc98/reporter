<?php

namespace Controllers;

use Libs\Controller;
use Libs\Query;

class ReporterController extends Controller
{
    public function __construct() {
        $this->is_session();
    }

    public function listView()
    {
        $persons = Query::select("reporters");
        echo $this->render("reporter/list", compact("persons"));
    }

    public function register()
    {
        echo $this->render("reporter/register");
    }
}
