$( document ).ready(function() {
	$('.perihal').on('change', function(){
		if(this.value == '0'){
			$('.provinsi').css('display', 'none');
			$('.kota-asal').css('display', 'none');
			$('.kota-tujuan').css('display', 'none');
		}else if(this.value == '1'){
			$('.provinsi').css('display', 'inline');
			$('.kota-asal').css('display', 'none');
			$('.kota-tujuan').css('display', 'none');	
		}else if(this.value == '2'){
			$('.provinsi').css('display', 'inline');
			$('.kota-asal').css('display', 'none');
			$('.kota-tujuan').css('display', 'none');;			
		}else if(this.value == '3'){
			$('.provinsi').css('display', 'inline');
			$('.kota-asal').css('display', 'none');
			$('.kota-tujuan').css('display', 'none');			
		}else if(this.value == '4'){
			$('.provinsi').css('display', 'none');
			$('.kota-asal').css('display', 'inline');
			$('.kota-tujuan').css('display', 'inline');		
		}
	});
});

