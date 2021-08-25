function changePubOption(opt) {
    document.getElementById('calendar').style.display="none";
    if (opt == "pubblica") document.getElementById('opt-pubblicazione-descrizione').innerHTML="L'articolo verrà pubblicato immediatamente";
    if (opt == "programma") document.getElementById('calendar').style.display="block";
    if (opt == 'bozza') document.getElementById('opt-pubblicazione-descrizione').innerHTML="L'articolo verrà salvato come bozza e non verrà pubblicato";
}