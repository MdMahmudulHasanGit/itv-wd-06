$(document).ready(function () {
    $('.pricing-item-button a').magnificPopup({
        items: [
            {
              src: 'https://www.mail-signatures.com/wp-content/uploads/2019/02/How-to-find-direct-link-to-image_Blog-Picture.png'
            },
            {
              src: 'https://www.youtube.com/watch?v=QX6O-D3IlUM',
              type: 'iframe' // this overrides default type
            },
            {
              src: '<div style="color: #fff; text-align: center;">HTML string</div>',
              type: 'inline'
            },
            {
              src: '.testimonial', // CSS selector of an element on page that should be used as a popup
              type: 'block'
            }
          ],
          gallery: {
            enabled: true
          },
          type: 'image' // this is default type
    });
    // $('.pricing-item-button a').click(function () {
    //     Swal.fire({
    //         title: 'Error!',
    //         text: 'Do you want to continue',
    //         icon: 'success',
    //         showConfirmButton: false,
    //         position: 'top-end',
    //         timer: 1500,
    //       })
    // })
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll > 500) {
            $(".navbar").addClass("navbar-dark bg-dark")
            $(".navbar").removeClass("bg-light navbar-light")
        }
        // if (scroll < 500) {
        //     $(".navbar").addClass("bg-dark")
        // // }
        if (scroll < 500) {
            $(".navbar").removeClass(" navbar-dark bg-dark")
            $(".navbar").addClass("navbar-light bg-light")
        }
    })
})