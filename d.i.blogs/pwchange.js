function Check() {
    var success = true;
//    console.log(document.pwchange_form.password.value);
    
    if (document.pwchange_form.password.value == "") {
        var elm6 = document.getElementById("password_error");
        elm6.textContent = "新しいパスワードが未入力です。";
        elm6.style.color = "red";
        success = false;
    }else if (!document.pwchange_form.password.value.match(/^[a-zA-Z0-9]+$/)) {
        var elm6 = document.getElementById("password_error");
        elm6.textContent = "パスワードは英数字での入力となります。";
        elm6.style.color = "red";
        success = false;
    } else if (document.pwchange_form.password.value.match(/^[a-zA-Z0-9]+$/)) {
        var elm6 = document.getElementById("password_error");
        elm6.textContent = "";
    }
    //wpass
    var pass = document.pwchange_form.password.value;
    console.log(pass);
    if (document.pwchange_form.wpass.value == "") {
        var elm6 = document.getElementById("wpass_error");
        elm6.textContent = "パスワード確認が未入力です。";
        elm6.style.color = "red";
        success = false;
    }else if (!document.pwchange_form.wpass.value.match(/^[a-zA-Z0-9]+$/)) {
        var elm6 = document.getElementById("wpass_error");
        elm6.textContent = "パスワードは英数字での入力となります。";
        elm6.style.color = "red";
        success = false;
    }else if (pass !== document.pwchange_form.wpass.value) {
        var elm6 = document.getElementById("wpass_error");
        elm6.textContent = "新しいパスワードと一致しません。";
        elm6.style.color = "red";
        success = false;
    } else if (document.pwchange_form.wpass.value.match(/^[a-zA-Z0-9]+$/)) {
        var elm6 = document.getElementById("wpass_error");
        elm6.textContent = "";
    }
    
    return success;
}
