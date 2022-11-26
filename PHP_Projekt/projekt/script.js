löschenButtons();

var clickedElement;
function löschenButtons() {
    var buttons = document.getElementsByClassName("löschen-button");
    
    for (var i=0; i<buttons.length; i++) {
        buttons[i].addEventListener("click", function (){
            event.preventDefault();
            window.clickedElement=this>
            $.ajax({
                type:"GET",
                url:this.href,
                success:function(antwort){
                    clickedElement.parentElement.parentElement.outerHTML="";
                    alert(antwort);
                }
            })
        });
    }
}