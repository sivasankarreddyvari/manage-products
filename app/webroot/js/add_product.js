function getSubCategories()
{
	var productId	= $('#ProductCategoryId').val();
	var resultDiv	= $("#ProductSubCategoryId");

	$.ajax({  
		type: "POST", url: http_root+'/products/getSubCatList', data: "productId="+productId,
		complete: function(data)
		{  
			//print results as appended   
			resultDiv.html(data.responseText);  
		}  
	});  
}
