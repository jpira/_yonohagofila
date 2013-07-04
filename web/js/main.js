/* 
 * Ajax link click (mainly for portfolio items but any content can be linked to) 
 */

$('.ajax').click(function(e) {
    e.preventDefault();
    var page = $(this).attr('href');
    $('.container-footer').fadeOut(199);
    $('.last-scroll').val($(document).scrollTop());	//current scroll posn to return to later
    $('html').append('<img src="img/loading.gif" class="load-gif" style="z-index: 999"/>');
    $('.load-gif').css({
        position: 'absolute',
        left: ($(window).width() - $('.load-gif').outerWidth()) / 2,
        top: ($(window).height() - $('.load-gif').outerHeight()) / 2
    });
    $('#container-isotope').fadeOut(200, function() {
        $.get(page, function(data) {
            $('.load-gif').remove();
            $('.ajax-content').html(data);
            $('#container-isotope').stop().hide();
            $('.container-footer').fadeIn(599);
            $('#container-ajax').fadeIn(600, function() {
                $('.close-ajax').show();
            });
            window.scrollTo(0, 0);
        });
    });
});

$('.close-ajax').click(function(e) {
    e.preventDefault();
    $(this).hide();
    $('.container-footer').fadeOut(199);
    $('#container-ajax').fadeOut(200, function() {
        $('#container-isotope').fadeIn(600);
        $('.container-footer').fadeIn(599);
        window.scrollTo(0, $('.last-scroll').val());
        $container.isotope();
        $('#container-ajax .ajax-content').html("");
    });
});

/* 
 * Isotope functionality
 */

var $container = $('#container-isotope');

$container.isotope({
    masonry: {
        columnWidth: 5
    }
//    getSortData: {
//        number: function($elem) {
//            var number = $elem.hasClass('element') ?
//                    $elem.find('.number').text() :
//                    $elem.attr('data-number');
//            return parseInt(number, 10);
//        },
//        sortOrder: function($elem) {
//            var number = $elem.hasClass('element') ?
//                    $elem.find('.order').val() :
//                    $elem.attr('data-number');
//            return parseInt(number, 10);
//        }
//    },
//    sortBy: 'sortOrder'
            /* 	,filter: '.home'		uncomment this line if you want to filter items on homepage to items with class="home" */
});

var $optionSets = $('.option-set'),
        $optionLinks = $optionSets.find('a');

$optionLinks.click(function() {
    $clicked = $(this);
    var current_select = $clicked.hasClass("selected");
    if ($('#container-ajax').css('display') != "none") {	/* close ajax container */
        $('.container-footer').fadeOut(199);
        $('#container-ajax').fadeOut(200, function() {
            if (current_select) {
                window.scrollTo(0, $('.last-scroll').val());
            } else {
                window.scrollTo(0, 0);
            }
            $('#container-isotope').fadeIn(600);
            $('.container-footer').fadeIn(599);
            $container.isotope();
        });
    }
    if (!current_select)
        window.scrollTo(0, 0);

    var $this = $(this);
    // don't proceed if already selected
    if ($this.hasClass('selected')) {
        return false;
    }
    var $optionSet = $this.parents('.option-set');
    $optionSet.find('.selected').removeClass('selected');
    $this.addClass('selected');

    // make option object dynamically, i.e. { filter: '.my-filter-class' }
    var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
    // parse 'false' as false boolean
    value = value === 'false' ? false : value;
    options[ key ] = value;
    if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
        // changes in layout modes need extra logic
        changeLayoutMode($this, options)
    } else {
        // otherwise, apply new options
        $container.isotope(options);
    }

    return false;
});

$(window).load(function(){
  $container.isotope({
    // update columnWidth to a percentage of container width
    masonry: { columnWidth: 5 }
  });
});

/* Latest Twitter */
//$.getJSON("https://api.twitter.com/1/statuses/user_timeline/envato.json?count=1&include_rts=1&callback=?", function(data) {
//    var text_full = data[0].text;
//    if (text_full.length > 70) {
//        text_full = text_full.substr(0, 70) + "...";
//    }
//    $(".twitter-content").html(text_full);
//});

/* Header nav icon show title of menu item */
$('.navbar .option-set li a').mouseenter(function() {
    var str = $(this).find('span.name').text();
    $('.show-title').stop();
    $('.show-title').hide();
    $('.show-title').html(str);
    $('.show-title').fadeIn(100);
}).mouseleave(function() {
    $('.show-title').stop().fadeOut(200, function() {
        $(this).html("");
    });
});

/* Email Form */
$('#submit_contact_info').click(function(e) {
    e.preventDefault();
    data = [];
    $('#contact_form input, #contact_form textarea').each(function() {
        data.push([$(this).attr('id'), $(this).val()]);
    });
    $.post('send_email.php', {'data': data}, function(response) {
        if (response != '0') {
            $('.alert-error').hide();
            $('.alert-error').html(response);
            $('.alert-error').slideDown();
        } else {
            $('.alert-error').hide();
            $('#contact_form').hide();
            $('.alert-success').slideDown();
            $('.after-close').show();
        }
    });
});
