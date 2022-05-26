$(window).scroll(function() {
    if($(window).scrollTop()) {
        $("nav").addClass("black");
    }
    else {
        $("nav").removeClass("black");
    }
});

const tabs = document.querySelectorAll(".tabs li");
const contents = document.querySelectorAll(".content");

tabs.forEach((tab, index) => {
    tab.addEventListener("click", () => {

        tabs.forEach(tab => tab.classList.remove("active"));

        tab.classList.add("active");

        contents.forEach((c) => c.classList.remove("active"));

        contents[index].classList.add("active");
    });
});

tabs[0].click();

(function($) {
	"use strict";		
	$('body').on('mouseenter mouseleave','.nav-item',function(e) {

			if ($(window).width() > 750) {

				var _d=$(e.target).closest('.nav-item');_d.addClass('show');

				setTimeout(function(){

				_d[_d.is(':hover')?'addClass':'removeClass']('show');

				},1);
			}
	});	
  }); 
  
  
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
'use strict';
window.addEventListener('load', function() {
	// Fetch all the forms we want to apply custom Bootstrap validation styles to
	var forms = document.getElementsByClassName('needs-validation');
	// Loop over them and prevent submission
	var validation = Array.prototype.filter.call(forms, function(form) {

	form.addEventListener('submit', function(event) {

		if (form.checkValidity() === false) {

		event.preventDefault();
		event.stopPropagation();
		}
		form.classList.add('was-validated');
	}, false);
	});
}, false);
})();
