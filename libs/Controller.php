<?php

namespace Libs;

use League\Plates\Engine;

abstract class Controller
{

    use Session;

    public function __construct()
    {

    }

    protected function render(string $view, array $data = null)
    {
        $template = new Engine("../views");

        return $data
            ? $template->render($view, $data)
            : $template->render($view);
    }

    protected function redirect(string $to)
    {
        return header("location:{$to}");
    }
}
