//[web ticker element Javascript]

//Project:	Crypto Admin - Responsive Admin Template

$(function() {
    "use strict";

    if ($('#webticker-1').length) {
        $("#webticker-1").webTicker({
            height: 'auto',
            duplicate: true,
            startEmpty: false,
            rssfrequency: 5
        });
    }
    if ($('#webticker-2').length) {
        $("#webticker-2").webTicker({
            height: 'auto',
            duplicate: true,
            startEmpty: false,
            rssfrequency: 5
        });
    }
    if ($('#webticker-3').length) {
        $("#webticker-3").webTicker({
            height: 'auto',
            duplicate: true,
            startEmpty: false,
            rssfrequency: 5,
            direction: 'right'
        });
    }
    if ($('#webticker-4').length) {
        $("#webticker-4").webTicker({
            height: 'auto',
            startEmpty: false,
            rssfrequency: 5
        });
    }
    if ($('#webticker-5').length) {
        $("#webticker-5").webTicker({
            height: 'auto',
            duplicate: true,
            startEmpty: false,
            rssfrequency: 5,
        });
    }
    if ($('#webticker-6').length) {
        $("#webticker-6").webTicker({
            height: 'auto',
            duplicate: true,
            startEmpty: false,
            rssfrequency: 5,
            direction: 'right'
        });
    }
    if ($('#webticker-7').length) {
        $("#webticker-7").webTicker({
            height: 'auto',
            duplicate: true,
            startEmpty: false,
            rssfrequency: 5,
        });
    }
    if ($('#webticker-8').length) {
        $("#webticker-8").webTicker({
            height: 'auto',
            duplicate: true,
            startEmpty: false,
            rssfrequency: 5,
            direction: 'right'
        });
    }

});