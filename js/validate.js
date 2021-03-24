// check if all required field is filled in
var Validate = function() {
	var validate = this;
	validate.element = document.getElementById("form");

	validate.element.addEventListener("submit", function(event) {
		
		var error = false;
		var fieldGroups = document.getElementsByClassName("required"); 
		
		for(var i=0; i<fieldGroups.length; i++)
		{	
			if(error)
			{
				event.preventDefault();
			} 
			
			var field = fieldGroups[i].querySelector("input, textarea");
			console.log(field);
			var fieldValue = field.value;

			if (fieldValue == "")
			{
				fieldGroups[i].classList.add("error");
				error = true;
			} else {
				fieldGroups[i].classList.remove("error");
			}
		}
	}) 
}

new Validate();