var modal = document.getElementById('myModal');
var btn = document.getElementById('myButton');
var span = document.getElementById('close')

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(e){
    if (e.target == modal){
        modal.style.display = "none";
    }
}
