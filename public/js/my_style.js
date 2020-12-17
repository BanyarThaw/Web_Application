var arrows = document.getElementsByClassName("menus");
for (var i = 0; i < arrows.length; i++) {
        arrows[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("alive");
        current[0].className = current[0].className.replace(" alive", "");
        for(var j=0; j < this.childNodes.length; j++) {
            if(this.childNodes[j].className == "arrow_wrap")
            {
                this.childNodes[j].className += " alive";
                break;
            }
        }
    });
}
var pointers = document.getElementsByClassName("sub_menus");
for(var i=0; i < pointers.length; i++) {
    pointers[i].addEventListener("click",function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        for(var j=0;j < this.childNodes.length; j++) {
            if(this.childNodes[j].className == "pointer")
            {   
                this.childNodes[j].className += " active";
                break;
            }
        }
    });
}