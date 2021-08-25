function getArticles() {
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            if (this.responseText)
                document.getElementById('articles-list').innerHTML= this.responseText;
        }
    }
    xmlhttp.open("GET","getArticles.php",true);
    xmlhttp.send();
}