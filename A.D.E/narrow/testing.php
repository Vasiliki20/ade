<table id="myTable">
	<tr>
		<td>
		<input type="text" name="farmaka">
		</td>
		<td>
		<input type="text" name="imeromia">
		</td>
		<td>
		<input type="text" name="diarkia">
		</td>
		<td>
		<input type="text" name="therapeutis">
		</td>
		<td>
		<input type="text" name="logostherapias">
		</td>
		<td>
		<input type="button" class="button" value="Add" onclick="addField();">
		</td>
	</tr>
</table>

<script>
	function addField(argument) {
		var myTable = document.getElementById("myTable");
		var currentIndex = myTable.rows.length;
		var currentRow = myTable.insertRow(-1);

		var farmakaBox = document.createElement("input");
		farmakaBox.setAttribute("name", "farmaka" + currentIndex);

		var imerominiaBox = document.createElement("input");
		imerominiaBox.setAttribute("name", "imerominia" + currentIndex);

		var diarkiaBox = document.createElement("input");
		diarkiaBox.setAttribute("name", "diarkia" + currentIndex);

		var therapeutisBox = document.createElement("input");
		therapeutisBox.setAttribute("name", "therapeutis" + currentIndex);

		var logostherapiasBox = document.createElement("input");
		logostherapiasBox.setAttribute("name", "logostherapias" + currentIndex);

		var addRowBox = document.createElement("input");
		addRowBox.setAttribute("type", "button");
		addRowBox.setAttribute("value", "Add");
		addRowBox.setAttribute("onclick", "addField();");
		addRowBox.setAttribute("class", "button");

		var currentCell = currentRow.insertCell(-1);
		currentCell.appendChild(farmakaBox);

		currentCell = currentRow.insertCell(-1);
		currentCell.appendChild(imerominiaBox);

		currentCell = currentRow.insertCell(-1);
		currentCell.appendChild(diarkiaBox);
		
		currentCell = currentRow.insertCell(-1);
		currentCell.appendChild(therapeutisBox);
		
		currentCell = currentRow.insertCell(-1);
		currentCell.appendChild(logostherapiasBox);
	}
</script>