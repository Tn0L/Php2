function get() {
      
    var z = document.getElementById("remember");    
    if(z.checked == true)
{
    var x = document.getElementById("user").value;
    var y = document.getElementById("pass").value;
    window.localStorage.setItem("User" , x);
    window.localStorage.setItem("Pass" , y);
    console.log(localStorage.getItem("User"));
    console.log(localStorage.getItem("Pass"));

}else{
    var x = document.getElementById("user").value;
    window.localStorage.setItem("User" , x);
    console.log(localStorage.getItem("User"));
}
}