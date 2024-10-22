$(document).ready(function(){
    $("#aaa2").css({"display": "none"});
    $("#aaa1").css({"display": "block"});
    $("#aaa3").css({"display": "none"});
    $(".s1").on("click",function(){
        var str1=$(".in1").val();
        var strr1=str1.replace(/[0-9`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi,'');
        var str2=$(".in2").val();
        var strr2=str2.replace(/[0-9`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi,'');
        var str3=$(".in3").val();
        var str4=$(".in4").val();
        var str5=$(".in5").val();
        var str6=$(".in6").val();


        if(str1.length==0){
        $(".l1").css({"display": "block"}).delay(5000).fadeOut();
        console.log("hhh");
        }
        if(strr1.length!=str1.length){
        $(".l11").css({"display": "block"}).delay(5000).fadeOut();
        console.log("hhh");
        }
        if(str2.length==0){
            $(".l2").css({"display": "block"}).delay(5000).fadeOut();
            console.log("hoooohh");
        }
        if(strr2.length!=str2.length){
            $(".l21").css({"display": "block"}).delay(5000).fadeOut();
            console.log("hoooohh");
        }
        if((str3.length==0)){
            $(".l3").css({"display": "block"}).delay(5000).fadeOut();
            console.log("omarrrrr");
        }
        if(str5.length==0){
            $(".l5").css({"display": "block"}).delay(5000).fadeOut();
            console.log("hhh");
        }
        if((str6.length==0)){
            $(".l6").css({"display": "block"}).delay(5000).fadeOut();
            console.log("hhh");
        }
        if(!((str6.length==0))&& !((str5.length==0))&& !((str3.length==0))&& !((strr2.length!=str2.length) || (str2.length==0))&& !((strr1.length!=str1.length) || (str1.length==0))){
        $("#aaa1").css({"display": "none"});
        $("#aaa2").css({"display": "block"});
        $("#aaa3").css({"display": "none"});
        $("#qqqq").attr('class',"page-item ");

        }

    })
    $(".s2").on("click",function(){
        $("#aaa2").css({"display": "none"});
        $("#aaa1").css({"display": "block"});
        $("#aaa3").css({"display": "none"});

    })
    $(".s3").on("click",function(){
        var str7=$(".in7").val();
        var strr7=str7.replace(/[0-9`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi,'');
        var str8=$(".in8").val();
        var strr8=str8.replace(/[0-9`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi,'');
        var str9=$(".in9").val();
        var strr9=str9.replace(/[0-9`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi,'');
        var str10=$(".in10").val();
        var strr10=str10.replace(/[0-9`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi,'');
        var str11=$(".in11").val();
        var strr11=str11.replace(/[0-9`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi,'');
        var str12=$(".in12").val();
        var strr12=str12.replace(/[0-9`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi,'');
        var str13=$(".in13").val();
        var str14=$(".in14").val();
        if(str7.length==0){
            $(".l7").css({"display": "block"}).delay(5000).fadeOut();
            console.log("hhh");
            }
        if(strr7.length!=str7.length){
            $(".l71").css({"display": "block"}).delay(5000).fadeOut();
            console.log("hhh");
        }
        if(str8.length==0){
            $(".l8").css({"display": "block"}).delay(5000).fadeOut();
            console.log("hoooohh");
        }
        if(strr8.length!=str8.length){
            $(".l81").css({"display": "block"}).delay(5000).fadeOut();
            console.log("hoooohh");
        }
        if(str9.length==0){
            $(".l9").css({"display": "block"}).delay(5000).fadeOut();
            console.log("hoooohh");
        }
        if(strr9.length!=str9.length){
            $(".l91").css({"display": "block"}).delay(5000).fadeOut();
            console.log("hoooohh");
        }
        if(str10.length==0){
            $(".l10").css({"display": "block"}).delay(5000).fadeOut();
            console.log("hoooohh");
        }
        if(strr10.length!=str10.length){
            $(".l101").css({"display": "block"}).delay(5000).fadeOut();
            console.log("hoooohh");
        }
        if(str11.length==0){
            $(".l11").css({"display": "block"}).delay(5000).fadeOut();
            console.log("hoooohh");
        }
        if(strr11.length!=str11.length){
            $(".l111").css({"display": "block"}).delay(5000).fadeOut();
            console.log("hoooohh");
        }
        if(str12.length==0){
            $(".l12").css({"display": "block"}).delay(5000).fadeOut();
            console.log("hoooohh");
        }
        if(strr12.length!=str12.length){
            $(".l121").css({"display": "block"}).delay(5000).fadeOut();
            console.log("hoooohh");
        }
        if(str13.length==0){
            $(".l13").css({"display": "block"}).delay(5000).fadeOut();
            console.log("hoooohh");
        }
        if(str14.length==0){
            $(".l14").css({"display": "block"}).delay(5000).fadeOut();
            console.log("hoooohh");
        }
        if(!(str14.length==0)&& !(str13.length==0)&& !(strr12.length!=str12.length)&& !(str12.length==0)&& !(strr11.length!=str11.length)&& !(str11.length==0)&& !(strr10.length!=str10.length)&& !(str10.length==0)&& !(strr9.length!=str9.length)&& !(str9.length==0)&& !(strr8.length!=str8.length)&& !(str8.length==0)){

        $("#aaa2").css({"display": "none"});
        $("#aaa3").css({"display": "block"});
        $("#aaa1").css({"display": "none"});
    }

    })
    $(".s4").on("click",function(){
        $("#aaa1").css({"display": "none"});
        $("#aaa2").css({"display": "block"});
        $("#aaa3").css({"display": "none"});

    })

})
