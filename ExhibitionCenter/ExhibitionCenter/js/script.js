
function hiddenBlock() {
    var block = document.getElementById('hidden_block').style.display;
    document.getElementById('hidden_block').style.display = (block == 'block') ? 'none' : 'block';
}
//<li  class="current"><a href="about-us.php" id="hover-block" title="about us" onmouseover=hiddenBlock() onmouseout=hiddenBlock()>О нас</a></li>

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
//$(function () {
//    $('#hover-block').hover(function () {
//        $('#hidden_block').fadeIn("slow");
//    }, function () {
//        $('#hidden_block').fadeOut();
//    });
//});
$(function () {
    $('#hover-block').hover(function () {
        $('#hidden_block').fadeIn("slow");
    }, function () {
        $('#hidden_block').fadeOut();
    });
});

$(function () {
    $('.slide-wrap').click(function () { });
});

//SLIDER//






