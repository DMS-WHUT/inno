<!DOCTYPE HTML>
<head>
<title>changshi 1</title>
<script>
function play(){
var node=null;
node=document.getElementById('button').value;
piano = new Audio();
piano.play('b2.mp3');





}


</head>
<body>
<input type='button'  id='button' onclick='play()' value=''>PLAY</input>
</body>