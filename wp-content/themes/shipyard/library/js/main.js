function handleTabs (e) {
    var itemSelected = e.currentTarget;
    var item = e.currentTarget.id;
    var showItem = $('div[name="' + item + '"]');

    $('.active').removeClass('active');
    $(itemSelected).toggleClass('active');
    $(showItem).toggleClass('active');
}

function handleMenu (e) {
    var menu = $('.mobile-menu');
    e.preventDefault();
    menu.stop().slideToggle();
}


function init () {
    $('#event').on('click', handleTabs);
    $('#participate').on('click', handleTabs);
    $('.fa-bars').on('click', handleMenu);
}

$(document).ready(init());
