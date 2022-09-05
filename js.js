


document.addEventListener("DOMContentLoaded", function () {
  var splide = new Splide(".splide", {
    type: "loop",
    height: "70px",
    focus: "center",

    perPage: 3,
    autoplay: true,
    pagination: false,
    classes: {
      arrows: " your-class-arrows",
      arrow: " your-class-arrow",
      prev: "prev_btn_slide_one",
      next: "next_btn_slide_one",
    },
    breakpoints: {
      1080: {
        focus: "",
        perPage: 2,
      },
      670: {
        focus: "",
        perPage: 1,
      }
    }
  });
  splide.mount();


  var splidenews = new Splide("#splidenews", {
    rewind: true,

    fixedHeight: 340,
    gap: 10,
    isNavigation: true,



    perPage: 4,
    pagination: false,

    classes: {
      arrows: "splidenews-class-arrows",
      arrow: "splidenews-class-arrow",
      prev: "prev_btn_splidenews",
      next: "next_btn_splidenews",
    },
    breakpoints: {
      1080: {
        perPage: 2,
      },
      550: {
        perPage: 1,
      }
    },
  });
  splidenews.mount();

  var main = new Splide("#main-slider", {
    type: "fade",

    fixedHeight: 300,
    heightRatio: 0.5,
    pagination: false,
    arrows: false,
    cover: true,
  });

  var thumbnails = new Splide("#thumbnail-slider", {
    rewind: true,
    fixedWidth: 104,
    fixedHeight: 58,
    isNavigation: true,
    focus: "center",
    pagination: false,
    cover: true,
    dragMinThreshold: {
      mouse: 4,
      touch: 10,
    },

    classes: {
      arrows: " your-class-arrows",
      arrow: " your-class-arrow",
      prev: "prev_btn_slide",
      next: "next_btn_slide_one",
    },
  });

  main.sync(thumbnails);
  main.mount();
  thumbnails.mount();



  var splidVidePost = new Splide("#splidVidePost", {
    rewind: true,

    gap: 20,
    isNavigation: true,
    focus: "center",
    perPage: 2,
    pagination: false,
    classes: {
      arrows: "splidVidePost-class-arrows",
      arrow: "splidVidePost-class-arrow",
      prev: "prev_btn_splidenews",
      next: "next_btn_splidenews",
    },
    breakpoints: {
      1080: {
        perPage: 2,
        gap: 10,
      },

      550: {
        perPage: 1,
      }
    },
  });

  splidVidePost.mount();

  var mostView = new Splide("#mostView", {
    rewind: true,
    fixedWidth: 50,
    gap: 5,
    isNavigation: true,
    focus: "center",
    perPage: 1,
    pagination: false,
    classes: {
      arrows: "mostView-class-arrows",
      arrow: "mostView-class-arrow",
      prev: "prev_btn_splidenews",
      next: "next_btn_splidenews",
    },

  });
  mostView.mount();

  var videoNews = new Splide("#videoNews", {
    rewind: true,
    fixedWidth: 50,
    gap: 5,
    isNavigation: true,
    focus: "center",
    perPage: 1,
    pagination: false,
    classes: {
      arrows: "video__news-class-arrows",
      arrow: "video__news-class-arrow",
      prev: "prev_btn_splidenews",
      next: "next_btn_splidenews",
    },

  });
  videoNews.mount();

  var entertainment = new Splide("#entertainment", {
    rewind: true,

    gap: 20,
    isNavigation: true,
    focus: "center",
    perPage: 2,
    pagination: false,
    classes: {
      arrows: "video__news-class-arrows",
      arrow: "video__news-class-arrow",
      prev: "prev_btn_splidenews",
      next: "next_btn_splidenews",
    },
    breakpoints: {
      999: {
        gap: 20,
        perPage: 2,
      },
      650: {

        gap: 5,
        perPage: 1,
      },
      550: {
        perPage: 1,

      },

    },
  });
  entertainment.mount();

  var sliderPost = new Splide("#sliderPost", {
    rewind: true,
    fixedWidth: 50,

    gap: 5,
    isNavigation: true,
    focus: "center",
    perPage: 1,
    pagination: false,
    classes: {
      arrows: "video__news-class-arrows",
      arrow: "video__news-class-arrow",
      prev: "prev_btn_splidenews",
      next: "next_btn_splidenews",
    },
  });
  sliderPost.mount();


  var videoSlidecenter = new Splide("#videoSlidecenter", {
    rewind: true,
    fixedWidth: '50%',
    fixedHeight: 451,
    gap: 30,
    isNavigation: true,
    focus: "center",
    perPage: 2,
    pagination: false,
    breakpoints: {
      550: {
        perPage: 1,
        gap: 0,
        fixedWidth: '100%',
      },
    },
    classes: {
      arrows: "videoSlidecenter-class-arrows",
      arrow: "videoSlidecenter-class-arrow",
      prev: "prev_btn_slide",
      next: "next_btn_slide_one",
    },

  });
  videoSlidecenter.mount();


  var sliderPostBottom = new Splide("#sliderPostBottom", {
    rewind: true,
    fixedWidth: 50,

    gap: 5,
    isNavigation: true,
    focus: "center",
    perPage: 1,
    pagination: false,
    classes: {
      arrows: "video__news-class-arrows",
      arrow: "video__news-class-arrow",
      prev: "prev_btn_splidenews",
      next: "next_btn_splidenews",
    },
  });
  sliderPostBottom.mount();

  var sliderPostBottom = new Splide("#sliderPostBottom", {
    rewind: true,
    fixedWidth: 50,

    gap: 5,
    isNavigation: true,
    focus: "center",
    perPage: 1,
    pagination: false,
    classes: {
      arrows: "sliderPostBottom-class-arrows",
      arrow: "sliderPostBottom-class-arrow",
      prev: "prev_btn_splidenews",
      next: "next_btn_splidenews",
    },
  });
  sliderPostBottom.mount();

});

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active_tabs", "");
  }

  document.getElementById(cityName).style.display = "block";

  evt.currentTarget.className += " active_tabs";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();



