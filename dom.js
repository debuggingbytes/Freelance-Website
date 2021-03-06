// FORM VALIDATION & ROBOT CHECK

var chars = document.getElementById("msg");
var submit = document.querySelector("input[type=submit]")
var form = document.querySelector("form");
var error = document.querySelector("#form-error")

chars.addEventListener('input', charCount)

function charCount (e){	

	textEntered = document.getElementById("msg").value;
	console.log(textEntered.length)
	counter = (1000 - (textEntered.length));
	countRemaining = document.getElementById("charsLeft");
	countRemaining.innerText = counter+ " chars left";

	if(counter < 0){
		submit.disabled = true;
		countRemaining.classList.add("text-danger");
		countRemaining.classList.remove("text-success");
	}else{
		submit.disabled = false;
		countRemaining.classList.remove("text-danger");
		countRemaining.classList.add("text-success");
	}
}

	var robot = document.getElementById("robotCheck");
	
	robot.addEventListener("input", humanCheck)
	label = document.getElementById("robolabel");
	var i = 0;
	function humanCheck (e){
		
		var result = document.getElementById("robotCheck").value;

		if(result != 7){
			// console.log(result)
			const tries = 2;
			var msg = tries - i;
			submit.disabled = true;
			submit.classList.add("d-none"); 
			label.innerText = "Attempts left "+ msg;
			i = ++i;
			console.log(i);
			
			if(i > 2){
				var errorMessage = "<p>Too many unsuccessfuly attempts!</p>"
				error.innerHTML = errorMessage;
				form.classList.add("d-none");
				console.log(error);
			}
			return i;
		}
		else if(result = 7){
			// console.log(result)
			robot.classList.add("d-none");
			label.innerText = "You\'re a wizard Harry!";
			submit.disabled = false;
			submit.classList.remove("d-none");
		}
		
		
	}		

	$(document).ready(function() {
		$(window).scroll( function(){
			var posFromTop = $(window).scrollTop();

			if(posFromTop > 200) {
				$('#services').animate({'opacity':'1', 'margin-left': '0px'}, 1000);
			}
			if (posFromTop > 500) {
				$('#webdev').animate({'opacity':'1', 'margin-left': '0px'}, 1000);
				$('#seo').animate({'opacity':'1', 'margin-right': '0px'}, 1000);
			}
			if (posFromTop > 800) {
				$('#responsive').animate({'opacity':'1', 'margin-left': '0px'}, 1000);
				$('#coding').animate({'opacity':'1', 'margin-right': '0px'}, 1000);
			}
			if (posFromTop > 1300) {
				$('#aboutus').animate({'opacity':'1', 'margin-top': '0px'}, 1000);
				
			}			

	 
		});
		$(window).scroll( function(){
			$('.client-fade').each( function(i){
				
				var bottom_of_element = $(this).offset().top + $(this).outerHeight();
				var bottom_of_window = $(window).scrollTop() + $(window).height();
				
				if( bottom_of_window > bottom_of_element ){
					$(this).animate({'opacity':'1','margin-top':'0px'},1000);
				}
				
			}); 
		});
		var bounce = true;
		$(window).scroll(function(){
			$('#contactus').each( function(i){
				var bottom_of_element = $(this).offset().top + $(this).outerHeight();
				var bottom_of_window = $(window).scrollTop() + $(window).height();
				
				
				if( bottom_of_window > bottom_of_element ){
					
					if(bounce){
						$( "#contact" ).effect( "bounce", { times: 2 }, "slow" );					
						return bounce = false;
					}

				}
			})
		})
	
	});