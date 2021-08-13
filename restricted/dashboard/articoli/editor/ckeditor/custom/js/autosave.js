function autosave() {
    var content = document.getElementsByName('content').value;
    var id = document.getElementById('lesson').getAttribute('name');
    console.log(content)
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var result = JSON.parse(this.responseText);
        if (result['success'])
            document.getElementsByName('content').innerHTML = result['html'];
        else {
            $('#error').modal('show');
            document.getElementById('error_message').value = result['message'];
        }
      }
    };
    xmlhttp.open("GET", "custom/src/autosave.php?id="+id+"&content=" + content, true);
    xmlhttp.send();
}