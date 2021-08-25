<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="utf-8">
        <title>Editor articolo | A braccetto con la Storia</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <!-- Custom CSS -->
        <link href="./custom/css/style.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="custom-header">
            <nav class="navbar header">
                <h3>A braccetto con la Storia</h3>
                <button type="submit" name="submit" class="btn btn-danger">Salva ed Esci</button>
            </nav>
        </div>  
        <div class="content">
            <section id="title" >
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="article-title">
                    <label for="floatingInput">Titolo dell'articolo</label>
                </div>
            </section>
            <section id="options" style="margin-bottom: 1%">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Impostazioni di pubblicazione</h5>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" onclick="changePubOption('pubblica')">
                            <label class="form-check-label" for="inlineRadio1">Pubblica articolo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" onclick="changePubOption('programma')">
                            <label class="form-check-label" for="inlineRadio2">Programma articolo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" onclick="changePubOption('bozza')">
                            <label class="form-check-label" for="inlineRadio3">Salva come bozza</label>
                        </div>
                        <p id="opt-pubblicazione-descrizione">L'articolo verrà pubblicato immediatamente</p>
                        <div class="input-group mb-3" id="calendar" style="display: none;">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="tg-notify" checked>
                            <label class="form-check-label" for="tg-notify">
                                Invia notifica su Telegram
                            </label>
                        </div>
                    </div>
                </div>
            </section>
            <section id="categories" style="margin-bottom: 1%">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Categorie articolo</h5>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Pubblica articolo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Programma articolo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                            <label class="form-check-label" for="inlineRadio3">Salva come bozza</label>
                        </div>
                    </div>
                </div>
            </section>
            <section id="categories" style="margin-bottom: 1%">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tags articolo</h5>
                    </div>
                </div>
            </section>
            <section class="editor" >
                <textarea name="content" id="editor"></textarea>
            </section>
        </div>
        <footer>
            <p>Basato su <a style="color: gold;" href="https://ckeditor.com/docs/ckeditor5/latest/" targate="_blank">CKEditor 5</a> e personalizzato da 'A braccetto con la Storia'</p>
            <hr>
            <p>L'editor è in fase <b>beta</b>, ti preghiamo di pazientare ed inviarci feedback sulla tua esperienza.</p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="dist/bundle.js"></script>
        <script src="custom/js/save.js"></script>
        <script src="custom/js/autosave.js"></script>
        <script src="custom/js/changePubOptions.js"></script>
    </body>
</html>