
function hiddenBlock(){
    var block = document.getElementById('hidden_block').style.display;
    document.getElementById('hidden_block').style.display = (block == 'block') ? 'none' : 'block';
}

function digitalWatch() {
    var date = new Date();
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var seconds = date.getSeconds();
    if (hours < 10) hours = "0" + hours;
    if (minutes < 10) minutes = "0" + minutes;
    if (seconds < 10) seconds = "0" + seconds;
    document.getElementById("clock").innerHTML = hours + ":" + minutes + ":" + seconds;
    setTimeout("digitalWatch()", 1000);
}

function diplay_hide(blockId){

    if ($(blockId).css('display') == 'none') 
        { 
            $(blockId).animate({height: 'show'}, 500); 
        } 
    else 
        {     
            $(blockId).animate({height: 'hide'}, 500); 
        }

    }
    
var h_hght = $('.navigation').outerHeight();; // высота шапки
var h_mrg = 0;    // отступ когда шапка уже не видна
                 
$(function(){
 
    var elem = $('.wrapper');
    var top = $(this).scrollTop();
     
    if(top > h_hght){
        elem.css('top', h_mrg);
    }           
     
    $(window).scroll(function(){
        top = $(this).scrollTop();
         
        if (top+h_mrg < h_hght) {
            elem.css('top', (h_hght-top));
        } else {
            elem.css('top', h_mrg);
        }
    });
 
});
