jQuery(function($){

	jQuery("select option").prop("selected", false).filter(":nth-child(1)").prop("selected", true);
var brend = "";
jQuery( "body" ).on("change", ".filter_brend", function() {
    jQuery( ".filter_brend option:selected" ).each( function() {
      brend = jQuery( this ).val();
    });
  jQuery( "#filtr" ).trigger("click");
current_page = 1;
  });
if(!brend) {
brend = jQuery(".filter_brend  option:first").val();
}

var color = "";
jQuery( "body" ).on("change", ".filter_color", function() {
    jQuery( ".filter_color option:selected" ).each( function() {
      color = jQuery( this ).val();
    });
  jQuery( "#filtr" ).trigger("click");
current_page = 1;
  });
if(!color) {
color = jQuery(".filter_color  option:first").val();
}

var material = "";
jQuery( "body" ).on("change", ".filter_material", function() {
    jQuery( ".filter_material option:selected" ).each( function() {
      material = jQuery( this ).val();
    });
  jQuery( "#filtr" ).trigger("click");
current_page = 1;
  });
if(!material) {
material = jQuery(".filter_material  option:first").val();
}


var vid = "";
jQuery( "body" ).on("change", ".filter_vid", function() {
    jQuery( ".filter_vid option:selected" ).each( function() {
      vid = jQuery( this ).val();
    });
  jQuery( "#filtr" ).trigger("click");
current_page = 1;
  });
if(!vid) {
vid = jQuery(".filter_vid  option:first").val();
}

var pol = "";
jQuery( "body" ).on("change", ".filter_pol", function() {
    jQuery( ".filter_pol option:selected" ).each( function() {
      pol = jQuery( this ).val();
    });
  jQuery( "#filtr" ).trigger("click");
current_page = 1;
  });
if(!pol) {
pol = jQuery(".filter_pol  option:first").val();
}



	$("body").on("click", "#filtr",  function(){
jQuery( ".logrus-loading" ).removeClass('hidden'); 

		var data = {
			'action': 'loadmore',
			'query': true_posts,
			'page' : current_page,
			'brend' : brend,
			'color' : color,
			'material' : material,
			'vid' : vid,
			'pol' : pol,
			'cat' : cat
		};
		$.ajax({
			url:ajaxurl, 
			data:data, 
			type:'POST', 
			success:function(data){
				if( data ) { 
jQuery( ".logrus-loading" ).addClass('hidden'); 
$('.content').html(data)

				}
			}
		});
	});

	$('#true_loadmore').click(function(){
jQuery( ".logrus-loading" ).removeClass('hidden'); 
	
		var data = {
			'action': 'loadmore2',
			'query': true_posts,
			'page' : current_page,
			'brend' : brend,
			'color' : color,
			'material' : material,
			'vid' : vid,
			'pol' : pol,
			'cat' : cat
		};
		$.ajax({
			url:ajaxurl, 
			data:data, 
			type:'POST',
			success:function(data){
				if( data ) { 
jQuery( ".logrus-loading" ).addClass('hidden'); 
jQuery(".catalog-page").append(data);


				 	current_page++; 
			
				} else {
					$('#true_loadmore'); 
				}
			}
		});
	});
	jQuery(document).ready(function($){


	jQuery("select option").prop("selected", false).filter(":nth-child(1)").prop("selected", true);

	});
});


//	jQuery(document).ready(function($){



// var contenth = jQuery('.content').height();
// var sidebarh = jQuery('.sidebar').height();
// if(contenth > sidebarh1) {
//  jQuery('.sidebar').height(contenth);
 
//  }
//	});	


	 
