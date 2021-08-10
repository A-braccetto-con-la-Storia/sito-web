function updateCountTitle(input) {
    var max = 255;
    var str = '<font color="green">'+(input.value.length)+'/'+max+'</font>';
    if (input.value.length>max/2) str = '<font color="gold">'+(input.value.length)+'/'+max+'</font>';
    if (input.value.length==max) str = '<font color="red">'+(input.value.length)+'/'+max+'</font>';
    document.getElementById('lbl-count-title').innerHTML= str;
    if (input.value=='') document.getElementById('lbl-count-title').innerHTML='0/'+max;
}

function updateCountDescription(input) {
    var max = 65535;
    var str = '<font color="green">'+(input.value.length)+'/'+max+'</font>';
    if (input.value.length>max/2) str = '<font color="gold">'+(input.value.length)+'/'+max+'</font>';
    if (input.value.length==max) str = '<font color="red">'+(input.value.length)+'/'+max+'</font>';
    document.getElementById('lbl-count-description').innerHTML= str;
    if (input.value=='') document.getElementById('lbl-count-description').innerHTML='0/'+max;
}