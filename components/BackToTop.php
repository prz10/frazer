<a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>



<script>
jQuery(window).scroll(function() {

    if (jQuery(this).scrollTop() >= 50) {

        jQuery("#return-to-top").fadeIn(200);

    } else {

        jQuery("#return-to-top").fadeOut(200);

    }

});

jQuery("#return-to-top").click(function() {

    jQuery("body,html").animate({

            scrollTop: 0

        },

        500

    );

});
</script>



<style>
#return-to-top {

    z-index: 9999;

    position: fixed;

    bottom: 80px;

    right: 20px;

    background: black;

    background: rgba(0, 0, 0, 0.7);

    width: 50px;

    height: 50px;

    display: block;

    text-decoration: none;

    border-radius: 35px;

    display: none;

    -webkit-transition: all 0.3s linear;

    -webkit-transition: all 0.3s ease;

    transition: all 0.3s ease;

}



@media (min-width: 1000px) {

    #return-to-top {

        bottom: 9%;

        right: 4%;

    }

}



#return-to-top i {

    color: #fff;

    margin: 0;

    position: relative;

    left: 16px;

    top: 13px;

    font-size: 19px;

    -webkit-transition: all 0.3s ease;

    transition: all 0.3s ease;

}



#return-to-top:hover {

    background: rgba(0, 0, 0, 0.9);

}



#return-to-top:hover i {

    color: #fff;

    top: 5px;

}
</style>