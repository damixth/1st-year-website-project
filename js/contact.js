function validatemail(){
		var em = document.contact.email.value;
		atpos = em.indexOf("@");
		dotpos= em.lastIndexOf(".");

		if (atpos<1 || (dotpos-atpos<2)){
			alert("Enter valid Email");
			document.contact.email.focus();
			return false;
		}
		return (true);}
		
	function validate(){
		if (document.contact.name.value==""){
			alert("provide name/organization");
			document.contact.name.focus();
			return false;
		}
		if (document.contact.email.value==""){
			alert("provide Email");
			document.contact.email.focus();
			return false;
		}
		else{
			var ret = validatemail();
			if(ret == false){
			return false;
			}
		}
		if (document.contact.message.value==""){
			alert("Input your Message");
			document.contact.message.focus();
			return false;
		}
		return true;
	}
	