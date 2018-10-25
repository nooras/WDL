$(function(){
	$('#rollno').on('blur',function(){
		if(!/(\d{2}((CO)|(DCO)|(EE)|(DEE)|(EX)|(DEX)|(ME)|(DME)|(CE)|(DCE)|(CES)|(DCES))\d{2,3})/i.test(this.value)){
			alert("Invalid Roll Nn");
			this.value="";
			$(this).focus();

		}
	});

	$('#sname').on('keypress',function(e){
		// console.log(e.key);
		if(/[^a-zA-Z ]/.test(e.key)){
			alert("Invalid Name.Only Alphabets and Spaces are allowed.");
			this.value="";
			$(this).focus();
			return false;
		}

	});
	$('#address').on('blur',function(e){
		if(this.value.length<50 && this.value.length>150){
			alert("Invalid address. Length must be between 50 to 150 chararacter");

		}
		this.value="";
		$(this).focus();

	});

	$('#semail').on('blur',function(e){
		if(/((\w*.?_?-?\d*\w+)@(\w*-?.?\d*\w+).(\w*-?))/.test(e.key)){
			alert("Invalid Email.");
		}
		this.value="";
		$(this).focus();


	});

});