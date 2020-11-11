var slides, slideIndex, captionText;
slideIndex = 0;

function init(){
	slides = document.getElementsByClassName("caption");
	captionText = document.querySelector(".real-caption .real-text");
	captionText.innerText = slides[slideIndex].querySelector('.text-text').innerText;
}
init();

function plus(n){
	moveSlide(n + slideIndex);
}

function moveSlide(n){
	var next, current, i;
	if(n > slideIndex){
		if(n >= slides.length) n = 0;
	}else if(n < slides.length){
		if(n < 0) n = slides.length-1;
	}
	if(n != slideIndex){
		next = slides[n];
		current = slides[slideIndex];
		for(i = 0; i<slides.length; i++){
			slides[i].className = "caption";
		}
		slideIndex = n;
		init();
	}
}
