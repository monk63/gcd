function changeTable(evt, table){
	// Declare all variables
	var i, tabcontent, tablinks;

	// Hide all tables
	account_table = document.getElementById("account_request_table");
	account_table.style.display = "none";
	password_table = document.getElementById("password_table");
	password_table.style.display = "none";

	// Get all elements with class="tablinks" and remove the class "active"
	tablinks = document.getElementsByClassName("table-select");

	for (i = 0; i < tablinks.length; i++) {
	  tablinks[i].className = tablinks[i].className.replace("btn-light", "btn-primary");
	}
	// Show the current tab, and add an "active" class to the button that opened the tab
	document.getElementById(table).style.display = "block";
	evt.currentTarget.className += " btn-light";


}