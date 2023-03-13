require('./bootstrap');

$(document).ready(function () {
    $('.header__burger').on('click', function() {
        $('.layout__content').css( "margin-top", "190px" );
        $('.header__burger').hide();
        $('.header__close').show();
    });

    $('.header__close').on('click', function() {
        $('.layout__content').css( "margin-top", "130px" );
        $('.header__close').hide();
        $('.header__burger').show();
    });

    $('.header__mobile').on('click', function() {
        $('.menu-container').removeClass('menu-container__hiden');
        $('.layout__header').css( "z-index", "20" );
    });

    $('.menu__close-mobile').on('click', function() {
        $('.menu-container').addClass('menu-container__hiden');
        $('.layout__header').css( "z-index", "none" );
    });

    let container = document.createElement("div");
    container.setAttribute("id", "yandex_rtb_R-A-1717112-5");
    container.setAttribute("style", "margin-bottom: 15px");
    document.querySelector('.article-body__content p:nth-child(3)').after(container);

    addYandex();
});

function addYandex() {
    window.yaContextCb.push(()=>{
        Ya.Context.AdvManager.render({
            renderTo: 'yandex_rtb_R-A-1717112-1',
            blockId: 'R-A-1717112-1'
        })
    });

    window.yaContextCb.push(()=>{
        Ya.Context.AdvManager.render({
            renderTo: 'yandex_rtb_R-A-1717112-2',
            blockId: 'R-A-1717112-2'
        })
    });

    window.yaContextCb.push(()=>{
        Ya.Context.AdvManager.render({
            renderTo: 'yandex_rtb_R-A-1717112-5',
            blockId: 'R-A-1717112-3'
        })
    });

    window.yaContextCb.push(()=>{
        Ya.Context.AdvManager.render({
            type: 'floorAd',
            blockId: 'R-A-1717112-4'
        })
    });
}
