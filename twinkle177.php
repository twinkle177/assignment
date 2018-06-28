
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LIC Insurance</title>
<style type="text/css">
.header{
	width:100%;
	height:200px;
	background-color:#FFFF00;
	float:left;
	text-align:center;
	color:#09F;
		}
.footer{
	width:100%;
	height:200px;
	background-color:#FFFF00;
	float:left;
	text-align:center;
	color:#09F;
		}		
.menu{
	width:100%;
	height:50px;
	
	background-color:green;
	float:left;
	text-align:center;
	color: #FFF;
		}
.leftcontent{
	width:33%;
	height:250px;
	background-color:#FFFF66;
	float:left;
	text-align:center;
	color: #F00;
		}
.centercontent{
	width:33%;
	height:250px;
	background-image:url(1.jpg);
	float:left;
	text-align:center;
	color: #FFF;
		}
.rightcontent{
	width:32%;
	height:250px;
	
	background-color: #F90;
	float:left;
	text-align:center;
	color: #FFF;
		}		
.leftcontent2{
	width:33%;
	height:250px;
	background-color: #999;
	float:left;
	text-align:center;
	color: #FFF;
		}
.centercontent2{
	width:33%;
	height:250px;
	background-color: #3F6;
	float:left;
	text-align:center;
	color: #FFF;
		}
.rightcontent2{
	width:32%;
	height:250px;
	background-color: #66C;
	float:left;
	text-align:center;
	color: #FFF;
		}	
.frontform{
	margin-top:10px;
}
</style>
<script language="javascript1.5">
function f1()
{
var pa=parseInt(document.getElementById('pa').value);
var duration=parseInt(document.getElementById('duration').value);
var total=pa +(pa*10*duration)/100;
document.getElementById('ta').value=total;
}

</script>
</head>
<body>
<div class="header">
Site's Header 
</div>
<div class="menu">
Site's Menu
</div>



<form method="POST">
<div class="frontform"><input type="text" name="uname" id="uname" placeholder="Your Name" required="required" onkeyup="f2()"  /></div>
<div class="frontform"><input type="email" name="uemail" placeholder="Your Email" required="required"  /></div>
<div class="frontform"><input type="text" name="contact" id="contact" placeholder="Your Contact" maxlength="10" onkeyup="f3()" required="required"  /></div>
<select name="course" id="course" required="required">
<option value="">select course</option>
<option value="20000">fashion design </option>
<option value="30000">makeup</option>
<option value="10000">dance</option>
</select>
</div>
<div class="frontform"><input type="number" name="duration" 
id="duration" placeholder="duration" onblur="f1()" /></div>
<div class="frontform"><input type="number"name="ta" id="ta"
readonly="readonly placeholder="total amount" /></div>

<div class="frontform"><input type="submit" /></div>
</div>
</form>



<div class="footer">
</div>

</body>
</html>
