function Check() {
    var success = true;
    if (document.regist_form.family_name.value == "") {
//var elm = document.getElementById("test_line");
        var elm = document.getElementById("error");
        elm.textContent = "あい";
        elm.style.color = "red";
//        ("#error") .on (document.write("あい"));
        success = false;
    }
    if (document.regist_form.last_name.value == "") {
        alert("い");
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
