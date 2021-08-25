<?

    /**
     * Valida la sessione valutando i parametri di login
     */
    session_start();
    require_once 'Session.php';
    
    if (isset($_SESSION['user'])) {
        $login = unserialize($_SESSION['user']);
        try {
            if ($login->isSessionValid()) 
                echo json_encode(
                    array(
                        "code"=> 200,
                        "user" => array(
                            "id" => $login->getID(),
                            "first_name" => $login->getFirstName(),
                            "last_name" => $login->getLastName(),
                            "username" => $login->getUsername(),
                            "profile_photo" => $login->getProfilePhoto(),
                            "hash" => $login->getHash(),
                            "auth_date" => $login->getAuthDate(),
                        )
                    )
                );
        } catch (Exception $e) {
            session_destroy();
            echo json_encode(
                array(
                    "code"=> $e->getCode(),
                    "description" => $e->getMessage()
                )
            );
        }
    } else {
        try {
            $login = new Session($_GET, '860150800:AAFwnLIqYFic6fZrhgUYSbqY5I0uuFY1Uw4', 86400);
            $_SESSION['user'] = serialize($login);
            echo json_encode(
                array(
                    "code"=> 200,
                    "user" => array(
                        "id" => $_GET['id'],
                        "first_name" => $_GET['first_name'],
                        "last_name" => $_GET['last_name'],
                        "username" => $_GET['username'],
                        "profile_photo" => $_GET['photo_url'],
                        "hash" => $_GET['hash'],
                        "auth_date" => $_GET['auth_date'],
                    )
                )
            );
        } catch (Exception $e) {
            session_destroy();
            echo json_encode(
                array(
                    "code"=> $e->getCode(),
                    "description" => $e->getMessage()
                )
            );
        }
    }
?>