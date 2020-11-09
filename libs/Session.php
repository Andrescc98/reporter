<?php

namespace Libs;


/**
 * maneja la sesion del usuario
 */
trait Session
{

    /**
     * inicia la sesion y almacena usuario en $_SESSION
     * 
     * @param array $user
     * 
     * @return void
     */
    private function start(array $user):void
    {
        session_start();
        $_SESSION[$user["rol"]] = $user;
    }

    /**
     * determina si la sesion esta activa
     * 
     * @return bool
     */
    private function is_session():bool
    {
        if(empty($_SESSION)){
            return false;
        }
        return true;
    }

    /**
     * destruye la sesion
     * 
     * @return void
     */
    private function destroy():void
    {
        session_start();

        $_SESSION = array();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }

        session_destroy();
    }
}
