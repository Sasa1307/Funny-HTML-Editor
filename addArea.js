function addArea(str, len)
{
var start = document.getElementById("myTextarea").selectionStart;
var end = document.getElementById("myTextarea").textLength;

var text = document.getElementById("myTextarea").value;
var substrstart = text.substring(0, start);
var substrend = text.substring(start, end);

document.getElementById("myTextarea").value = substrstart + str + substrend;
document.getElementById("myTextarea").selectionStart = start + len;
}
