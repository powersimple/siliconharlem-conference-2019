"use strict";

function setVideo(url) {
    jQuery('#video-player').attr("src", url);
}
var _w = jQuery(window).width(),
    _h = jQuery(window).height()

var deck_width = $("#sponsor-deck").css('width');
console.log(deck_width);

function setDeckWidth() {
    var deck_width = jQuery("#sponsor-deck").css('width'),
        deck_height = (parseInt(deck_width) * 0.8) + "px"
    jQuery("#sponsor-deck").css('height', deck_height)
    console.log("deck", deck_width, deck_height)
}
jQuery(document).ready(function() {
    //setDeckWidth()

    setHeroSlides();
    setSessionList();

    console.log('loaded');

})
jQuery(window).resize(function() {
    // setDeckWidth()
    _w = jQuery(window).width(),
        _h = jQuery(window).height()
    setHeroSlides();
})

if (_w > 1680) {
    $("#sponsor-deck").css('width', '800px');
    $("#sponsor-deck").css('width', '644px');
} else {

}

function setHeroSlides() {
    var size = 'original'
    for (var s = 0; s < hero_slides.length; s++) {
        //   console.log(hero_slides[s]);

        if (_w < 540) {
            size = 'handheld';
        } else if (_w >= 540 && _w < 768) {
            size = 'mobile'
        } else if (_w >= 768 && _w < 1025) {
            size = 'large'
        } else if (_w >= 1025 && _w < 1281) {
            size = 'laptop'
        } else if (_w >= 1281 && _w < 2000) {
            size = 'hd'
        }

        jQuery('#slide-' + s).css("background-image", "url(" + hero_slides[s][size] + ")")

        //    console.log("slide-" + s, _w, size, hero_slides[s][size])
    }


}

function showVideo(url, id) {
    $(id).attr("src", url);

}

/* ---- particles.js config ---- */
//backed out
/*
particlesJS("particles-js", {
    "particles": {
        "number": {
            "value": 50,
            "density": {
                "enable": true,
                "value_area": 800
            }
        },
        "color": {
            "value": "#ffffff"
        },
        "shape": {
            "type": "circle",
            "stroke": {
                "width": 1,
                "color": "#f99000"
            },
            "polygon": {
                "nb_sides": 7
            }
            
        },
        "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
                "enable": false,
                "speed": 1,
                "opacity_min": 0.1,
                "sync": false
            }
        },
        "size": {
            "value": 3,
            "random": true,
            "anim": {
                "enable": false,
                "speed": 40,
                "size_min": 0.1,
                "sync": false
            }
        },
        "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#b7d547",
            "opacity": 0.6,
            "width": 3
        },
        "move": {
            "enable": true,
            "speed": 2.5,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "bounce": false,
            "attract": {
                "enable": false,
                "rotateX": 900,
                "rotateY": 600
            }
        }
    },
    "interactivity": {
        "detect_on": "canvas",
        "events": {
            "onhover": {
                "enable": true,
                "mode": "grab"
            },
            "onclick": {
                "enable": true,
                "mode": "push"
            },
            "resize": true
        },
        "modes": {
            "grab": {
                "distance": 140,
                "line_linked": {
                    "opacity": 1
                }
            },
            "bubble": {
                "distance": 400,
                "size": 40,
                "duration": 2,
                "opacity": 8,
                "speed": 1
            },
            "repulse": {
                "distance": 200,
                "duration": 0.5
            },
            "push": {
                "particles_nb": 4
            },
            "remove": {
                "particles_nb": 2
            }
        }
    },
    "retina_detect": true
});
*/
function setSessionList() {

    //    console.log("session_data", uploads_path, session_data);
    var session = []
    var sessions = '<h4>Sessions</h4><ul>'
    for (var s = 0; s < session_data.length; s++) {
        session = session_data[s];
        sessions += '<li><a class="section-scroll" href="#session-content" onclick="setSession(' + s + ')">' + session.title + '</a></li>'

    }
    sessions += "</ul>"
    $('#session-list').html(sessions)
    console.log(sessions)



}

function setSessionSlides(slides) {
    var slide = {}
    var slide_wrap = ''
    for (var s = 0; s < slides.length; s++) {
        slide = slides[s]
        slide_wrap += '<div>'
            //        console.log('slide', s, slide)
        slide_wrap += getSlidePath(slide)
        slide_wrap += '</div>'
    }

    return slide_wrap
}

