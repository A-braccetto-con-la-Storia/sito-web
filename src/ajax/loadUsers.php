<?

    // create curl resource 
    $ch = curl_init(); 
    // set url 
    curl_setopt($ch, CURLOPT_URL, "https://api.abraccettoconlastoria.com/index.php/user/all?&authkey=25f9e794323b453885f5181f1b624d0b"); 

    //return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    // $output contains the output string 
    $output = curl_exec($ch); 

    // close curl resource to free up system resources 
    curl_close($ch);  


    $data = [];
    $users = json_decode($output,true);

    //build data array
    foreach ($users as $user) {

        $roles = '';
        foreach ($user['roles'] as $role) $roles= $roles." ".$role['role_name'];

        $warns = 0;
        if (isset($user['warns'])) $warns = count($user['warns']);

        $status = "ATTIVO";
        if ($user['is_banned'][0]) $status="BAN";

        $data[] = [
            "id" => $user['chat_id'],
            "username" => $user['username'],
            "role" => $roles,
            "flag" => $user['flag'],
            "points" => $user['points'],
            "warns" => $warns,
            "status" => $status,
            "last_access" => $user['last_use']
        ];
    }

    //return JSON formatted data
    echo(json_encode($data));

?>