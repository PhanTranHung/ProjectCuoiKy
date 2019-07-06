function payMentOn()
{
	document.getElementById("time").style.display = "block";
}

function payMentOff()
{
	document.getElementById("time").style.display = "none";
}

function CardOff()
{
	document.getElementById("card").style.display = "none";
}

function CardOn()
{
	document.getElementById("card").style.display = "block";
}

function myFunction() {
    var a = document.getElementById("price").innerHTML;
	a = Number(a.replace(".", "").replace("$", ""));
	
    var x = document.getElementById("month").value;
    var y = document.getElementById("amount").value;
    y = Number(y.replace("$", ""));
	y = a - y;
	
    var z = (Number(y)/100 + y)/x;
    
    document.getElementById("money").value = z;
}

function perPay() {
	var x = document.getElementById("price").innerHTML;
	x = Number(x.replace(".", "").replace("$", ""));
	var y = document.getElementById("perpay").value;
	y = Number(y);
	
	document.getElementById("amount").value = "$" + x/100*y;
}