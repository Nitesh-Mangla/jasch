<!-- Include Jquery -->
<script src="<?php echo base_url();?>assets/js/jQuery/jQuery.min.js"></script>
<!-- Include Bootstrap -->
<script src="<?php echo base_url();?>assets/js/bootstrap/bootstrap.min.js"></script>
<!-- Include Slick -->
<script src="<?php echo base_url();?>assets/js/slick/slick.min.js"></script>
<!-- Include Parallax -->
<script src="<?php echo base_url();?>assets/js/parallax/parallax.min.js"></script>
<script src="<?php echo base_url();?>assets/js/aos/aos.js"></script>
<!-- Timeline -->
<script src="<?php echo base_url();?>assets/js/timeline.js" type="text/javascript"></script>
<script type="text/javascript">
  $(window).on('load', function() { // makes sure the whole site is loaded 
  $('#preloader').delay(750).fadeOut('slow'); // will fade out the white DIV that covers the website. 
  $('body').delay(750).css({'overflow':'visible'});
})
</script>
<script type="text/javascript">
  $(function(){
    $('.timeline-3').Timeline({
      autoplay: true,
      mode: 'vertical',
      itemClass: 'box-item'
    });
  });
</script>
<script>
      AOS.init({
        easing: 'ease-in-out-sine',
		duration: 1200
      });
</script>
<script>
$('.home_slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay:true,
        arrows: true,
        fade: false,
        loop:true,
        infinite:true,
        dots:true,
        speed:300,
        slidesToShow: 1,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ],
        nextArrow: '<button class="a-right control-c next slick-next"><svg class="flickity-button-icon" viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 65,95 L 20,50  L 65,5 L 60,0 Z" class="arrow" transform="translate(100, 100) rotate(180) "></path></svg></button>',
        prevArrow: '<button class="a-left control-c prev slick-prev"><svg class="flickity-button-icon" viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 65,95 L 20,50  L 65,5 L 60,0 Z" class="arrow"></path></svg></button>'
    });

</script>
<script type="text/javascript">
  $(function() {
    $('#filter').change(function(){
      $('.column').hide();
      $('.' + $(this).val()).show();
    });
    });
</script>

<script>
window.onscroll = function() {myFunction()};
var navbar = document.getElementById("navbar");

var top_bar_height = $(".site_header").height();


function myFunction() {
  console.log(top_bar_height);
  console.log(window.pageYOffset);
  if (window.pageYOffset >= top_bar_height) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}


</script>

<script>
jQuery(function($) {


if($('body').innerWidth() >= 767){

  $('.navbar .dropdown').hover(function() {
  $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

  }, function() {
  $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

  });

  $('.navbar .dropdown > a').click(function(){
  location.href = this.href;
  });

}

else{}

});

//products_details Toggle js
jQuery(document).ready(function(){
    jQuery('.open_box').click(function() {     
    var conent = jQuery(this).find(".content_box"); 
        jQuery(this).find(".content_box").slideToggle();
        jQuery(".content_box").not(conent).slideUp();
    });
    
    
    jQuery(".custom_menu").click(function(){
        var gui = jQuery(this).next().text();
       jQuery(".gettext").text(gui); 
    });

});

</script>
