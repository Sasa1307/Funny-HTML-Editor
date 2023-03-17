function displayMessage()
{
 var ajaxRequest = new ajaxFunction(); 
   ajaxRequest.open("GET", "getres.php", true);
   ajaxRequest.send(null); 

   ajaxRequest.onreadystatechange = function()
{
      if(ajaxRequest.readyState == 4){
         var ajaxDisplay = document.getElementById('resultDiv');
         ajaxDisplay.innerHTML = ajaxRequest.responseText;
   }
}
}

function myFunction() {
    setInterval(function(){displayMessage()}, 5000);

}
