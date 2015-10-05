window.onload = function() {
        /*
        var anchors = document.getElementsByClassName('text-head');
        for(var i = 0; i < anchors.length; i++) {
            anchors[i].onclick = function(i) {
            	return function(){
	                var id = anchors[i].getAttribute("data-targetid");
	                var img=document.getElementById(anchors[i].getAttribute("data-img"));
	                if(img.className.indexOf("rotate")==-1)
	                	img.className="rotate";
	                else
	                	img.className="";
	                toggleClass(document.getElementById(id),'show')
	            }
            }(i);
        }*/
        function focus(){
			document.getElementById('phone_num').focus();
		}
         document.getElementById('free').addEventListener('click', focus);
         document.getElementsByClassName('img')[0].addEventListener('click', focus);
}


// Toggle class function
function toggleClass(element, className){
    if (!element || !className){
        return;
    }
    
    var classString = element.className, nameIndex = classString.indexOf(className);
    if (nameIndex == -1) {
        classString += ' ' + className;
    }
    else {
        classString = classString.substr(0, nameIndex) + classString.substr(nameIndex+className.length);
    }
    element.className = classString;
}

function hide(id){
    document.getElementById(id).style.display="none";
    window.scrollTo(0, 0);
}

function show(id){
    document.getElementById(id).style.display="block";
    window.scrollTo(0, 0);
}
