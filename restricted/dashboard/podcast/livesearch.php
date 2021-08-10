<?  
    function startsWith($haystack, $needle) {
        $length = strlen($needle);
        return substr( $haystack, 0, $length) === $needle;
    }

    if (isset($_GET['u']) && isset($_GET['q'])) {
        switch ($_GET['u']) {
            case 'speakers':
                $json = file_get_contents("./tmp/speakers.json");
                $data = json_decode($json,true);
                $result= '';
                foreach ($data as $speaker) {
                    if (startsWith(strtolower($speaker),strtolower($_GET['q'])))
                        $result = $result.'<div style="cursor: copy;" id="'.$speaker.'" onclick="addSpeaker(this);">'.$speaker.'</div>';
                }
                if ($result=='') $result="Nessuno speaker trovato";
                echo $result;
                break;
        }
    }

?>