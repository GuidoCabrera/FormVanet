 var inputs = document.querySelectorAll('#formVanet input');
 var btn = document.getElementById("btnVanet");
 var form = document.getElementById("formVanet");
 var txt = document.getElementById("txtVanet"); 
 var txtDirec = document.getElementById("detailsDirection");
 var array = ['name','surname','direction','location','phone','email'];
 
 const expresiones = {
	name: /^[a-zA-ZÀ-ÿ\s]{3,20}$/, // 3 a 20 Letras y puede llevar acentos.
	direction: /^[a-zA-ZÀ-ÿ\s\d]+\d+$/, 
	location: /^[a-zA-ZÀ-ÿ\s]{5,25}$/, // 5 a 25 letras y numeros
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	phone: /^\d{10,18}$/ // 10 a 18 numeros.
}

  const campos = {
    name: false,
	surname:false,
	direction: false,
	location: false,
	phone: false,
	email: false
  }

//   alert(Object.keys(campos));

  const validation = (e) => {
	  switch(e.target.name){
          case "name": 
	      verificationI(expresiones.name,e.target,"name");
		   break;
		  case "surname":
			verificationI(expresiones.name,e.target,"surname");
		  break;
		  case "direction":
			verificationI(expresiones.direction,e.target,"direction");
		  break;
		  case "location":
			verificationI(expresiones.location,e.target,"location");
		  break;
		  case "phone":
			verificationI(expresiones.phone,e.target,"phone");
		  break;
		  case "email":
			verificationI(expresiones.email,e.target,"email");
		  break;
	  }
  }

  const verificationI = (expresion,input,field) =>{
             if(expresion.test(input.value)){
		 	 campos[field] = true;
				 document.getElementById("txt-"+field).setAttribute("class","invisible");
			 }
			 else if(input.value==""){
				 campos[field] = false;
				 document.getElementById("txt-"+field).setAttribute("class","invisible");
			 }
			 else{
				 campos[field] = false;
				 document.getElementById("txt-"+field).setAttribute("class","visible");
			 }
  }

 inputs.forEach((input) => {
	input.addEventListener("keyup", validation);
	input.addEventListener("blur", validation);
})

btn.addEventListener("click", (e) => {

    if(campos.name&&campos.surname&&campos.direction&&campos.location&&campos.phone&&campos.email){
        txt.innerHTML = "El formulario ha sido enviado";
		inputs.forEach((input) => { 
			input.readOnly = true;
			input.style.border = "";
		})
		setTimeout(() => {
			txt.innerHTML="";	 
			form.submit();
		   },3000); 
   
}
	else{
       for(var i=0;i<array.length;i++){
		   if(campos[array[i]]==false){

			inputs.forEach((input) => {

				if(input.name==array[i]){
                   input.style.border = "1px solid #CD5724 ";
				   input.style.borderBottomWidth = "2px";
				   document.getElementById("txt-"+input.name).setAttribute("class","visible");
				}			
				})
			}
			else{
				inputs.forEach((input2) => {

					if(input2.name==array[i]){
					   input2.style.border = "1px solid #ccc";
					   input2.style.borderBottomWidth = "2px";
					}
					})
			}
		   }
		   txt.innerHTML = "Hay campos sin completar correctamente";
	   }

	})

