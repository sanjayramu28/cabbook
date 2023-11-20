function search1()
{
    window.alert("hi");
}
function details()
{
    var dates=document.getElementById("phone").value; 
     localStorage.setItem("phone", dates);
    
    
  
}
// var pick=document.getElementById("pickup").value;
//     var drop=document.getElementById("drop").value;
document.getElementById('fro').innerHTML=localStorage.getItem("phone");