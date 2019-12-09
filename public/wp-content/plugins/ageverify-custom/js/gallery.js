

jQuery(document).ready(function(){
   jQuery('#img-upload').click(function(e){
        e.preventDefault();
        var upload = wp.media({
        title:'Choose Image', //Title for Media Box
        multiple:false //For limiting multiple image
        })
        .on('select', function(){
            var select = upload.state().get('selection');
            var attach = select.first().toJSON();
            console.log(attach.id); //the attachment id of image
            console.log(attach.url); //url of image
            jQuery('#img-src').attr('src',attach.url);
			jQuery('#altbackground').attr('value',attach.url);
		document.getElementById('img-remove').style.display = 'initial';
		document.getElementById('img-upload').innerHTML = 'Change Image';
		document.getElementById('img-src').style.display = 'initial';
        })
        .open();
   });
});


jQuery(document).ready(function(){
   jQuery('#img-remove').click(function(e){
//        e.preventDefault();
        /*var upload = wp.media({
        title:'Choose Image', //Title for Media Box
        multiple:false //For limiting multiple image
        })*/
        //function(){
            jQuery('#img-src').attr('src','');
			jQuery('#altbackground').attr('value','');
	   document.getElementById('img-remove').style.display = 'none';
	   document.getElementById('img-upload').innerHTML = 'Select Image';
	   document.getElementById('img-src').style.display = 'none';
        //}
       // .open();
   });
});