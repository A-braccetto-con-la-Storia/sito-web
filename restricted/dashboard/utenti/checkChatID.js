function checkChatID() {
    var chat_id = document.getElementById('chat-id-input').value;
    if (chat_id!='') {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState==4 && this.status==200) {
                var data = JSON.parse(this.responseText);
                if (data['ok']) {
                    var user = data['result'];
                    $('#user-found').modal('toggle');
                    document.getElementById('first-last-name').innerHTML= user['first_name']+' '+user['last_name'];
                    document.getElementById('username').innerHTML= '@'+user['username'];
                    var xmlhttp2 = new XMLHttpRequest();
                    xmlhttp2.onreadystatechange = function() {
                        if (this.readyState==4 && this.status==200) {
                            var data = JSON.parse(this.responseText);
                            if (data['ok']) {
                                var photo = data['result']['file_path'];
                                document.getElementById('user-photo').src= 'https://api.telegram.org/file/bot1007662261:AAG2tZeCG5zGDS7hYVn2s_SRWbbKEgteFI0/'+photo;
                            }
                        }
                    }
                    xmlhttp2.open("GET", "./getUserPhoto.php?file_id=" + user['photo']['big_file_id'], true);
                    xmlhttp2.send();
                    document.getElementById('no-user').style.display= 'none';
                    document.getElementById('user-info').style.display= 'block';
                    document.getElementById('save-btn').disabled= false;
                } else $('#user-not-found').modal('toggle');
            }
        };
        xmlhttp.open("GET", "./checkChatID.php?chat_id=" + chat_id, true);
        xmlhttp.send();
    } else $('#error').modal('toggle');
}