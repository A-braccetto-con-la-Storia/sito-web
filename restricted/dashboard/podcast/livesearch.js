function showSpeakers(str) {
    if (str.length==0) { 
        document.getElementById("livesearch-speakers").innerHTML="";
        document.getElementById("livesearch-speakers").style.border="0px";
        return;
    }
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            document.getElementById("livesearch-speakers").innerHTML=this.responseText;
            document.getElementById("livesearch-speakers").style.border="1px solid #A5ACB2";
        }
    }
    xmlhttp.open("GET","livesearch.php?u=speakers&q="+str,true);
    xmlhttp.send();
}

function addSpeaker(tag) {
    document.getElementById("search-username").value = tag.id;
}