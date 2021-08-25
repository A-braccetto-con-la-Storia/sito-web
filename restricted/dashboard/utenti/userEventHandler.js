function openEditModal(row) {
    var data = row.getData();
    $('#edit-utente').modal('toggle');
    document.getElementById('edit-id').value = data.id;
    document.getElementById('edit-username').value = data.username;
}

function sanctionsUser(row) {
    var data = row.getData();
    $('#sanctions-utente').modal('toggle');
}