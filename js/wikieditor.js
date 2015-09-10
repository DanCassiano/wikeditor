
	var verificar = false;
$(function(){

	$("#listaIndices li a.link").click(function( e ){
			$("#iframeView").attr('src', $(this).attr('href') );
		return false;
	});
	$("#listaIndices li:first a:first").click();

	$("#btnEscondeColuna").click(function(){
		verificar = !verificar;
		$("#coluna1").toggle('fast');				
		$("#coluna2").toggleClass('coluna2 coluna2-full');
	});

	$("#btnTesteMovel").click(function(){
			$("#iframeView").attr('src', 'https://www.google.com/webmasters/tools/mobile-friendly/?url='+ $("#url").val() );
	});

	$("#btnTesteMovel2").click(function(){
			$("#iframeView").attr('src', 'https://developers.google.com/speed/pagespeed/insights/?url='+ $("#url2").val() );
	});

	$(".btn-editor").click(function(){
				$("#iframeView").attr('src', $( this ).attr('href') );
		return false;
	})

	$("#testeMobile5").click(function(){
			$("#iframeView").attr('src', 'ferramentas/sprite-cow-master/www/index.html' );
		return false;	
	})

	$(window).resize(function(){

		console.log($(this).width())
			if( $(this).width() < 1032 )
			{				
				$("#coluna2").removeClass('coluna2').addClass('coluna2-full');
				$("#coluna1").hide('fast');				
			}				
	});

	$(window).resize();

})