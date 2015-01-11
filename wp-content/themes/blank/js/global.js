onResizeOperations();

function onResizeOperations() {
	var img = document.getElementsByClassName('attachment-post-thumbnail');
	for(i = 0; i < img.length; i++) {
		if(img[i].width/window.innerWidth < img[i].height/(window.innerHeight*75/100))
			img[i].style.maxWidth = '100%';
		else
			img[i].style.maxHeight = '100%';
	}
}
