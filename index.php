<html>
<head>
<script type="text/javascript" src="addArea.js"></script>
<script type="text/javascript" src="request.js"></script>
<script type="text/javascript" src="insert_message.js"></script>
<script type="text/javascript" src="display_set_interval.js"></script>
<script type="text/javascript" src="change_button.js"></script>
</head>


<body bgcolor=#9f8d49 onload="insertInterval()" onclick="displayMessage()">
<table style="width:100%">
<tr><td style="vertical-align:top">
<form>
<textarea id="myTextarea" onchange="displayMessage()" name="text" style="width:500px; height:400px"></textarea></br>

<img  src="buttons/audio1.png" id="audiopict" 
onmouseover='change_active_Function("audiopict", "buttons/audio1.png", "buttons/audio2.png")'
onmouseout='change_passive_Function("audiopict", "buttons/audio1.png", "buttons/audio2.png")' 
onclick='addArea("<audio src= />", 11)'></img>

<img  src="buttons/bold1.png" id="boldpict" 
onmouseover='change_active_Function("boldpict", "buttons/bold1.png", "buttons/bold2.png")'
onmouseout='change_passive_Function("boldpict", "buttons/bold1.png", "buttons/bold2.png")' 
onclick='addArea("<b>  </b>", 4)'></img>

<img  src="buttons/center1.png" id="centerpict" 
onmouseover='change_active_Function("centerpict", "buttons/center1.png", "buttons/center2.png")'
onmouseout='change_passive_Function("centerpict", "buttons/center1.png", "buttons/center2.png")' 
onclick='addArea("<center>  </center>", 9)'></img>

<img  src="buttons/div1.png" id="divpict" 
onmouseover='change_active_Function("divpict", "buttons/div1.png", "buttons/div2.png")'
onmouseout='change_passive_Function("divpict", "buttons/div1.png", "buttons/div2.png")' 
onclick='addArea("<div>  </div>", 6)'></img>

<img  src="buttons/font1.png" id="fontpict" 
onmouseover='change_active_Function("fontpict", "buttons/font1.png", "buttons/font2.png")'
onmouseout='change_passive_Function("fontpict", "buttons/font1.png", "buttons/font2.png")' 
onclick='addArea("<font>  </font>", 7)'></img>

<img  src="buttons/hoverlink1.png" id="hoverpict" 
onmouseover='change_active_Function("hoverpict", "buttons/hoverlink1.png", "buttons/hoverlink2.png")'
onmouseout='change_passive_Function("hoverpict", "buttons/hoverlink1.png", "buttons/hoverlink2.png")' 
onclick='addArea("<a href= >  </a>", 8)'></img>

<img  src="buttons/image1.png" id="imagepict" 
onmouseover='change_active_Function("imagepict", "buttons/image1.png", "buttons/image2.png")'
onmouseout='change_passive_Function("imagepict", "buttons/image1.png", "buttons/image2.png")' 
onclick='addArea("<img src= />  ", 9)'></img>

<img  src="buttons/iframe1.png" id="iframepict" 
onmouseover='change_active_Function("iframepict", "buttons/iframe1.png", "buttons/iframe2.png")'
onmouseout='change_passive_Function("iframepict", "buttons/iframe1.png", "buttons/iframe2.png")' 
onclick='addArea("<iframe src= />  </iframe>", 12)'></img>

<img  src="buttons/italic1.png" id="italicpict" 
onmouseover='change_active_Function("italicpict", "buttons/italic1.png", "buttons/italic2.png")'
onmouseout='change_passive_Function("italicpict", "buttons/italic1.png", "buttons/italic2.png")' 
onclick='addArea("<i>  </i>", 4)'></img>

<img  src="buttons/newline1.png" id="newlinepict" 
onmouseover='change_active_Function("newlinepict", "buttons/newline1.png", "buttons/newline2.png")'
onmouseout='change_passive_Function("newlinepict", "buttons/newline1.png", "buttons/newline2.png")' 
onclick='addArea("</br>", 6)'></img>

<img  src="buttons/paragraph1.png" id="paragraphpict" 
onmouseover='change_active_Function("paragraphpict", "buttons/paragraph1.png", "buttons/paragraph2.png")'
onmouseout='change_passive_Function("paragraphpict", "buttons/paragraph1.png", "buttons/paragraph2.png")' 
onclick='addArea("<p>  </p>", 4)'></img>

<img  src="buttons/table1.png" id="tablepict" 
onmouseover='change_active_Function("tablepict", "buttons/table1.png", "buttons/table2.png")'
onmouseout='change_passive_Function("tablepict", "buttons/table1.png", "buttons/table2.png")' 
onclick='addArea("<table>  </table>", 8)'></img>

<img  src="buttons/tr1.png" id="trpict" 
onmouseover='change_active_Function("trpict", "buttons/tr1.png", "buttons/tr2.png")'
onmouseout='change_passive_Function("trpict", "buttons/tr1.png", "buttons/tr2.png")' 
onclick='addArea("<tr>  </tr>", 5)'></img>

<img  src="buttons/td1.png" id="tdpict" 
onmouseover='change_active_Function("tdpict", "buttons/td1.png", "buttons/td2.png")'
onmouseout='change_passive_Function("tdpict", "buttons/td1.png", "buttons/td2.png")' 
onclick='addArea("<td>  </td>", 5)'></img>

<img  src="buttons/video1.png" id="videopict" 
onmouseover='change_active_Function("videopict", "buttons/video1.png", "buttons/video2.png")'
onmouseout='change_passive_Function("videopict", "buttons/video1.png", "buttons/video2.png")' 
onclick='addArea("<video src= />  </video>", 11)'></img>

</br>
<input type="submit" value="submit" />
</form>
</td><td style="vertical-align:top">
<div id="resultDiv" style="background-color: white;  overflow:auto; width:1000px; height: 700px; vertical-align:top" >
</div>
</td></tr>
</table>
</body>

