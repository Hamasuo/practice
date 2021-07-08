function Check() {
    var success = true;
    console.log("testt");
//名前（姓）
    if (document.update_form.family_name.value == "") {
        var elem1 = document.getElementById("family_name_err");
        elem1.textContent = "名前（姓）が未入力です。";
        elem1.style.color = "red";
        success = false;
    }else if(!document.update_form.family_name.value.match(/^[一-龥ぁ-ん]/)){
        var elem1 = document.getElementById("family_name_err");
        elem1.textContent = "名前（姓）は、かな・漢字での入力となります。";
        elem1.style.color = "red";
        success = false;
    }else if(document.update_form.family_name.value.match(/^[一-龥ぁ-ん]/)){
        var elem1 = document.getElementById("family_name_err");
        elem1.textContent = "";
    }
//名前（名）
    if (document.update_form.last_name.value == "") {
        var elem2 = document.getElementById("last_name_err");
        elem2.textContent = "名前（名）が未入力です。";
        elem2.style.color = "red";
        success = false;
    }else if(!document.update_form.last_name.value.match(/^[一-龥ぁ-ん]/)){
        var elem2 = document.getElementById("last_name_err");
        elem2.textContent = "名前（名）は、かな・漢字での入力となります。";
        elem2.style.color = "red";
        success = false;
    }else if(document.update_form.last_name.value.match(/^[一-龥ぁ-ん]/)){
        var elem2 = document.getElementById("last_name_err");
        elem2.textContent = "";
    }
//カナ（姓）
    if (document.update_form.family_name_kana.value == "") {
        var elem3 = document.getElementById("family_name_kana_err");
        elem3.textContent = "カナ（姓）が未入力です。";
        elem3.style.color = "red";
        success = false;
    }else if(!document.update_form.family_name_kana.value.match(/^([ァ-ン]|ー)+$/)){
        var elem3 = document.getElementById("family_name_kana_err");
        elem3.textContent = "カナ（姓）は、カタカナでの入力となります。";
        elem3.style.color = "red";
        success = false;
    }else if(document.update_form.family_name_kana.value.match(/^([ァ-ン]|ー)+$/)){
        var elem3 = document.getElementById("family_name_kana_err");
        elem3.textContent = "";
    }
//カナ（名）
    if (document.update_form.last_name_kana.value == "") {
        var elem4 = document.getElementById("last_name_kana_err");
        elem4.textContent = "カナ（名）が未入力です。";
        elem4.style.color = "red";
        success = false;
    }else if(!document.update_form.last_name_kana.value.match(/^([ァ-ン]|ー)+$/)){
        var elem4 = document.getElementById("last_name_kana_err");
        elem4.textContent = "カナ（名）は、カタカナでの入力となります。";
        elem4.style.color = "red";
        success = false;
    }else if(document.update_form.last_name_kana.value.match(/^([ァ-ン]|ー)+$/)){
        var elem4 = document.getElementById("last_name_kana_err");
        elem4.textContent = "";
    }
//メールアドレス
    if (document.update_form.mail.value == "") {
        var elem5 = document.getElementById("mail_err");
        elem5.textContent = "メールアドレスが未入力です。";
        elem5.style.color = "red";
        success = false;
    }else if(!document.update_form.mail.value.match(/^\S+@\S+\.\S+$/)){
        var elem5 = document.getElementById("mail_err");
        elem5.textContent = "有効なメールアドレスを入力してください。";
        elem5.style.color = "red";
        success = false;
    }else if(document.update_form.mail.value.match(/^\S+@\S+\.\S+$/)){
        var elem5 = document.getElementById("mail_err");
        elem5.textContent = "";
    }
//パスワード
    if (document.update_form.password.value == "") {
        var elem6 = document.getElementById("password_err");
        elem6.textContent = "パスワードが未入力です。";
        elem6.style.color = "red";
        success = false;
    }else if(!document.update_form.password.value.match(/^[a-zA-Z0-9]+$/)){
        var elem6 = document.getElementById("password_err");
        elem6.textContent = "パスワードは英数字での入力となります。";
        elem6.style.color = "red";
        success = false;
    }else if(document.update_form.password.value.match(/^[a-zA-Z0-9]+$/)){
        var elem6 = document.getElementById("password_err");
        elem6.textContent = "";
    }
//郵便番号
    if (document.update_form.postal_code.value == "") {
        var elem7 = document.getElementById("postal_code_err");
        elem7.textContent = "郵便番号が未入力です。";
        elem7.style.color = "red";
        success = false;
    }else if(!document.update_form.postal_code.value.match(/^\d{7}$/)){
        var elem7 = document.getElementById("postal_code_err");
        elem7.textContent = "郵便番号は半角数字7桁での入力となります。";
        elem7.style.color = "red";
        success = false;
    }else if(document.update_form.postal_code.value.match(/^\d{7}$/)){
        var elem7 = document.getElementById("postal_code_err");
        elem7.textContent = "";
    }
//住所（都道府県）
    if (document.update_form.prefecture.value == "") {
        var elem8 = document.getElementById("prefecture_err");
        elem8.textContent = "住所（都道府県）を選択してください。";
        elem8.style.color = "red";
        success = false;
    }
//住所（市区町村）
    if (document.update_form.address_1.value == "") {
        var elem9 = document.getElementById("address_1_err");
        elem9.textContent = "住所（市区町村）が未入力です。";
        elem9.style.color = "red";
        success = false;
    }else if(!document.update_form.address_1.value.match(/^[ぁ-んァ-ン一-龥0-9０-９]+$/)){
        var elem9 = document.getElementById("address_1_err");
        elem9.textContent = "英語・記号（ハイフンとスペース）は入力できません。";
        elem9.style.color = "red";
        success = false;
    }else if(document.update_form.address_1.value.match(/^[ぁ-んァ-ン一-龥0-9０-９]+$/)){
        var elem9 = document.getElementById("address_1_err");
        elem9.textContent = "";
    }
//住所（番地）
    if (document.update_form.address_2.value == "") {
        var elem10 = document.getElementById("address_2_err");
        elem10.textContent = "住所（番地）が未入力です。";
        elem10.style.color = "red";
        success = false;
    }else if(!document.update_form.address_2.value.match(/^[ぁ-んァ-ン一-龥0-9０-９ ー−　¥-]+$/)){
        var elem10 = document.getElementById("address_2_err");
        elem10.textContent = "英語・記号（ハイフンとスペース）は入力できません。";
        elem10.style.color = "red";
        success = false;
    }else if(document.update_form.address_2.value.match(/^[ぁ-んァ-ン一-龥0-9０-９ ー−　¥-]+$/)){
        var elem10 = document.getElementById("address_2_err");
        elem10.textContent = "";
    }
    return success;
}
