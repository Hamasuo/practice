document.write("■■■問1■■■"+"<br>")
    for(var i=1;i<=5;i++){
        document.write("★");
    }
document.write("<br><br>")


document.write("■■■問2■■■"+"<br>")
    for(var i=1;i<=2;i++){
        for(var a=1;a<=3;a++){
         document.write("★");}
    document.write("<br>");
    }
document.write("<br><br>")

document.write("■■■問3■■■"+"<br>")
    for(var i=1;i<=2;i++){
        for(var a=1;a<=5;a++){
        document.write("☆");}
    document.write("<br>")
    }
document.write("<br><br>")

document.write("■■■問4■■■"+"<br>")
    for(var i=1;i<=4;i++){
        for(var a=1;a<=5;a++){
        document.write("★");}
    document.write("<br>");
    }
document.write("<br><br>")

document.write("■■■問5■■■"+"<br>")
    for(var i=1;i<=4;i++){
        for(var a=1;a<=3;a++){
        document.write("★");}
    document.write("<br>");
    }
document.write("<br><br>")
   
document.write("■■■問6■■■"+"<br>")
     for(var i=1;i<=3;i++){
         for(var a=1;a<=3;a++){
             if(a%2==0){
                 document.write("☆");
             }else{
            document.write("★");}
            }
        document.write("<br>")
     }
document.write("<br><br>")

document.write("■■■問7■■■"+"<br>")
    for(var i=1;i<=4;i++){
        for(var a=1;a<=5;a++){
            if(a%2==0){
                document.write("☆");
            }else{
        document.write("★");}
        }
    document.write("<br>");
    }
document.write("<br><br>")

document.write("■■■問8■■■"+"<br>")
    for(var i=1;i<=5;i++){
        for(var a=1;a<=5;a+=1){
            if(i>=a){
                document.write("★")
            }else{
                document.write("　")
                }
            }document.write("<br>")
        }