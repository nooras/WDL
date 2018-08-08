$(function(){
	$('#rollno').on('blur',function(){
		if(!/(\d{2}((CO)|(DCO)|(EE)|(DEE)|(EX)|(DEX)|(ME)|(DME)|(CE)|(DCE)|(DCES))\d{2,3})/i.test(this.value)){
			alert("Invalid Roll No.");
			this.value="";
			$(this).focus();
		}
	});
	$('#sname').on('keypress',function(e){
		if(/[^a-zA-Z ]/.test(e.key)){
			//console.log(e.key)
		alert("Name is invalid!Only alphabet and spaces is allowed.");
		this.value="";
		$(this).focus();
		return false;
		}
	})
	$('#address').on('blur',function(){
		//if(/[^a-zA-Z0-9, ]/.test(e.key)){
			//console.log(e.key)
		if(this.value.length>=50 | this.value.length<10){
			alert("Addres");
			this.value="";
			$(this).focus();
		}
	})
});