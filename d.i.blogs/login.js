function Check() {
    var success = true;
//    console.log("test");

    if (document.login_form.mail.value == "") {
        var elm1 = document.getElementById("mail_error");
        elm1.textContent = "メールアドレスが未入力です。";
        elm1.style.color = "red";
        success = false;
    }else if(!document.login_form.mail.value.match(/^\S+@\S+\.\S+$/)){
        var elm1 = document.getElementById("mail_error");
        elm1.textContent = "有効なメールアドレスを入力してください。";
        elm1.style.color = "red";
        success = false;
    }else if(document.login_form.mail.value.match(/^\S+@\S+\.\S+$/)){
        var elm1 = document.getElementById("mail_error");
        elm1.textContent = "";
    }

    if (document.login_form.password.value == "") {
        var elm6 = document.getElementById("password_error");
        elm6.textContent = "パスワードが未入力です。";
        elm6.style.color = "red";
        success = false;
    }else if(!document.login_form.password.value.match(/^[a-zA-Z0-9]+$/)){
        var elm6 = document.getElementById("password_error");
        elm6.textContent = "パスワードは英数字での入力となります。";
        elm6.style.color = "red";
        success = false;
    }else if(document.login_form.password.value.match(/^[a-zA-Z0-9]+$/)){
        var elm6 = document.getElementById("password_error");
        elm6.textContent = "";
    }

    return success;
}
