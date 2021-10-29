function Check() {
    var success = true;
//    console.log("test2");
//名前（姓）
    if (document.regist_form.family_name.value == "") {
        var elm1 = document.getElementById("family_name_error");
        elm1.textContent = "名前（姓）が未入力です。";
        elm1.style.color = "red";
        success = false;
    }else if(!document.regist_form.family_name.value.match(/^[一-龥ぁ-ん]/)){
        var elm1 = document.getElementById("family_name_error");
        elm1.textContent = "名前（姓）は、かな・漢字での入力となります。";
        elm1.style.color = "red";
        success = false;
    }else if(document.regist_form.family_name.value.match(/^[一-龥ぁ-ん]/)){
        var elm1 = document.getElementById("family_name_error");
        elm1.textContent = "";
    }
//名前（名）
    if (document.regist_form.last_name.value == "") {
        var elm2 = document.getElementById("last_name_error");
        elm2.textContent = "名前（名）が未入力です。";
        elm2.style.color = "red";
        success = false;
    }else if(!document.regist_form.last_name.value.match(/^[一-龥ぁ-ん]/)){
        var elm2 = document.getElementById("last_name_error");
        elm2.textContent = "名前（名）は、かな・漢字での入力となります。";
        elm2.style.color = "red";
        success = false;
    }else if(document.regist_form.last_name.value.match(/^[一-龥ぁ-ん]/)){
        var elm2 = document.getElementById("last_name_error");
        elm2.textContent = "";
    }
//カナ（姓）
    if (document.regist_form.family_name_kana.value == "") {
        var elm3 = document.getElementById("family_name_kana_error");
        elm3.textContent = "カナ（姓）が未入力です。";
        elm3.style.color = "red";
        success = false;
    }else if(!document.regist_form.family_name_kana.value.match(/^([ァ-ン]|ー)+$/)){
        var elm3 = document.getElementById("family_name_kana_error");
        elm3.textContent = "カナ（姓）は、カタカナでの入力となります。";
        elm3.style.color = "red";
        success = false;
    }else if(document.regist_form.family_name_kana.value.match(/^([ァ-ン]|ー)+$/)){
        var elm3 = document.getElementById("family_name_kana_error");
        elm3.textContent = "";
    }
//カナ（名）
    if (document.regist_form.last_name_kana.value == "") {
        var elm4 = document.getElementById("last_name_kana_error");
        elm4.textContent = "カナ（名）が未入力です。";
        elm4.style.color = "red";
        success = false;
    }else if(!document.regist_form.last_name_kana.value.match(/^([ァ-ン]|ー)+$/)){
        var elm4 = document.getElementById("last_name_kana_error");
        elm4.textContent = "カナ（名）は、カタカナでの入力となります。";
        elm4.style.color = "red";
        success = false;
    }else if(document.regist_form.last_name_kana.value.match(/^([ァ-ン]|ー)+$/)){
        var elm4 = document.getElementById("last_name_kana_error");
        elm4.textContent = "";
    }
//メールアドレス
    if (document.regist_form.mail.value == "") {
        var elm5 = document.getElementById("mail_error");
        elm5.textContent = "メールアドレスが未入力です。";
        elm5.style.color = "red";
        success = false;
    }else if(!document.regist_form.mail.value.match(/^\S+@\S+\.\S+$/)){
        var elm5 = document.getElementById("mail_error");
        elm5.textContent = "有効なメールアドレスを入力してください。";
        elm5.style.color = "red";
        success = false;
    }else if(document.regist_form.mail.value.match(/^\S+@\S+\.\S+$/)){
        var elm5 = document.getElementById("mail_error");
        elm5.textContent = "";
    }
//郵便番号
    if (document.regist_form.postal_code.value == "") {
        var elm7 = document.getElementById("postal_code_error");
        elm7.textContent = "郵便番号が未入力です。";
        elm7.style.color = "red";
        success = false;
    }else if(!document.regist_form.postal_code.value.match(/^\d{7}$/)){
        var elm7 = document.getElementById("postal_code_error");
        elm7.textContent = "郵便番号は半角数字7桁での入力となります。";
        elm7.style.color = "red";
        success = false;
    }else if(document.regist_form.postal_code.value.match(/^\d{7}$/)){
        var elm7 = document.getElementById("postal_code_error");
        elm7.textContent = "";
    }
//住所（都道府県）
    if (document.regist_form.prefecture.value == "") {
        var elm8 = document.getElementById("prefecture_error");
        elm8.textContent = "住所（都道府県）を選択してください。";
        elm8.style.color = "red";
        success = false;
    }
//住所（市区町村）
    if (document.regist_form.address_1.value == "") {
        var elm9 = document.getElementById("address_1_error");
        elm9.textContent = "住所（市区町村）が未入力です。";
        elm9.style.color = "red";
        success = false;
    }else if(!document.regist_form.address_1.value.match(/^[ぁ-んァ-ン一-龥0-9０-９]+$/)){
        var elm9 = document.getElementById("address_1_error");
        elm9.textContent = "英語・記号（ハイフンとスペース）は入力できません。";
        elm9.style.color = "red";
        success = false;
    }else if(document.regist_form.address_1.value.match(/^[ぁ-んァ-ン一-龥0-9０-９]+$/)){
        var elm9 = document.getElementById("address_1_error");
        elm9.textContent = "";
    }
//住所（番地）
    if (document.regist_form.address_2.value == "") {
        var elm10 = document.getElementById("address_2_error");
        elm10.textContent = "住所（番地）が未入力です。";
        elm10.style.color = "red";
        success = false;
    }else if(!document.regist_form.address_2.value.match(/^[ぁ-んァ-ン一-龥0-9０-９ ー−　¥-]+$/)){
        var elm10 = document.getElementById("address_2_error");
        elm10.textContent = "英語・記号（ハイフンとスペース）は入力できません。";
        elm10.style.color = "red";
        success = false;
    }else if(document.regist_form.address_2.value.match(/^[ぁ-んァ-ン一-龥0-9０-９ ー−　¥-]+$/)){
        var elm10 = document.getElementById("address_2_error");
        elm10.textContent = "";
    }
    return success;
}