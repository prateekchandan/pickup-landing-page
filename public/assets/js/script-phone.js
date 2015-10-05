window.onload = function() {
        function focus(){
			document.getElementById('phone_num').focus();
		}
         document.getElementById('free').addEventListener('click', focus);
         document.getElementsByClassName('img')[0].addEventListener('click', focus);
}

function hide(id){
    document.getElementById(id).style.display="none";
}

function show(id){
    document.getElementById(id).style.display="block";
}
