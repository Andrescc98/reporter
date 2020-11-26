<?php

namespace Libs;

use League\Plates\Engine;

abstract class Controller
{

    use Session;

    /**
     * rederiza las vistas usando el motor de plantillas plates
     * 
     * @param string $view
     * @param array $data
     * 
     * @return string
     */
    protected function render(string $view, array $data = null):string
    {
        $template = new Engine(__DIR__."/../views");

        return $data
            ? $template->render($view, $data)
            : $template->render($view);
    }

    /**
     * envia las respuestas en formato json
     * 
     * @param mixed $res
     * @param int $code
     * 
     * 
     */
    protected function response($res, int $code = 200)
    {
        
        if($code >= 400){
            echo json_encode(["error" => true ,"message" => $res]);
            return http_response_code($code);
        }elseif($code >= 200 and $code < 400){
            echo json_encode($res);
            return http_response_code($code);
        }

    }
}
