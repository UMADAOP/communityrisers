/*******************************************************
                   Popup text for icons
*******************************************************/

/*
 function popupFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
    console.log("it popped!");
}
*/

/*******************************************************
                   Uploads
*******************************************************/

$(document).ready(function (e) {
 $("#form").on('submit',(function(e) {
  e.preventDefault();
  $.ajax({
         url: "ajax.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {
    //$("#preview").fadeOut();
    $("#err").fadeOut();
   },
   success: function(data)
      {
    if(data=='invalid')
    {
     // invalid file format.
     $("#err").html("Invalid File !").fadeIn();
    }
    else
    {
     // view uploaded file.
     $("#preview").html(data).fadeIn();
     $("#form")[0].reset(); 
    }
      },
     error: function(e) 
      {
    $("#err").html(e).fadeIn();
      }          
    });
 }));
});












 /*
 function add_file() {
    $.ajax({
        type: 'POST',
        url: 'ajax.php?my_form=ajax_form', 
        data: new FormData($('#upload_form')[0]),
        processData: false,
        contentType: false,
        success: function (data) {
            $('.show').html(data);
            show_images();
        }
    })
}
*/

/*
function show_images() {
    $.ajax({
        type: 'POST',
        url: 'ajax.php?my_form=show',
        success: function (data) {
            $(".show-images").html(data);
        }
    })
}
/* show_images(); */


/*******************************************************
                   Particles - stars
*******************************************************/

particlesJS('particles-js',
  
    {
        "particles": {
            "number": {
                "value": 139,
                "density": {
                    "enable": true,
                    "value_area": 1815.039575754227
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "star",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.5050544906446545,
                "random": true,
                "anim": {
                    "enable": true,
                    "speed": 1.136908097221883,
                    "opacity_min": 0,
                    "sync": false
                }
            },
            "size": {
                "value": 4.5,
                "random": true,
                "anim": {
                    "enable": true,
                    "speed": 0.3,
                    "size_min": 6.496617698410762,
                    "sync": true
                }
            },
            "line_linked": {
                "enable": false,
                "distance": 144,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 5.366203963099454
            },
            "move": {
                "enable": true,
                "speed": 3.1565905665290903,
                "direction": "none",
                "random": true,
                "straight": false,
                "out_mode": "bounce",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 600
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": false,
                    "mode": "bubble"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 316.71011279752463,
                    "line_linked": {
                        "opacity": 0.9871424693368862
                    }
                },
                "bubble": {
                    "distance": 250,
                    "size": 0,
                    "duration": 2,
                    "opacity": 0,
                    "speed": 3
                },
                "repulse": {
                    "distance": 381.6762897816322,
                    "duration": 0.4
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
    }

);