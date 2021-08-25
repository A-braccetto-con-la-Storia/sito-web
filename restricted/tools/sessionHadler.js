function getSession(params, callbackFunction) {
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            callbackFunction(this.responseText);
        }
    }
    xmlhttp.open("GET","../tools/sessionHandler.php"+params,true);
    xmlhttp.send();
}

function setUserData(result) {
    document.getElementById('page-title').innerText= result['user']['username']+"| A braccetto con la Storia";
    document.getElementById('profile-pic').src = result['user']['profile_photo'];
    document.getElementById('user-name').innerHTML= result['user']['first_name']+" "+result['user']['last_name'];
}

function setDataIfSessionIsValid(response) {
    var result = JSON.parse(response);
    if (result['code']!=200) location.href= '../../login/index.php?e='+result['code'];
    else setUserData(result);
}

function setUserProfilePage(params) {
    getSession(params,setDataIfSessionIsValid);
}

function isSessionValid(params) {
    var result = JSON.parse(response);
    if (result['code']!=200) location.href= '../../login/index.php?e='+result['code'];
    else true
}

function checkSession(params) {
    getSession(params,isSessionValid);
}

function setDashboardData(result) {

}

function setDashboard() {
    var result = JSON.parse(response);
    if (result['code']!=200) location.href= '../../login/index.php?e='+result['code'];
    else setDashboardData(result);
}

function sanziona() {
    document.getElementById('sanziona-btn').disabled = true;
    if (document.getElementById('motivazione').value!='' && (document.getElementById('radio-warn').checked || document.getElementById('radio-ban').checked))
        document.getElementById('sanziona-btn').disabled = false;
}