<?

    $ch = curl_init(); 
    $url = 'https://api.abraccettoconlastoria.com/user/?&authkey=25f9e794323b453885f5181f1b624d0b';
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch); 

    print_r($output);
?>