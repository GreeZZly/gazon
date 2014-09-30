$(document).ready(function(){
	$('.bxslider').bxSlider({
		slideWidth: 300,
	    minSlides: 2,
	    maxSlides: 3,
	    moveSlides: 1,
	    slideMargin: 20
	});

	$(".multi_image").fancybox();
	$(".bxslider_rev").bxSlider();
	$("#contact_slider").bxSlider({
		controls: false,
		pagerLocation: 'top',
		buildPager: function(slideIndex){
		    switch(slideIndex){
		      case 0:
		        return 'г.Чебоксары';
		      case 1:
		        return 'г.Йошкар-Ола';
		      case 2:
		        return 'г.Ульяновск';
		      case 3:
		        return 'г.Магнитогорск';
		      case 4:
		        return 'г.Дмитровград';
		      case 5:
		        return 'г.Волжск';
		      
		     }
		  }
	});
	$("#jumbo_bxslider").bxSlider({
		pager: false
	});

	$("[class*='faq_item_']").on('click', function(){
		var dfaq = $(this).attr('data-faq');
		console.log(dfaq);
		$(".faq_answer").each(function(){
			if($(this).attr('data-faq') == dfaq){
				$(this).slideToggle();
			}
		});
	})
	var win_h = $(window).height()/2;

	var modal_h = win_h - 140;
	// console.log(modal_h);
	$("#modal_window").css({'top':modal_h+'px'});
	console.log(win_h,modal_h);
	$(".consult_btn").on('click', function(e){
		e.preventDefault();
		$("#modal_bg").fadeIn();

	});
	$(".close").on('click', function(){
		$("#modal_bg").fadeOut();
	});
	 
	$(window).scroll(function () {if ($(this).scrollTop() > 0) {$('#scroller').fadeIn();} else {$('#scroller').fadeOut();}});
    $('#scroller').click(function () {$('body,html').animate({scrollTop: 0}, 400); return false;});

    $("#faq_slide img").on('click', function(){
    	
    	$("#faq_wrap").slideToggle();
    });
		// $('#calc_form').bootstrapValidator({
	 //        message: 'This value is not valid',
	 //        feedbackIcons: {
	 //            valid: 'glyphicon glyphicon-ok',
	 //            invalid: 'glyphicon glyphicon-remove',
	 //            validating: 'glyphicon glyphicon-refresh'
	 //        },
	 //        fields: {
	 //            stUst: {
	 //                message: 'The username is not valid',
	 //                validators: {
	 //                    notEmpty: {
	 //                        message: 'The username is required and cannot be empty'
	 //                    },
	 //                    stringLength: {
	 //                        min: 6,
	 //                        max: 30,
	 //                        message: 'The username must be more than 6 and less than 30 characters long'
	 //                    },
	 //                    regexp: {
	 //                        regexp: /^[a-zA-Z0-9_]+$/,
	 //                        message: 'The username can only consist of alphabetical, number and underscore'
	 //                    }
	 //                }
	 //            },
	 //            email: {
	 //                validators: {
	 //                    notEmpty: {
	 //                        message: 'The email is required and cannot be empty'
	 //                    },
	 //                    emailAddress: {
	 //                        message: 'The input is not a valid email address'
	 //                    }
	 //                }
	 //            }
	 //        }
	 //    });
	$("#calcSubmit").on('click', function(e){
		e.preventDefault();
		// $("input[type='text']").each(function(){
		// 	if($(this).val() == ''){
		// 		$(this).css({'border':'1px solid red'});
		// 		$(this).attr('placeholder', 'Пустое значение!');
		// 	}
		// 	else {
		// 		$(this).css({'border':'1px solid #ccc'});
				
		// 	}

		// 	if($(this).val() == )
		// });
		// if($("input[type='text']").val() == ''){
			// var par = $(this).parent(".form-group");
			// console.log(par);
			// par.children(".form_error").removeClass('hidden');
			// $(".form_error").html('Пустое значение!');
		// }
		var stUst = $("#stUst").val();
		var CenaBenz = $("#CenaBenz").val();
		var CenaGaz = $("#CenaGaz").val();
		var Rashod100 = $("#Rashod100").val();
		var SrSutProb = $("#SrSutProb").val();
		// console.log(stUst,CenaBenz,CenaGaz,Rashod100,SrSutProb);
		var RasDayLitr = SrSutProb/100 * Rashod100;
		var RasDayBenz = RasDayLitr * CenaBenz;
		var RasDayGaz = RasDayLitr * CenaGaz;
		// console.log( Math.round(RasDayLitr).toFixed(0),Math.round(RasDayBenz).toFixed(0),Math.round(RasDayGaz).toFixed(0));
		var EconDay = RasDayBenz - RasDayGaz;
		var EconYear = EconDay * 365;
		var OkupDay = stUst/EconDay;
		// console.log(Math.round(EconDay).toFixed(0),Math.round(EconYear).toFixed(0),Math.round(OkupDay).toFixed(0));
		$("#EconDay").html(Math.round(EconDay).toFixed(0));
		$("#EconYear").html(Math.round(EconYear).toFixed(0));
		$("#OkupDay").html(Math.round(OkupDay).toFixed(0));
	});
});