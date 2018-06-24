/**
 * Created by DELL-VOSTRO on 2017-10-22.
 */

function changeColorEffect(e) {
    $('.thumb-slider').hide();
    $('.item_price').hide();
    $('.thumb-slider[data-value="' + $(e).val() + '"]').show();
    $('.item_price[data-value="' + $(e).val() + '"]').show();
    makeSlide(e);
}

function makeSlide(e) {
    $('.flexslider' + $(e).val()).flexslider({
        animation: "slide",
        controlNav: "thumbnails"
    });
}