function handleTabs (e) {
    var itemSelected = e.currentTarget;
    var item = e.currentTarget.id;
    var showItem = $('div[name="' + item + '"]');

    $('.active').removeClass('active');
    $(itemSelected).toggleClass('active');
    $(showItem).toggleClass('active');
}


function init () {
    $('#event').on('click', handleTabs);
    $('#participate').on('click', handleTabs);
}

$(document).ready(init());
