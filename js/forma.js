function fullFormValidation() {

    
    var text;
    
    const textreset = "";

    
    
    if(document.forma.fname.value == "") {
      text = "Unesite ime";
      document.getElementById("tekst").style.color="red";
      document.getElementById("tekst").innerHTML = text;

      document.getElementById("info-tekst1").innerHTML = textreset;

      return false;

    } else {
      text = "forma sadrži ime";
      document.getElementById("info-tekst1").style.color="green";
      document.getElementById("info-tekst1").innerHTML = text;
    }
    
    if(document.forma.femail.value == "") {
      text = "Unesite email adresu";
      document.getElementById("tekst").style.color="red";
      document.getElementById("tekst").innerHTML = text;

      document.getElementById("info-tekst2").innerHTML = textreset;

      return false;

    } else {
      text = "forma sadrži email adresu";
      document.getElementById("info-tekst2").style.color="green";
      document.getElementById("info-tekst2").innerHTML = text;
    }

    if(document.forma.fporuka.value == "") {
      text = "Unesite poruku";
      document.getElementById("tekst").style.color="red";
      document.getElementById("tekst").innerHTML = text;

      document.getElementById("info-tekst3").innerHTML = textreset;
      

     

      return false;

    } else {
      text = "forma sadrži poruku";
      document.getElementById("info-tekst3").style.color="green";
      document.getElementById("info-tekst3").innerHTML = text;

      
      text = "Forma sadrži sve parametre";
      alert(text);
    }
  }