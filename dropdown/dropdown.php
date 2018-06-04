

<html>

<head>
<script>
function showUser(str) {
	//alert("hello");
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","gettingdetails.php?q="+str,true);
  xmlhttp.send();
}
</script>


</head>




<body>







<form>
<?php 
mysql_connect('localhost','root','');
mysql_select_db('student_details');
$sql="select name,id from student";
$result=mysql_query($sql);



echo"<select name='students' onchange='showUser(this.value)'  >";
while($row=mysql_fetch_array($result)){
	
	
echo"<option value='".$row['id']."'>".$row['name']."</option>";
//echo"<option value='".$row['name']."'>".$row['name']."</option>";


} 
echo"</select>";






?>
<div id="txtHint"><b>Person info will be listed here.</b></div>


</form>
</body>


</html>