function validate_cname() {
    var x = document.forms["customerform"]["cName"].value;
    if (x == null || x == "") {
        alert("Customer Name must be filled out");
        return false;
    }
}
function validate_refer(){
    var x = document.getElementById("refer");
    var strUser = x.options[x.selectedIndex].value;
    var strUser1 = x.options[x.selectedIndex].text;
    if(strUser==0)
    {
        alert("Please select a referrer");
    }
}
function validate_cno(){
	var x = document.forms["customerform"]["cNo"].value;
    if (x == null || x == "") {
        alert("Customer Number must be filled out");
        return false;
    }
}
function validate_project(){
	var x = document.getElementById("project");
    var strUser = x.options[x.selectedIndex].value;
    var strUser1 = x.options[x.selectedIndex].text;
    if(strUser==0)
    {
        alert("Please select a Project name");
    }
}
function validate_email(){
	var x = document.forms["customerform"]["eMail"].value;
    if (x == null || x == "") {
        alert("Please enter your Email ID");
        return false;
    }
}
function validate_budget(){
	var x = document.forms["customerform"]["budget"].value;
    if (x == null || x == "") {
        alert("Please enter your Budget");
        return false;
    }
}
function validate_custstatus(){
	if(document.getElementById("emp").checked == false)
		{
			if(document.getElementById("semp").checked == false)
				{
					alert("Please select Customer Status");
				}
		}
}
function validate_arevenue(){
	var x = document.forms["customerform"]["aRevenue"].value;
    if (x == null || x == "") {
        alert("Please enter your Annual Revenue");
        return false;
}
}
function validate_extloans(){
	if(document.getElementById("yesradio").checked == false)
	{
		if(document.getElementById("noradio").checked == false)
			{
				alert("Please select Existing Loans");
			}
	}
}
function validate_typeofcust(){
	if(document.getElementById("cradio").checked == false)
	{
		if(document.getElementById("pradio").checked == false)
			{
				alert("Please select Customer Type");
			}
	}
}
function validate_custtype(){
	if(document.getElementById("hradio").checked == false)
	{
		if(document.getElementById("coradio").checked == false)
			{
				if(document.getElementById("wradio").checked == false)
				{
					alert("Please select Customer type");
				}
				
			}
	}
}
function validate_rdate()
{
	var x = document.forms["customerform"]["rDate"].value;
    if (x == null || x == "") {
        alert("Please select date to Remainder");
        return false;
    	}
}
