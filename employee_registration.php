<?php
$CPF = $_SESSION['CPF'];
?>
<html>
<head>
<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
<script>
function dynamicdropdown(listindex)
            {
                document.getElementById("subcategory").length = 0;
                switch (listindex)
                {
                    case "NBP Green Heights" :
                        document.getElementById("subcategory").options[0]=new Option("Please select office","");
                        document.getElementById("subcategory").options[1]=new Option("Regional Office","Regional Office");
                        
                        break;
                    
                    case "11 High Sion" :
                        document.getElementById("subcategory").options[0]=new Option("Please select office","");
                        document.getElementById("subcategory").options[1]=new Option("ABC","ABC");
                        
                        break;
                    case "Vasudhara Bhavan" :
                        document.getElementById("subcategory").options[0]=new Option("Please select office","");
                        document.getElementById("subcategory").options[1]=new Option("DEF","DEF");
                        
                        break;
                    case "Panvel" :
                        document.getElementById("subcategory").options[0]=new Option("Please select office","");
                        document.getElementById("subcategory").options[1]=new Option("GHI","GHI");
                        break;
					 case "Nhava" :
                        document.getElementById("subcategory").options[0]=new Option("Please select office","");
                        document.getElementById("subcategory").options[1]=new Option("JKL","JKL");
                        break;
					 case "Uran" :
                        document.getElementById("subcategory").options[0]=new Option("Please select office","");
                        document.getElementById("subcategory").options[1]=new Option("MNO","MNO");
                        break;
					
                }
                return true;
            }
function fun()
{
name=f1.Ename.value
	if(name=="")
	{
	 alert("enter your name")
	 return false;
	}
gender=f1.gender.value
	if(gender=="")
	{
	 alert("Please select gender")
	 return false;
	}
designation=f1.Designation.value
	if(designation=="")
	{
	 alert("enter your designation")
	 return false;
	}	
var e=f1.Email.value;
var a=e.length
if(e.charAt(a-4)!=".")
{
  alert("enter valid email id")
  return false;
}
count=0;
for(i=0;i<a;i++)
{
  if(e.charCodeAt(i)==64)
  {
	count++;
	}
}
if(count==0)
{
  alert("enter @ email id");
  return false;
}
level=f1.level.value
	if(designation=="")
	{
	 alert("enter your designation")
	 return false;
	}		
m=f1.Mobile.value
	if(m=="")
	{
	 alert("enter mobile no")
	 return false;
	}
	
	if(m.length!=10)
	{
	 alert("enter valid mobile no")
	 return false;
	}	
level=f1.level.value
	if(designation=="")
	{
	 alert("enter your designation")
	 return false;
	}	
building=f1.bg.value
	if(designation=="")
	{
	 alert("enter your buildingname")
	 return false;
	}		
}
</script>
<style>
*{padding:0px;margin:0px;}
.main{
   width:100%;height:100%;background-color:white;
   margin:auto;
}
.header{
   width:100%;height:100px;
   background-color:#990000;
   position:absolute;
   <!-- border: 5px solid gold; -->
}
.header h3{
color:white;
font-size:80px;
text-align:center;
position:relative;
float:right;
 right:350px;
 
   }
.header img{
position:relative;
}   
.branches{width:95%;height:70px;
padding-top:20px;
background-color:#990000;
color:white;position:relative;
left:30px;
top:110px;
text-align:center;
font-size:25px;
<!-- border: 5px solid gold; -->

}   
.employee{
padding-top:100px;
margin:auto;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-size:25px;
}
</style>
</head>
<body>
<div class="header">
		<img src="ongc logo.png" height="100px" width="100px">
		<h3>ONGC MUMBAI</h3>
	</div>
	<div class="branches">
		NBP Green Heights,11 High,Vasudhara Bhavan,Helibase,Maker Tower,Panvel,Nhava & Uran
	</div><br>
	<div class="employee">
<table style="margin:auto;">
<tr>
<td>
<div class="fmain">
<form action="insert.php" method="post" name="f1" onsubmit="return fun()" style="color:black;font-size:50px;">


<legend>Employee Registration</legend>

<table  cellspacing="20" style="text-align:left;font-size:30px;">
<tr>
	<th>Employee Name:-</th><td><input type="text" name="Ename" height="300"required></td>
</tr> 
<tr>
	<th>Gender:-</th><td><input type="radio" name="Gender" value="male" required>male
	<input type="radio" name="Gender" value="female">female</td>
</tr>
<tr>
  <th>Designation:-</th><td><input type ="text" name="Designation" required></td>
</tr>
<tr>
  <th>CPF:-</th><td><input type ="text" name="CPF" value="<?php echo $CPF?>" required></td>
</tr>
<tr>
  <th>Email Id:-</th><td><input type ="text" name="Email" required></td>
</tr>
<tr>
  <th>Level:-</th><td><input type ="text" name="Level" required></td>
</tr>
<tr>
  <th>landline no:-</th><td><input type ="text" name="Landline" required></td>
</tr>
<tr>
  <th>Mobile no:-</th><td><input type ="text" name="Mobile" required></td>
</tr>
<tr>
  <th>Seating Place:-</th><td><input type ="text" name="Seat" required></td>
</tr>
<tr>
  <th> Building:-</th>
  <td><select name="Building" class="required-entry" id="category" required onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
 <option>Please Select Building</option>
 <option value="NBP Green Heights">NBP Green Heights</option>
 <option value="11 High">11 High</option>
 <option value="Vasudhara Bhavan">Vasudhara Bhavan</option>
 <option value="Panvel">Panvel</option>
 <option value="Nhava">Nhava</option>
 <option value="Uran">Uran</option>
 </select></td>
 <tr>
 <th>Office:</th>
            <!-- <script type="text/javascript" language="JavaScript"> -->
            <!-- document.write('<select name="subcategory" id="subcategory"><option value="">Please select office</option></select>') -->
            <!-- </script> -->
            <!-- <noscript> -->
                <th><select name="Office" id="subcategory" required >
                    <option value="">Please select office</option>
                </select></th>


</tr>

<tr>
    <td colspan="1"><input type="submit" name="submit" value="submit" style="background-color:#990000;color:white; font-size:20px; width:150px;height:70px;"></td>
	<td colspan="3"><input type="reset"  name="reset" style="background-color:#990000;color:white;font-size:20px; width:150px;height:70px;"></td>
</tr>
  </table>
  </form>
</td>
</tr>
</table>
</div>
</div>






</script>
</body>
</html>