function Check() {
    var success = true;
    var elm6 = document.getElementById("password_error");
    
    if (document.pwchange_form.password.value == "") {
        elm6.textContent = "パスワードが未入力です。";
        elm6.style.color = "red";
        success = false;
    }else if (!document.pwchange_form.password.value.match(/^[a-zA-Z0-9]+$/)) {
        elm6.textContent = "パスワードは英数字での入力となります。";
        elm6.style.color = "red";
        success = false;
    }else if (document.pwchange_form.password.value.match(/^[a-zA-Z0-9]+$/)) {
        elm6.textContent = "";
    }

    return success;
}
