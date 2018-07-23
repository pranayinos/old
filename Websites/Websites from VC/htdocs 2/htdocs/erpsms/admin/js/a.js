html: 
	<select id="state2"></select>
	<select id="city2"></select>

javascript:
	$("#state2").jCombo("edit2.php");
	$("#city2").jCombo("edit2.php?id=", { parent: "#state2" } );	
