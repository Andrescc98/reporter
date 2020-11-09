<?php

namespace Libs;

use League\Plates\Engine;

abstract class Controller
{
    private $host = "http://reporter.com";

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

    protected function response($res, int $code = 200)
    {
        http_response_code($code);
        if($code >= 400){
            echo json_encode(["error" => true ,"message" => $res]);
            die();
        }elseif($code >= 200 and $code < 400){
            echo json_encode($res);
            die();
        }

    }
}
