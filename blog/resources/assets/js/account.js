var username_alloted=['salman','zeeshan','shahrukh'];
function checkUserName(e){
	var element=e.target;
	var message=document.getElementById('usererr');
	var flag=0;
	for(var i=0;i<username_alloted.length;i++){
		if(username_alloted[i]==element.value){
			message.textContent="Username Unavailable";
			flag=1;
			break;
		}
	}

	if(flag==0 && element.value!=""){
		message.textContent="Username Available!";
	}
}
function setActive(e){
	var element=e.target;
	var previousElement=document.getElementsByClassName('active');
	if(previousElement.length==1){
		previousElement[0].setAttribute('class','form-control');
	}
	element.setAttribute('class','form-control active');
}

var elements=document.getElementsByTagName('input');
for(var i=0;i<elements.length;i++){
	if(elements[i].type!="submit" && elements[i].type!="reset")
	{
		elements[i].addEventListener('focus',setActive,false);
	}

}

var username=document.getElementById("user");
username.addEventListener('blur',checkUserName,false);
