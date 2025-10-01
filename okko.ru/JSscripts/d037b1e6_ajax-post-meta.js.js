jQuery(function($){
	$('.this_price').blur(function(){
		this_price = $(this);
		$.ajax({
			type:'POST',
			url:ajaxurl,
			data:'action=updatePrice&price_val=' + this_price.val() + '&product_id=' + this_price.attr('data-id'),
			beforeSend:function(xhr){
				this_price.attr('readonly','readonly').next().html('Сохраняю...');
			},
			success:function(results){
				this_price.removeAttr('readonly').next().html('<span style="color:#0FB10F">Сохранено</span>');
			}
		});
	});
});