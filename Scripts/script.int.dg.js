!window.jQuery && document.write(unescape('%3Cscript src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.10.2.min.js"%3E%3C/script%3E'));

//$('meta[name="viewport"]').prop('content', 'width=1263');



! function(e, t, r) {
    function n() {
        for (; d[0] && "loaded" == d[0][f];) c = d.shift(), c[o] = !i.parentNode.insertBefore(c, i)
    }
    for (var s, a, c, d = [], i = e.scripts[0], o = "onreadystatechange", f = "readyState"; s = r.shift();) a = e.createElement(t), "async" in i ? (a.async = !1, e.body.appendChild(a)) : i[f] ? (d.push(a), a[o] = n) : e.write("<" + t + ' src="' + s + '" defer></' + t + ">"), a.src = s
}(document, "script", ['Scripts/helpers.min.js', 'Scripts/animations.js'])



if (Page == 'home') {



}



if (Page == 'details') {

    ! function(e, t, r) {
        function n() {
            for (; d[0] && "loaded" == d[0][f];) c = d.shift(), c[o] = !i.parentNode.insertBefore(c, i)
        }
        for (var s, a, c, d = [], i = e.scripts[0], o = "onreadystatechange", f = "readyState"; s = r.shift();) a = e.createElement(t), "async" in i ? (a.async = !1, e.body.appendChild(a)) : i[f] ? (d.push(a), a[o] = n) : e.write("<" + t + ' src="' + s + '" defer></' + t + ">"), a.src = s
    }(document, "script", ['zoom/magiczoomplus.js'])

} else {

}

$(window).load(function(e) {



    setTimeout(function() {
        $('.webloder').fadeOut('slow', function() {
            $(this).remove()
        })
    }, 500);



    // $('.forgot').fancybox({
    //     iframe: {
    //         css: {
    //             width: '400'
    //         }
    //     }
    // });

    // $('.refer').fancybox({
    //     iframe: {
    //         css: {
    //             width: '410'
    //         }
    //     }
    // });

    // $('.newsltr').fancybox({
    //     iframe: {
    //         css: {
    //             width: '400'
    //         }
    //     }
    // });

    // $('.address').fancybox({
    //     iframe: {
    //         css: {
    //             width: '500'
    //         }
    //     }
    // });

    // $('.invoice1').fancybox({
    //     iframe: {
    //         css: {
    //             width: '900'
    //         }
    //     }
    // });

    // $('.enq').fancybox({
    //     iframe: {
    //         css: {
    //             width: '400'
    //         }
    //     }
    // });

    // $('.video_pop').fancybox({
    //     iframe: {
    //         css: {
    //             width: '690'
    //         }
    //     }
    // });



    $(window).scroll(function() {
        $(".parallax_eff").each(function() {
            $(this).css("background-position", "50% " + ($(window).scrollTop() - $(this).offset().top) / 2 + "px")
        })
    });



    wow = new WOW({
        animateClass: 'animated',
        mobile: false,
        offset: 100
    });

    wow.init();



    $('.top_link li').hover(function() {
        $('div.dropdown', this).show()
    }, function() {
        $('div.dropdown', this).hide()
    });



    $('.opner').on('mouseover', function() {
        var DG = $(this).data('navid');
        $(DG).addClass('rubberBand');
        $(DG).animate({
            'right': 0
        }, 20, function() {
            setTimeout(function() {
                $(DG).removeClass('rubberBand')
            }, 100)
        })
    })



    $('.container').on('mouseover', function() {
        $('#mySidenav').addClass('rubberBandOut');
        $('#mySidenav').animate({
            'right': '-' + $('#mySidenav').innerWidth()
        }, 600, function() {
            setTimeout(function() {
                $('#mySidenav').removeClass('rubberBandOut')
            }, 100)
        })
    })



    $('.closebtn').on('click', function() {
        var DG = $(this).data('navid');
        $(DG).addClass('rubberBandOut');
        $(DG).animate({
            'right': '-' + $(DG).innerWidth()
        }, 600, function() {
            setTimeout(function() {
                $(DG).removeClass('rubberBandOut')
            }, 100)
        })
    })




    $('.dd_user').click(function() {
        $('.user_pos', this).slideDown()
    }).mouseleave(function() {
        $('.user_pos').hide()
    })



    $('.c_tog').click(function() {
        $(this).toggleClass('c_tog2');
    })

    $('.shownext').click(function() {
        $('.subdd').hide('fast');
        $(this).next().slideToggle('fast');
    });



    $('.dd_next').click(function() {

        $(this).next().slideToggle('fast');
        $(this).toggleClass('dd_next_act');
    })



    $('.d_c_tag2 a').click(function() {
        $('.d_c_tag2 a').removeClass('act');
        $(this).addClass('act');
        return false;
    })



    $('.tabs a').click(function() {
        var dg = $(this).attr('href');
        $('.tab_open').addClass('tab_hider');
        $(dg).removeClass('tab_hider');
        $('.tabs a').removeClass('active');
        $(this).addClass('active');
        return false
    })




    $('.rm_link').on('click', function() {

        $(this).prev().toggleClass('t_text_1_auto');
        $(this).toggleClass('rm_link_x');

        return false;
    })



    $(".scroll").click(function(event) {

        event.preventDefault();

        $('html,body').animate({
            scrollTop: $(this.hash).offset().top - 5
        }, 2000);

    });




    $("#back-top").hide();

    $(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });

        $('#back-top a').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });

    });



    if (Page == 'home') {



        $("#scroll_2").owlCarousel({
            loop: 1,
            autoplay: true,
            rewind: 0,
            rotating: 1,
            dots: false,
            nav: false,
            navText: ['<', '>'],
            items: 4,
            responsive: {
                0: {
                    items: 1
                },
                479: {
                    items: 1
                },
                480: {
                    items: 1
                },
                991: {
                    items: 1
                },
                1151: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });



        $("#locations").owlCarousel({
            autoplayTimeout: 100,
            autoplaySpeed: 2000,
            loop: 1,
            autoplay: true,
            rewind: 0,
            rotating: 1,
            dots: false,
            nav: false,
            navText: ['<', '>'],
            items: 4,
            responsive: {
                0: {
                    items: 1
                },
                479: {
                    items: 1
                },
                480: {
                    items: 1
                },
                991: {
                    items: 3
                },
                1151: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });



        // var heading = $("#heading");

        // var data = ["Faster", "Easier", "Transparent", "For You"];

        // var j = 0;

        // var i = 0;

        // var k;

        // function typing() {

        //     if (heading.innerHTML.length === data[j].length) {

        //         k = 0;

        //         setTimeout(del, 1200);
        //     }

        //     if (i < data[j].length) {

        //         heading.innerHTML += data[j].charAt(i);

        //         i++;

        //         setTimeout(typing, 50);

        //     } else {

        //         j++;

        //         i = 0;

        //         k = 0;

        //         setTimeout(typing, 3000);

        //     }

        //     if (j === data.length) {

        //         j = 0;

        //     }

        // }

        // function del() {

        //     if (heading.innerHTML.length == 0) {

        //         clearTimeout(time);

        //     } else {

        //         heading.innerHTML = heading.innerHTML.slice(0, heading.innerHTML.length - k);

        //         k++;

        //         var time = setTimeout(del, 300);

        //     }

        // }



        // typing();

    }

});