document.getElementById("logo_login-btn").addEventListener("click", inAdmin);
function inAdmin(e) {
  window.location.href = "http://wordpress/wp-login.php";

}
document.getElementById("splide__listPost").addEventListener("click", showModalPlayVideo);
function showModalPlayVideo(e) {
  var site = e.target.children[0].attributes.src.value;
  if (site.length !== "") {




    document.getElementById('video_iframeModal').src = site;
    document.getElementById("modal_windowVideo").style.top = "0";
    document.getElementById("modal_windowVideo").style.transition = "all .5s";
  }
}
document.getElementById("close_btnVideo").addEventListener("click", closeModalVideo);
function closeModalVideo() {
  document.getElementById("modal_windowVideo").style.top = "-1700px";
  document.getElementById("modal_windowVideo").style.transition = "all .5s";
  var iframes = document.getElementsByTagName("iframe");
  if (iframes != null) {
    for (var i = 0; i < iframes.length; i++) {
      iframes[i].src = iframes[i].src; //causes a reload so it stops playing, music, video, etc.
    }
  }
}

document.getElementById("search_btn").addEventListener("click", showModal);
function showModal() {
  document.getElementById("modal_window").style.top = "0";
  document.getElementById("modal_window").style.transition = "all .5s";
}
document.getElementById("close_btn").addEventListener("click", closeModal);
function closeModal() {
  document.getElementById("modal_window").style.top = "-1700px";
  document.getElementById("modal_window").style.transition = "all .5s";
}

const today = new Date();
const yyyy = today.getFullYear();
const monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];

let mm = monthNames[today.getMonth() + 1]; // Months start at 0!
let dd = today.getDate();

if (dd < 10) dd = '0' + dd;
if (mm < 10) mm = '0' + mm;

const formattedToday = mm + ' ' + dd + ', ' + yyyy;

document.getElementById("dateOnTop").textContent = formattedToday;




(function ($) {
  // your code


  $('.menu__burger').click(function () {
    $(this).toggleClass('close');
    $('.window__mob__menu').toggleClass('open__menu');


  })
  $('.offcanvas__menu__close__trigger').click(function () {
    $('.window__mob__menu').toggleClass('open__menu');
    $('.menu__burger').toggleClass('close');
  })
  // $('.first__part').click(function() {

  //   toggleSlide();

  // })

  // function toggleSlide () {
  //   const div = document.querySelector('.first__part__menu')

  //   if (div.classList.contains('open')) {
  //     div.classList.remove('open')
  //   } else {
  //     div.classList.add('open')
  //   }
  // }

  $(".first__part").click(function () {
    $(".first__part__menu").slideToggle("open");
    $(".btn__open").toggleClass('change_transform');
  });

})(jQuery);