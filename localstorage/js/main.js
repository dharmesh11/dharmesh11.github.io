function saveData(){
	getFormData();
	var data = getFormData();
	if(data){		
		console.log(data);
		setLocalData(data);	
		createHTML(data);
	}
}
function genderValue(val){
	if(val =='male'){
		console.log('male');
	}else if(val =='female'){
		console.log('female');
	}else{
		errorMsg('Please select Gender');
	}
}
function getFormData(){
	var obj = {};	
	name = document.getElementById('name').value;	
	age = document.getElementById('age').value;	
	if(name != '' && age != ''){

		obj.name = name;
		obj.age = age;		
		return obj;				
	}
}

function errorMsg(msg){
	var errId = document.getElementById('err-msg');
	errId.style.display = "block";
	errId.innerHTML = msg;
}	
function createHTML(data) {
	var dataTable = document.getElementById('data-table');
	var tableRow = document.createElement("tr");
	var tableData = document.createElement("td");
	var tableData2 = document.createElement("td");
	var inputName = document.createElement("input");
	var inputAge = document.createElement("input");

	inputName.setAttribute("type", "text");
	inputAge.setAttribute("type", "number");

	//var user = JSON.parse(localStorage.getItem('user'));
	//console.log(user);
	inputName.setAttribute("value", data.name);
	inputAge.setAttribute("value", data.age);

	tableData.appendChild(inputName);
	tableData2.appendChild(inputAge);
	tableRow.appendChild(tableData);
	tableRow.appendChild(tableData2);

	dataTable.appendChild(tableRow);
	document.getElementById('name').value = "";
	document.getElementById('age').value = "";

}
function setLocalData(data){
	localStorage.setItem('user', JSON.stringify(data.name));	
	localStorage.setItem('age', JSON.stringify(data.age));	
}
		
	

