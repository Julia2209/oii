
function hiddenBlock() {
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

function diplay_hide(blockId) {

    if ($(blockId).css('display') == 'none') {
        $(blockId).animate({ height: 'show' }, 500);
    }
    else {
        $(blockId).animate({ height: 'hide' }, 500);
    }

}
//function animate_block(blockId) {
//    $(blockId).hover(
//     function () {
//         $(this).parent().find('.hidden_block').fadeIn()

//     },
//     function () {
//         $(this).parent().find('.hidden_block').fadeOut()
//     });
//};




