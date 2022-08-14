<script>
function Validatechg_pwd_Form()
{
	var oldpwd = document.chg_pwd_Form.opwd;
	var password = document.chg_pwd_Form.npwd;
	var cpassword = document.chg_pwd_Form.cpwd;
		
	if (oldpwd.value == "")
    {
        window.alert("Old Password Should Not be Empty.");
        oldpwd.focus();
        return false;
    }
	if (password.value == "")
    {
        window.alert("New Password Should Not be Empty.");
        password.focus();
        return false;
    }
	if (cpassword.value == "")
    {
        window.alert("Confirm Password Should Not be Empty.");
        cpassword.focus();
        return false;
    }
	else if(password.value != cpassword.value)
	{
        window.alert("Password & Confirm Password are not Match.");
        cpassword.focus();
        return false;
    }
    
	
    return true;
}
</script>
<!-- Change Password Form E -->
<!-- Contact Us Start-->
