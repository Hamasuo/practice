

function Check() {
    var success = true;
    if(document.login_form.mail.value == "$row['mail']") {
        var elm1 = document.getElementById("mail_error");
        elm1.textContent = "";
    }else if(document.login_form.mail.value == "") {
        var elm1 = document.getElementById("family_name_error");
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
    return success;
}