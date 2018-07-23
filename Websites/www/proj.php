<html>


<title></title>

</head>

<body>

<table width='520' border='0' cellpadding='0' cellspacing='0'   style="cursor: default; color: red;"><td >
<span id="first" style="border:1px solid white" onMouseOver="Over(1,'ov')" onMouseOut="Over(1,'out')" onClick="Click(1)"><font face='Arial' size='2'>dtdtrd</font></span></td>   <td >
<span id="second" style="border:1px solid white" onMouseOver="Over(2,'ov')" onMouseOut="Over(2,'out')" onClick="Click(2)"><font face='Arial' size='2'>google</font></span>    </td>    <td>
<span id="third" style="border:1px solid white" onMouseOver="Over(3,'ov')" onMouseOut="Over(3,'out')" onClick="Click(3)"><font face='Arial' size='2'>yahoo</font></span>    </td></tr></table>
<script>
var ovcolor="outset";var outcolor="none";
function Click(Nb){
if (Nb==1){window.location="http://yaldex.com";}
if (Nb==2){window.location="http://google.com";}
if (Nb==3){window.location="http://yahoo.com";}}
function Over(Nb,state){  
if (state=='ov'){
if (Nb==1){document.getElementById("first").style.borderStyle=ovcolor;}
if (Nb==2){document.getElementById("second").style.borderStyle=ovcolor;}
if (Nb==3){document.getElementById("third").style.borderStyle=ovcolor;}	}  
if (state=='out'){
if (Nb==1){document.getElementById("first").style.borderStyle=outcolor;}
if (Nb==2){document.getElementById("second").style.borderStyle=outcolor;}
if (Nb==3){document.getElementById("third").style.borderStyle=outcolor;}	}}
</script>

</body>

</html>