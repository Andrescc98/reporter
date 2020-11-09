<?php

namespace Libs;

trait Session
{

    private function start(array $user)
    {
        session_start();
        $_SESSION[$user["rol"]] = $user;
    }

    private function is_session()
    {
        if(empty($_SESSION)){
            return false;
        }
        return true;
    }

    private function destroy()
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
