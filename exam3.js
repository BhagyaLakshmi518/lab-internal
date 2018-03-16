function register()
{
    var a=document.getElementById("first").value;
    var b=document.getElementById("last").value;
    var c=document.getElementById("email").value;
    var d=document.getElementById("pass").value;
    var e=document.getElementById("conpass").value;
    if(a==="")
    {
        alert('firstname is needed');
    }
    if(b==="")
    {
        alert('lastname is needed');
    }
    if(c==="")
    {
        alert('email needed!');
    }
    if(d!=e)
    {
        alert('passwords doesnot match');
    }

}