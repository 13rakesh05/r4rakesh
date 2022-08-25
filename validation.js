
  function validation() {

let name     = document.getElementById('name').value;
let fname    = document.getElementById('fname').value;
let email    = document.getElementById('email').value;
let mobile   = document.getElementById('mobile').value;
let gender   = document.getElementById('gender').value;
let dob      = document.getElementById('dob').value;
let city     = document.getElementById('city').value;
let country  = document.getElementById('country').value;
  
  let letters = /^[a-zA-Z]+$/;

//Validate employee name
if (name == "" || name == null) {
  document.getElementById('nErr').innerHTML = "**Please enter your name";
      return false;
}
  
     if(!letters.test(name)) {
      document.getElementById('nErr').innerHTML = "**Please enter only letters not digits or other special characters";
         return false;
}

     if( (name.length<3) || (name.length>20) ) {
       document.getElementById('nErr').innerHTML = "**Name length must be between 3 to 20 characters";
            return false;
   }


//Validate father name
if (fname == "") {
  document.getElementById('fnErr').innerHTML = "**Please enter your father name";
         return false;
}
    if(letters.test(fname)) {
      document.getElementById('fnErr').innerHTML = "**Please enter only letters not digits or other special characters";
         return false;
    }

     if( (fname.length<3) || (fname.length>20) ) {
       document.getElementById('fnErr').innerHTML = "**Name length must be between 3 to 20 characters";
        return false;
     }

//Validate email
  if (email == "") {
    document.getElementById('emErr').innerHTML = "**Please enter your email address";
        return false;
  }   
    if(email.length>30){
      document.getElementById('emErr').innerHTML  = "**Your email is too long";
      return false;
    }

//Validate mobile no.
  if (mobile == "") {
    document.getElementById('mobErr').innerHTML = "**Please enter your mobile no.";
         return false;
  }

   if(isNaN(mobile)) {
      document.getElementById('mobErr').innerHTML = "**Please enter only digits";
         return false;
}

  if(mobile.length != 10) {
       document.getElementById('mobErr').innerHTML = "**Mobile No. length must be 10 digits only";
        return false;
   }

//Validate gender
if (gender == 'Select') {
  document.getElementById('gErr').innerHTML = "**Please select your gender";
         return false;
}  

//Validate Date of Birth
if (dob == "") {
  document.getElementById('dobErr').innerHTML = "**Please select your date of birth";
         return false;
}  

//Validate city name
if (city == "") {
  document.getElementById('ctErr').innerHTML = "**Please enter your name";
         return false;
}
  if(!letters.test(city)) {
      document.getElementById('ctErr').innerHTML = "**Please enter only letters not digits or other special characters";
         return false;
   }
     if( (city.length<3) || (city.length>20) ) {
       document.getElementById('ctErr').innerHTML = "**Name length must be between 3 to 20 characters";
        return false;
      }

//Validate country name
if (country == "") {
    document.getElementById('ctrErr').innerHTML = "**Please enter your name";
         return false;
}
  if(!letters.test(country)) {
      document.getElementById('ctrErr').innerHTML = "**Please enter only letters not digits or other special characters";
         return false;
   }
     if( (country.length<3) || (country.length>20) ) {
       document.getElementById('ctrErr').innerHTML = "**Name length must be between 3 to 20 characters";
        return false;
    }
       //registration successfully massage
    alert("Registration Successfully!!");
}


