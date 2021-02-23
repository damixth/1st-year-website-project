function validatemail(){
		var em = document.contact.email.value;
		atpos = em.indexOf("@");
		dotpos= em.lastIndexOf(".");

		if (atpos<1 || (dotpos-atpos<2)){
			alert("Enter valid Email");
			document.contact.email.focus();
			return false;
		}
		return (true);
	}
		
	function validate(){
		if (document.contact.name.value==""){
			alert("provide name/organization");
			document.contact.name.focus();
			return false;
		}
		if (document.contact.email.value=="")
		{
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
		if (document.contact.card.value=="" || isNaN(document.contact.card.value)){
			alert("provide a Valid card number!");
			document.contact.card.focus();
			return false;
		}
		if (document.contact.ed.value==""){
			alert("Enter expiry date");
			document.contact.ed.focus();
			return false;
		}
		if (document.contact.cvc.value=="" || isNaN(document.contact.cvc.value)){
			alert("Enter CVC");
			document.contact.cvc.focus();
			return false;
		}
		return true;
	}
	