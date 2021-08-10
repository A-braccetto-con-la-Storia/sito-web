<?
    if (isset($_GET['file_id'])) {
        //temp
        $url = 'https://api.telegram.org/bot1007662261:AAG2tZeCG5zGDS7hYVn2s_SRWbbKEgteFI0/getFile?file_id='.$_GET['file_id'];
        $result = file_get_contents($url);
        echo $result;
    }
?>