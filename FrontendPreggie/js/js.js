function change()
{
	var elem = document.getElementById("myButton1");
    if (elem.value=="Edit") elem.value = "Save";
    else elem.value = "Edit";

    document.getElementById("myButton1").style.color = "#ff6666"; // color
    document.getElementById("myButton1").style.backgroundColor = "#f4f4f4"; // backcolor
    document.getElementById("myButton1").style.boxShadow = "0 2px 10px #ff6666";
    
    
}

function konfirmasi_reset()
{
	var konfirmasi = confirm("Apakah Anda yakin ingin mereset data ?")
	
	if (konfirmasi == true)
	{
		return true;
	}	
	else
	{
		return false;
	}
}

function konfirmasi_hapus()
{
	var konfirmasi = confirm("Apakah Anda yakin ingin menghapus data ?")
	
	if (konfirmasi == true)
	{
		return true;
	}

	else
	{
		return false;
	}
}

function konfirmasi_tambah()
{
	var konfirmasi = confirm("Apakah Anda yakin ingin menambah data ini?")

	if (konfirmasi == true)
	{
		return true;
	}

	else
	{
		return false;
	}
}

function konfirmasi_ubah()
{
	var konfirmasi = confirm("Apakah Anda yakin ingin mengubah data ini?")

	if (konfirmasi == true)
	{
		return true;
	}

	else
	{
		return false;
	}
}



(function( $ ) {
    
	function doAnimations( elems ) {
		var animEndEv = 'webkitAnimationEnd animationend';		
		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}
		
	var $myCarousel = $('#carousel-top'),
		$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
		
	$myCarousel.carousel();
	doAnimations($firstAnimatingElems);
	
	//Pause carousel  
	$myCarousel.carousel('pause');
	
	
	//Other slides to be animated on carousel slide event 
	$myCarousel.on('slide.bs.carousel', function (e) {
		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations($animatingElems);
	});  
    $('#carousel-top').carousel({
        interval:3000,
        pause: "false"
    });
	
})(jQuery);	

