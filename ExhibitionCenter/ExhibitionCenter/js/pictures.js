//$(document).ready(function () {
//    $("img").click(function () {
//        $(this).toggleClass("none-checked red-checked ");
//    });


//    var select = $("table img:eq(0)");
//    $(function () {

        

//        $("#scroll-up").click(function () {
            
//            select.toggleClass("none-checked red-checked ");
//            //select = select.parents("td").parents("tr").find("img");
//            select = select.closest("table").find("img");


//            if (select.attr("src") == undefined) { select = $("table img:eq(0)"); };
//        });
//    });
//})

$(document).ready(function(){
    $('#about').on('mouseover',function(){
        $('#about-pop-up').show('slow'); 
    }).on('mouseout',function(){
        $('#about-pop-up').hide('slow');
    });
    $('.details').on('click',function(){
        $(this).next('div').toggle('slow');
    });
    setPriceEvents();
});

function setPriceEvents(){
    $('.price-item').on('click',function(){
        selectItem(this);
    });
    $('#btn-down').on('click',function(){
        navigateThroughPrice('down'); 
    });
    $('#btn-up').on('click',function(){
        navigateThroughPrice('up'); 
    });
    $('#btn-select').on('click',function(){
        selectItem($('.price-item.current-item'));
    });
    $('#btn-send').on('click', function(){
        var pictures = [];
        $('.price-item').each(function(key,element){
            if($(element).find('input').prop('checked') === true)
                pictures.push(element.children[0].innerText);
        });
        if(pictures.length > 0)
        {
            var newWin = window.open('','');
            newWin.document.write('<h2>Selected pictures<h2/>')
            pictures.forEach(function(element) {
                newWin.document.write(element+'<br/>');
            }, this);
        }
    });
};

function selectItem(selItem){
    var item = $('#IsSel'+$(selItem).attr('index')); 
    item.prop('checked', !item.prop('checked'));
}

function navigateThroughPrice(direction){
    var current = $('.price-item.current-item');
    $(current).removeClass('current-item');
    if(direction == 'down'){
        if($(current).next('.price-item').length !== 0)
            $(current).next('.price-item').addClass('current-item');
        else
            $('.price-item').first().addClass('current-item');
    }else if(direction == 'up'){
        if($(current).prev('.price-item').length !== 0)
            $(current).prev('.price-item').addClass('current-item');
        else
            $('.price-item').last().addClass('current-item');
        
    }
}