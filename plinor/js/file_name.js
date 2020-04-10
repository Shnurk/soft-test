function file_name(field) {
    var name=document.getElementById(field).value;
    name=name.split('\\').pop();
    document.getElementById('file_desc').style.display='inline-block';
    document.getElementById('cross').style.display='inline-block';
    document.getElementById('file_desc').value=name;
}
function cross() {
    document.getElementById('file_desc').value='';
    document.getElementById('file_desc').style.display='none';
    document.getElementById('cross').style.display='none';
    document.getElementById('files').value='';
}


function cab_vis() {
    alert(1);
}