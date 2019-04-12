$(function(){
	$("#menu-item-29").addClass("fa fa-heart");
	$("#menu-item-30").addClass("fa fa-user");

	$(".contactus-modal").on("click", function(){
		$("#myModal").css({
			"display":"block"
		});

		$(".modal-backdrop").show();
	})

	$(".close").on("click", function(){
		$("#myModal").css({
			"display":"none"
		})
		$(".modal-backdrop").hide();
	})

	/**
	 * cbpAnimatedHeader.js v1.0.0
	 * http://www.codrops.com
	 *
	 * Licensed under the MIT license.
	 * http://www.opensource.org/licenses/mit-license.php
	 * 
	 * Copyright 2013, Codrops
	 * http://www.codrops.com
	 */
	var cbpAnimatedHeader = (function() {

		var docElem = document.documentElement,
			header = document.querySelector( '.navbar-default' ),
			didScroll = false,
			changeHeaderOn = 300;

		function init() {
			window.addEventListener( 'scroll', function( event ) {
				if( !didScroll ) {
					didScroll = true;
					setTimeout( scrollPage, 250 );
				}
			}, false );
		}

		function scrollPage() {
			var sy = scrollY();
			if ( sy >= changeHeaderOn ) {
				classie.add( header, 'navbar-shrink' );
			}
			else {
				classie.remove( header, 'navbar-shrink' );
			}
			didScroll = false;
		}

		function scrollY() {
			return window.pageYOffset || docElem.scrollTop;
		}

		init();

	})();

})

$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Please fill out all fields.");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();

    $.ajax({
        type: "POST",
        url: "https://conservationnation.org/php/form-process2.php",
        data: "name=" + name + "&email=" + email + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else {
                formError();
                submitMSG(false,text);
            }
        }
    });
}

function formSuccess(){
    $("#contactForm")[0].reset();
    submitMSG(true, "Your message has been sent! Someone from our team will respond to your request soon.")
}

function formError(){
    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h4 text-center tada animated text-success";
    } else {
        var msgClasses = "h4 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}