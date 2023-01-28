$(document).ready(function(){
	var DOMAIN = "http://localhost/cse480/Inventory_Management_System/Public_html";

	//Mange Category
	manageCategory(1);
	function manageCategory(pn){
		$.ajax({
			url : DOMAIN+"/includes/process_print_stock.php",
			method : "POST",
			data : {manageCategory:1,pageno:pn},
			success : function(data){
				$("#get_category").html(data);		
			}
		})
	}

	$("body").delegate(".page-link","click",function(){
		var pn = $(this).attr("pn");
		manageCategory(pn);
	})


	//Fetch category
	fetch_category();
	function fetch_category(){
		$.ajax({
			url : DOMAIN+"/includes/process_print_stock.php",
			method : "POST",
			data : {getCategory:1},
			success : function(data){
				var root = "<option value='0'>Root</option>";
				var choose = "<option value=''>Choose Category</option>";
				$("#parent_cat").html(root+data);
				$("#select_cat").html(choose+data);
			}
		})
	}


	//----------Brand-------------
	manageBrand(1);
	function manageBrand(pn){
		$.ajax({
			url : DOMAIN+"/includes/process_print_stock.php",
			method : "POST",
			data : {manageBrand:1,pageno:pn},
			success : function(data){
				$("#get_brand").html(data);		
			}
		})
	}

	$("body").delegate(".page-link","click",function(){
		var pn = $(this).attr("pn");
		manageBrand(pn);
	})


	//Fetch Brand
	fetch_brand();
	function fetch_brand(){
		$.ajax({
			url : DOMAIN+"/includes/process_print_stock.php",
			method : "POST",
			data : {getBrand:1},
			success : function(data){
				var choose = "<option value=''>Choose Brand</option>";
				$("#select_brand").html(choose+data);
			}
		})
	}


	//---------------------Products-----------------
	manageProduct(1);
	function manageProduct(pn){
		$.ajax({
			url : DOMAIN+"/includes/process_print_stock.php",
			method : "POST",
			data : {manageProduct:1,pageno:pn},
			success : function(data){
				$("#print_product").html(data);		
			}
		})
	}
	$("body").delegate(".page-link","click",function(){
		var pn = $(this).attr("pn");
		manageProduct(pn);
	})

	$("body").delegate(".del_product","click",function(){
		var did = $(this).attr("did");
		if (confirm("Are you sure ? You want to delete..!")) {
			$.ajax({
				url : DOMAIN+"/includes/process_print_stock.php",
				method : "POST",
				data : {deleteProduct:1,id:did},
				success : function(data){
					if (data == "DELETED") {
						alert("Product is deleted");
						manageProduct(1);
					}else{
						alert(data);
					}
						
				}
			})
		}
	})

	
	
})