function getSlidePath(slide) {
    var slide_path = uploads_path + slide.path + slide.meta.sizes.session_slide
    console.log(slide_path)
    var slide_tag = '<img src="' + slide_path + '">'


    return slide_tag
}


function setSession(key) {

    var session = session_data[key]

    var template = jQuery('#session-info-template').html()
    var loc = '#session-info'
    jQuery(loc).html(template)

    jQuery(loc + " .title").html('<h3>' + session.title + '</h3>')
    jQuery(loc + " .context").html(session.content)
    jQuery(loc + " .speaker-list").html(speakerList(session.speakers))
    jQuery(loc + " .slideshow").html(setSessionSlides(session.slides))
    setSpeaker(0)
    setSlick();
    console.log("session", session)
    showVideo(session.video_embed_url, "#session-video")

}
var current_speakers = []

function speakerList(speakers_list) {
    var speaker = ''
    var speakers = '<div class="col-sm-3 speaker-listing"><h4>Speakers</h4><ul>'
    current_speakers = []
    for (var s = 0; s < speakers_list.length; s++) {
        speaker = speakers_list[s];
        speakers += '<li><a  class="section-scroll" href="#session-info" onclick="setSpeaker(' + s + ')">' + speaker.speaker_name + '</a></li>'
        current_speakers[s] = speaker
    }
    speakers += '</ul></div>'
    speakers += '<div class="col-sm-9" id="speaker-vitals">'

    speakers += '</div>'
    console.log(speakers)
    return speakers

}

function speakerSocial(speaker) {
    var social_links = ''
    if (speaker.speaker_website != "") {
        social_links += '<a href="' + speaker.speaker_website + '"target="_blank"><i class="fa fa-link"></i></a>';
    }
    if (speaker.speaker_wikipedia) {
        social_links += '<a href="' + speaker.speaker_wikipedia + '"target="_blank"><i class="fa fa-wikipedia-w"></i></a>';
    }
    if (speaker.speaker_linkedin) {
        social_links += '<a href="' + speaker.speaker_linkedin + '"target="_blank"><i class="fa fa-linkedin"></i></a>';
    }
    if (speaker.speaker_twitter) {
        social_links += '<a href="' + speaker.speaker_twitter + '"target="_blank"><i class="fa fa-twitter"></i></a>';
    }
    if (speaker.speaker_facebook) {
        social_links += '<a href="' + speaker.speaker_facebook + '"target="_blank"><i class="fa fa-facebook"></i></a>';
    }

    if (speaker.speaker_instagram) {
        social_links += '<a href="' + speaker.speaker_instagram + '"target="_blank"><i class="fa fa-instagram"></i></a>';
    }
    if (speaker.speaker_flickr) {
        social_links += '<a href="' + speaker.speaker_flickr + '"target="_blank"><i class="fa fa-flickr"></i></a>';
    }
    return social_links

}

function getSpeakerInfo(speaker) {
    console.log(speaker)
    var speaker_info = '<div class="col-sm-4">' + getSlidePath(speaker.featured_image) + '</div>'
    speaker_info += '<div class="col-sm-8">'
    speaker_info += '<h4>' + speaker.speaker_name + '</h4>'
    speaker_info += '<span>' + speaker.speaker_title + ', ' + speaker.speaker_company + '</span>'
    speaker_info += '<div class="social">' + speakerSocial(speaker) + '</div>'
    speaker_info += '<div class="excerpt">' + speaker.excerpt + '</div>'
    speaker_info += '</div>'





    return speaker_info
}



function setSpeaker(id) {
    var speaker = current_speakers[id]
    var slide = getSpeakerInfo(speaker)


    console.log(slide)
    $('#speaker-vitals').html(slide)
        //   getSlidePath(slide)

}
jQuery('.slideshow').slick({
    dots: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

var $carousel = jQuery('.slideshow');
jQuery(document).on('keydown', function(e) {
    if (e.keyCode == 37) {
        $carousel.slick('slickPrev');
    }
    if (e.keyCode == 39) {
        $carousel.slick('slickNext');
    }
});
jQuery('a[data-slide]').click(function(e) {

    e.preventDefault();
    var slideno = jQuery(this).data('slide');
    console.log(slideno);
    $carousel.slick('slickGoTo', slideno);
});

function setSlick() {
    jQuery('.slideshow').slick({
        dots: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 4,
        slidesToScroll: 4,


        variableWidth: true,

        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
}