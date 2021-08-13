<?

    define('BOT_TOKEN','860150800:AAFwnLIqYFic6fZrhgUYSbqY5I0uuFY1Uw4'); //TODO: prendi da db
    
    function isLoginValid($auth_date) {
        if ((time() - $auth_date) > 86400) return false;
        return true;
    }

    function isHashValid($auth_data) {
        $check_hash = $auth_data['hash'];
        unset($auth_data['hash']);
        $data_check_arr = [];
        foreach ($auth_data as $key => $value) $data_check_arr[] = $key . '=' . $value;
        sort($data_check_arr);
        $data_check_string = implode("\n", $data_check_arr);
        $secret_key = hash('sha256', BOT_TOKEN, true);
        $hash = hash_hmac('sha256', $data_check_string, $secret_key);
        if (strcmp($hash, $check_hash) !== 0) return false;
        return true;
    }

?>