
function insertMessage()
{
 var ajaxRequest = new ajaxFunction(); 

   var message = document.getElementById('myTextarea').value;
   
   queryString =  "?message=" + message;
   ajaxRequest.open("GET", "result.php" + queryString, true);
   ajaxRequest.send(null); 
}

function insertInterval() {
    setInterval(function(){insertMessage()}, 1000);

}
