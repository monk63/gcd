

function delete_user_action(username,id){
	document.getElementById("deleteModalName").innerText = username;
	document.getElementById("deleteIdValue").value = id;

}
function restore_user_action(username,id){
	document.getElementById("restoreModalName").innerText = username;
	document.getElementById("restoreIdValue").value = id;

}

function edit_user_action (id,fName, lName, email, supName, address, city, zip){
	document.getElementsByName("create_user")[0].innerText = "Edit User";
	document.getElementById("editModalTitle").innerText = "Edit User";
	document.getElementById("first_name").value = fName;
	document.getElementById("uid").value = id;
	document.getElementById("last_name").value = lName;
	document.getElementById("email").value = email;
	document.getElementById("supervisor_name").value = supName;
	document.getElementById("address").value = address;
	document.getElementById("city").value = city;
	document.getElementById("zip").value = zip;

}