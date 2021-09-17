$(document).ready(function () {
    $('.popup_image').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        gallery:{
            enabled:true
          }
    });
    
    $('.video-popup').magnificPopup({
        items: [
            {
                src: 'https://www.youtube.com/watch?v=4ykAepVkG5Y',
                type: 'iframe'
            },
            {
                src: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzMo81POwIZgJ-OzfalsnUxi94WGUq4UvZIg&usqp=CAU',
                type: 'image'
            }
        ],
        gallery: {
            enabled: true
        }
    });


    $(window).scroll(function () {
        var scrollHeight = $(window).scrollTop();
        if (scrollHeight > 500) {
            $('.navbar').addClass('bg-dark navbar-dark');
            $('.navbar').removeClass('bg-light navbar-light');
        }
        if (scrollHeight < 500) {
            $('.navbar').removeClass('bg-dark navbar-dark')
            $('.navbar').addClass('bg-light navbar-light')
        }
    })
    $('.alert').click(function () {
        Swal.fire({
            position: 'top-end',
            title: 'Success!',
            text: 'Hurrah!! You have done it!!',
            icon: 'success',
            showConfirmButton: false,
            timer: 1500,
          })
    })

    $('.testimonial').owlCarousel({
        loop:true,
        margin:0,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
})