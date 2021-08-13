function save() {
    var content = document.getElementById('editor').innerHTML;
    var id = document.getElementById('lesson').id;
    console.log(content)
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          console.log(this.responseText)
          /* if (this.responseText) {
            window.location.href = "../../../index.php";
          } */
      }
    };
    xmlhttp.open("GET", "custom/src/save.php?id="+id+"&content=" + content, true);
    xmlhttp.send();
}