

var clone = []
$('.header-menu-link').each((i, item) => {
    let itemClone = $(item).clone();
    $('.items-menu').prepend(itemClone)
});

$('.udapt-menu').click( () => {
    $('.items-menu').css('display', 'flex');
    $('.udapt-menu').css('display', 'none')
});

$('.items-menu span').click( () => {
    $('.items-menu').css('display', 'none');
    $('.udapt-menu').css('display', 'inline-flex')
});