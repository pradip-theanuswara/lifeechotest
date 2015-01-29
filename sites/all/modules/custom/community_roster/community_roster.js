function refreshTable(page, sort, order) {
	if(!page) page = 0;
	if(!sort) sort = '';
	if(!order) order = '';

	jQuery.ajax({
		cache: false,
		
		url: Drupal.settings.basePath + '?q=community/roster_page/callback',
		data: {page: page, sort: sort, order: order},
		dataType: 'text',
		error: function(request, status, error) {
			//alert(status);
			jQuery('#table-container').html('An error occured');
		},
		success: function(data, status, request) {
			var html = data;
			jQuery('#table-container').html(html);
			//added by prabi to check box init
			//int_checkbox();
			jQuery('#table-container th a').
				add('#table-container .pager-item a')
				.add('#table-container .pager-first a')
				.add('#table-container .pager-previous a')
				.add('#table-container .pager-next a')
				.add('#table-container .pager-last a')
					.click(function(el, a, b, c) {
						var url = jQuery.url(el.currentTarget.getAttribute('href'));
						refreshTable(url.param('page'), url.param('sort'), url.param('order'));
					
						return (false);
					});
		}
	});
}
	
function initializeTable() {
	jQuery(document).ready(function() {
		refreshTable();
		
		
	});
}



//passing a from first check.

function change_stat_first(q,disable_val,b,a,groupId,userId,changeType){
	
	if(disable_val==0)
	{
		var id=q.id;
		alert('You are not satisfy the conditions for discipler');
		jQuery('#id').attr('checked', false);
		return false;
	}
	else{
 jQuery('#cg_check'+userId).next('.save_gif_outer').show();
	jQuery.ajax({
		cache: false,
		type:'POST',
		url: Drupal.settings.basePath + '?q=community/change_disipler',
		data: {group_id: groupId,user_id: userId,change_type:changeType},
		dataType: 'text',
		error: function(request, status, error) {
			alert(status);
		},
		success: function(data, status, request) {
			var html = data;
			jQuery('#cg_check'+userId).next('.save_gif_outer').hide();

//alert(b.checked);
		}
	});
	}
  /* if(a!='108')
    {
		alert('This user has not choosed discipler option in his/her profile');
		jQuery('input:checkbox[name='+b.name+']').attr('checked',false);
		
	}
	else 
	
	{
		jQuery('#cg_check'+userId).next('.save_gif_outer').show();
	jQuery.ajax({
		cache: false,
		type:'POST',
		url: Drupal.settings.basePath + '?q=community/change_role',
		data: {group_id: groupId,user_id: userId,change_type:changeType},
		dataType: 'text',
		error: function(request, status, error) {
			//alert(status);
		},
		success: function(data, status, request) {
			var html = data;
			jQuery('#cg_check'+userId).next('.save_gif_outer').hide();

//alert(b.checked);
		}
	});	
	}*/
	
	}





	
function change_stat(groupId,userId,changeType){
	jQuery('#cg_check'+userId).next('.save_gif_outer').show();
   
	jQuery.ajax({
		cache: false,
		type:'POST',
		url: Drupal.settings.basePath + '?q=community/change_role',
		data: {group_id: groupId,user_id: userId,change_type:changeType},
		dataType: 'text',
		error: function(request, status, error) {
			//alert(status);
		},
		success: function(data, status, request) {
			var html = data;
			jQuery('#cg_check'+userId).next('.save_gif_outer').hide();
	               

		}
	});
	
	}

