<?
    if (isset($_GET['chat_id'])) {
        //temp
        $url = 'https://api.telegram.org/bot1007662261:AAG2tZeCG5zGDS7hYVn2s_SRWbbKEgteFI0/getChat?chat_id='.$_GET['chat_id'];
        $result = file_get_contents($url);
        echo $result;
    }
?>