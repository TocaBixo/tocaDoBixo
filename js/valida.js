
function mascara(t, mask){
 var i = t.value.length;
 var saida = mask.substring(1,0);
 var texto = mask.substring(i)
 if (texto.substring(0,1) != saida){
 t.value += texto.substring(0,1);
 }
 }

function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}

function SomenteLetra(e){
var tecla=new Number();
	if(window.event) {
		tecla = e.keyCode;
	}
	else if(e.which) {
		tecla = e.which;
	}
	else {
		return true;
	}
	if((tecla >= "48") && (tecla <= "57")){
		return false;
	}
}

 /*
function verificaRadio(str)  
{  
var testa;  
var itemchecked = false;  
for(var i = 0 ; i < str.length ; i++)  
{  
   testa = str[i];  
   if(testa.checked)  
   {  
     itemchecked = true;  
   }  
}          
   if(!itemchecked)  
   {  
     return false;  
    }else  
   {  
    return true;  
    }  
} 
*/
function validaDat(cData) {
    var data = cData; 

	var tam = data.length;

	if (tam != 10) {

  return false;

	}

	var dia = data.substr(0,2)

	var mes = data.substr (3,2)

	var ano = data.substr (6,4)	

	if (ano < 1980)	{
	alert('Data muito antiga');
   
   return false;

	}

    if (ano > 2015)	{
alert('Esta data ainda não chegou');
  return false;

	}



	switch (mes) {

  case '01':

 	 if  (dia <= 31) 

    return (true);

 	 break;

  case '02':

 	 if  (dia <= 29) 

    return (true);

 	 break;

  case '03':

 	 if  (dia <= 31) 

    return (true);

 	 break;

  case '04':

 	 if  (dia <= 30) 

    return (true);

 	 break;

  case '05':

 	 if  (dia <= 31) 

    return (true);

 	 break;

  case '06':

 	 if  (dia <= 30) 

    return (true);

 	 break;

  case '07':

 	 if  (dia <= 31) 

    return (true);

 	 break;

  case '08':

 	 if  (dia <= 31) 

    return (true);

 	 break;

  case '09':

 	 if  (dia <= 30) 

    return (true);

 	 break;

  case '10':

 	 if  (dia <= 31) 

    return (true);

 	 break;

  case '11':

 	 if  (dia <= 30) 

    return (true);

 	 break;

  case '12':

 	 if  (dia <= 31) 

    return (true);

 	 break;

	}

	{
alert('Data Incorreta');
  return false;

	}

	return true; 

	
} 

function igual(EMAIL, COPIA){
if (EMAIL !== COPIA) {
alert('Os email devem ser idênticos!');
}
}
 function ValidaEmail(EMAIL){
if (EMAIL == "") {
alert('Preencha o Email!');
return false; 
}
  var txt = EMAIL;
  if ((txt.length != 0) && ((txt.indexOf("@") < 1) || (txt.indexOf('.') < 7)))
  {
    alert('Email incorreto');
	obj.focus();
  }
}

function setFocus(COND) {

if(COND == def){
  document.getElementById("txtQual").focus(); 
  }  
}

function Sumir(COD){

if(COD == 1){
document.getElementById("txtQual").disabled=false;
}
if(COD == 2){
document.getElementById("txtQual").disabled=true;
}
}




function Verifica_campo_CPF(campo) {



var CPF  = campo.value; // Recebe o valor digitado no campo
// Aqui começa a checagem do CPF
var CPF1 = CPF.substr(0, 9);
var CPF2 = CPF.substr(10, 2);

var strCPF = CPF1 + CPF2;

var Soma; var Resto; Soma = 0; 
if (strCPF == "00000000000"){alert('CPF invalido'); return false;} 
for (i=1; i<=9; i++) {Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i); }
Resto = (Soma * 10) % 11; 
if ((Resto == 10) || (Resto == 11)) {Resto = 0;} 
if (Resto != parseInt(strCPF.substring(9, 10)) ) {alert('CPF invalido'); return false;} 
Soma = 0; 
for (i = 1; i <= 10; i++) {Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);}
Resto = (Soma * 10) % 11; 
if ((Resto == 10) || (Resto == 11)) {Resto = 0;} 
if (Resto != parseInt(strCPF.substring(10, 11) ) ) {alert('CPF invalido'); return false;} 

return true; }




