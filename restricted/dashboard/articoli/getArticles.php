<?
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    //TUTTE LE CHIAMATE A DB SONO TEMPORANEE 
    $conn2 = new mysqli("localhost","abraccet_temp","k61Szi&8","abraccet_main");
    $sql = 'SELECT * FROM Articles';
    $articles = $conn2->query($sql);

    if ($articles->num_rows > 0) {       
        $html = '';
        while($article = $articles->fetch_assoc()) {
            $sql = 'SELECT author_id FROM ArticlesAuthors WHERE article_id='.$article['article_id'];
            $authors = $conn2->query($sql);
            $author = '';
            if ($authors->num_rows > 0) {
                if ($authors->num_rows > 1) while($row = $authors->fetch_assoc()) $author = $author.", ".$row['author_id'];
                else $author = $authors->fetch_assoc()['author_id'];
                
            }
            $html= $html.'
                <tr>
                    <td>'.$article['article_id'].'</td>
                    <td>'.$article['title'].'</td>
                    <td>'.$author.'</td>
                    <td>Pubblicato</td>
                    <td class="td-actions">
                        <button type="button" rel="tooltip" title="Modifica" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="Impostazioni" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">settings</i>
                        </button>
                        <button type="button" rel="tooltip" title="Rimuovi" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">delete</i>
                        </button>
                    </td>
                </tr>
            ';
        }
        echo $html;
    } else echo false;

?>