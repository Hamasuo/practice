function Check() {
    var success = true;
    console.log("test2");
    if (document.regist_form.family_name.value == "") {
//var elm = document.getElementById("test_line");
        var elm1 = document.getElementById("family_name_error");
        elm1.textContent = "あい";
        elm1.style.color = "red";
        success = false;
    }else if(!document.regist_form.family_name.value.match(/^[ぁ-ん]+$/)){
//    }else if(document.regist_form.family_name.value.match('[^\x20-\x7E]*')){
//    }else if(document.regist_form.family_name.value == '/^[ぁ-ん]+$/'){
        var elem1 = document.getElementById("family_name_error");
        elem1.textContent = "あ";
        elem1.style.color = "black";
        success = false;
    }else if(document.regist_form.family_name.value.match(/^[ぁ-ん]+$/)){
        var elem2 = document.getElementById("family_name_error");
        elem2.textContent = "";
    }
    
    if (document.regist_form.last_name.value == "") {
        var elm2 = document.getElementById("last_name_error");
        elm2.textContent = "あ";
        elm2.style.color = "red";
        success = false;
    }
    if (document.regist_form.family_name_kana.value == "") {
        var elm3 = document.getElementById("family_name_kana_error");
        elm3.textContent = "う";
        elm3.style.color = "red";
        success = false;
    }
    
    
    return success;
}


















/*$(function () {
    "use strict";
    $("submit").click(function () {
                      if (".familiy_name" == 0 ){
        document.write("入力内容に");
    } else {document.width("");}
                      });
});*/

/*$(function(){
    $(".submit").click(function{
                       $(".family_name_error").Text("color","red");
                       });
});*/

/*$('input.required').on('submit',function(){
    var error;
    if ( error ){
        return false;
    } else {
        return true;
    }
});*/