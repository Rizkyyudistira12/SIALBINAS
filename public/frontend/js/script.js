// Parallax
$(window).scroll(function(){
    var wScroll = $(this).scrollTop();

    //Jumbotron
    $('.jumbotron img').css({
        'transform' : 'translate(0px, '+ wScroll/4 +'%)'
    });

    $('.jumbotron h1').css({
        'transform' : 'translate(0px, '+ wScroll/2 +'%)'
    });

    $('.jumbotron p').css({
        'transform' : 'translate(0px, '+ wScroll/1.2 +'%)'
    });

    $('.jumbotron a').css({
        'transform' : 'translate(0px, '+ wScroll/1.2 +'%)'
    });

    $(function () {
        $(window).on('scroll', function () {
            if ( $(window).scrollTop() > 10 ) {
                $('.navbar').addClass('active');
            } else {
                $('.navbar').removeClass('active');
            }
        });
    });
});

// const chk = document.getElementById('chk');

// chk.addEventListener('change', () => {
// 	document.body.classList.toggle('dark');
// });

if(localStorage.getItem('theme') == 'dark')
setDarkMode(true)

function setDarkMode(isDark)
{
    if(isDark)
    {
        document.body.setAttribute('id', 'darkmode')
        localStorage.setItem('theme','dark')
    } else {
        document.body.setAttribute('id', '')
        localStorage.removeItem('theme')
    }
}