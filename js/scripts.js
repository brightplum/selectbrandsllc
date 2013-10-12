$(document).ready(function(){
	//side menu hide and show
	$("dd.menu").hide();
	$("dd.menu:eq({PAGE})").show();
		$("dt.menu a.null").click(function(){
			$("dd.menu:visible").slideUp("slow");
			$(this).parent().next().slideDown("slow");		
			return false;
		});

	//hide and show for recipe page	
	$("dd.recipe").hide();
		$("dt.recipe a.null").click(function(){
			$("dd.recipe:visible").slideUp("slow");
			$(this).parent().next().slideDown("slow");		
			return false;
		});
	$("a.hide").click(function(){
		$("dd.recipe").hide();
		return false;
	});
	$("a.show").click(function(){
		$("dd.recipe").show();
		return false;
	});
	
	//show for walmart locations
	$("a.walmart").click(function () {
      $("div.walmartlocations").show();
  });
  
	// this function calculates the sum
	var cbSum = function (){
		var sum = $("input[@name^=sum]").sum();

		$("#totalSum").setValue(sum);
	}

	// recalculate the some on each keypress
	$("input[@name^=sum]").bind("keyup", cbSum);
	// sum the values now
	cbSum();

});