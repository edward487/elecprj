$(window).ready(function() {
    getGWA1();
    $(".select-value").change(getGWA1);


//first year 1rst Sem
function getGWA1() {

 var input1 = $(".one").val();
 var input2 = $(".two").val();
 var input3 = $(".three").val();
 var input4 = $(".four").val();
 var input5 = $(".five").val();
 var input6 = $(".six").val();
 var input7 = $(".seven").val();
 var input8 = $(".eight").val();
 var input9 = $(".nine").val();
 var soe = (input1*1);
 var mat02 = (input2*3);
 var mat04 = (input3*3);
 var chm01a = (input4*3);
 var chm01al = (input5*1);
 var eng00 = (input6*3);
 var fil01 = (input7*3);
 var draw01 = (input8*1);
 var ped01 = (input9*2);
 var gwa = (soe+mat02+mat04+chm01a+chm01al+eng00+fil01+draw01+ped01);


var result = Math.round(gwa/20* 100)/100;
    $("#GWA1").val(result);
};

//first year 2nd Sem
 getGWA2();
 $(".select-value").change(getGWA2);          
 
function getGWA2() {

 var input1 = $(".one2").val();
 var input2 = $(".two2").val();
 var input3 = $(".three2").val();
 var input4 = $(".four2").val();
 var input5 = $(".five2").val();
 var input6 = $(".six2").val();
 var input7 = $(".seven2").val();
 var input8 = $(".eight2").val();
 var input9 = $(".nine2").val();
 var mat02c = (input1*2);
 var mat05b = (input2*2);
 var mat04b = (input3*2);
 var ssc01 = (input4*3);
 var eng01 = (input5*3);
 var fil02 = (input6*3);
 var hum01 = (input7*3);
 var hum03 = (input8*3);
 var ped02 = (input9*2);
 var gwa = (mat02c+mat05b+mat04b+ssc01+eng01+fil02+hum01+hum03+ped02);


var result = Math.round(gwa/23* 100)/100;
    $("#GWA2").val(result);
};
//second year 1rst Sem
 getGWA3();
 $(".select-value").change(getGWA3);
function getGWA3() {

 var input1 = $(".one3").val();
 var input2 = $(".two3").val();
 var input3 = $(".three3").val();
 var input4 = $(".four3").val();
 var input5 = $(".five3").val();
 var input6 = $(".six3").val();
 var input7 = $(".seven3").val();
 var input8 = $(".eight3").val();
 var mat06 = (input1*4);
 var phy01a = (input2*3);
 var phy01al = (input3*1);
 var eng02a = (input4*3);
 var ssc03 = (input5*3);
 var ssc05 = (input6*3);
 var hum02 = (input7*3);
 var ped03 = (input8*2);
 var gwa = (mat06+phy01a+phy01al+eng02a+ssc03+ssc05+hum02+ped03);


var result = Math.round(gwa/22* 100)/100;
    $("#GWA3").val(result);
};

//second year 2nd Sem
 getGWA4();
 $(".select-value").change(getGWA4);          
 
function getGWA4() {

 var input1 = $(".one4").val();
 var input2 = $(".two4").val();
 var input3 = $(".three4").val();
 var input4 = $(".four4").val();
 var input5 = $(".five4").val();
 var input6 = $(".six4").val();
 var input7 = $(".seven4").val();
 var input8 = $(".eight4").val();
 var input9 = $(".nine4").val();
 var mat09a = (input1*3);
 var phy02a = (input2*3);
 var phy02al = (input3*1);
 var mat07 = (input4*4);
 var com01 = (input5*2);
 var eng03a = (input6*3);
 var ssc02 = (input7*3);
 var ssc06 = (input8*3);
 var ped03 = (input9*2);
 var gwa = (mat09a+phy02a+phy02al+mat07+com01+eng03a+ssc02+ssc06+ped03);


var result = Math.round(gwa/24* 100)/100;
    $("#GWA4").val(result);
};
//third year 1rst Sem
 getGWA5();
 $(".select-value").change(getGWA5);
function getGWA5() {

 var input1 = $(".one5").val();
 var input2 = $(".two5").val();
 var input3 = $(".three5").val();
 var input4 = $(".four5").val();
 var input5 = $(".five5").val();
 var input6 = $(".six5").val();
 var input7 = $(".seven5").val();
 var input8 = $(".eight5").val();
 var input9 = $(".nine5").val();
 var input10 = $(".ten5").val();
 var input11 = $(".eleven5").val();
 var cad01 = (input1*1);
 var mat08 = (input2*3);
 var mat05f = (input3*3);
 var nsc03b = (input4*2);
 var ele01= (input5*3);
 var ele01l = (input6*1);
 var ece01 = (input7*3);
 var ece01l = (input8*1);
 var cpe301 = (input9*3);
 var cpe301l = (input10*1);
 var cpe000 = (input11*1);
 var gwa = (cad01+mat08+mat05f+nsc03b+ele01+ele01l+ece01+ece01l+cpe301+cpe301l+cpe000);


var result = Math.round(gwa/22* 100)/100;
    $("#GWA5").val(result);
};

//third year 2nd Sem
 getGWA6();
 $(".select-value").change(getGWA6);          
 
function getGWA6() {

 var input1 = $(".one6").val();
 var input2 = $(".two6").val();
 var input3 = $(".three6").val();
 var input4 = $(".four6").val();
 var input5 = $(".five6").val();
 var input6 = $(".six6").val();
 var input7 = $(".seven6").val();
 var input8 = $(".eight6").val();
 var input9 = $(".nine6").val();
 var input10 = $(".ten6").val();
 var mec01 = (input1*3);
 var ece02 = (input2*3);
 var ece02l = (input3*1);
 var cpe311 = (input4*3);
 var cpe311l = (input5*1);
 var ele02 = (input6*3);
 var ele02l = (input7*1);
 var mat10b = (input8*3);
 var cpe302 = (input9*2);
 var cpe303 = (input10*1);
 var gwa = (mec01+ece02+ece02l+cpe311+cpe311l+ele02+ele02l+mat10b+cpe302+cpe303);


var result = Math.round(gwa/21* 100)/100;
    $("#GWA6").val(result);
};
    
//fourth year 1rst Sem
 getGWA7();
 $(".select-value").change(getGWA7);
function getGWA7() {

 var input1 = $(".one7").val();
 var input2 = $(".two7").val();
 var input3 = $(".three7").val();
 var input4 = $(".four7").val();
 var input5 = $(".five7").val();
 var input6 = $(".six7").val();
 var input7 = $(".seven7").val();
 var input8 = $(".eight7").val();
 var input9 = $(".nine7").val();
 var input10 = $(".ten7").val();
 var input11 = $(".eleven7").val();
 var mec02 = (input1*2);
 var mec03 = (input2*3);
 var cpe412 = (input3*3);
 var cpe412l = (input4*1);
 var cpe411= (input5*3);
 var cpe411l = (input6*1);
 var cpe422 = (input7*3);
 var cpe422l = (input8*1);
 var cpe411a = (input9*3);
 var cpe421 = (input10*3);
 var cpe421l = (input11*1);
 var gwa = (mec02+mec03+cpe412+cpe412l+cpe411+cpe411l+cpe422+cpe422l+cpe411a+cpe421+cpe421l);


var result = Math.round(gwa/24* 100)/100;
    $("#GWA7").val(result);
};

//fourth year 2nd Sem
 getGWA8();
 $(".select-value").change(getGWA8);          
 
function getGWA8() {

 var input1 = $(".one8").val();
 var input2 = $(".two8").val();
 var input3 = $(".three8").val();
 var input4 = $(".four8").val();
 var input5 = $(".five8").val();
 var input6 = $(".six8").val();
 var input7 = $(".seven8").val();
 var input8 = $(".eight8").val();
 var input9 = $(".nine8").val();
 var input10 = $(".ten8").val();
 var cpe401 = (input1*3);
 var cpe401l = (input2*1);
 var cpe402 = (input3*3);
 var cpe402l = (input4*1);
 var cpe412a = (input5*3);
 var cpe423 = (input6*3);
 var cpe423l = (input7*1);
 var cpe400 = (input8*2);
 var cpee1 = (input9*3);
 var res01 = (input10*3);
 var gwa = (cpe401+cpe401l+cpe402+cpe402l+cpe412a+cpe423+cpe423l+cpe400+cpee1+res01);


var result = Math.round(gwa/23* 100)/100;
    $("#GWA8").val(result);
};

//first year 2nd Sem
 getGWA9();
 $(".select-value").change(getGWA9);          
 
function getGWA9() {

 var input1 = $(".one9").val();
 var input2 = $(".two9").val();
 var input3 = $(".three9").val();
 var input4 = $(".four9").val();
 var input5 = $(".five9").val();
 var input6 = $(".six9").val();
 var input7 = $(".seven9").val();
 var input8 = $(".eight9").val();
 var cpe513 = (input1*3);
 var cpe513l = (input2*1);
 var cpe501 = (input3*3);
 var cpe501a = (input4*3);
 var cpee2 = (input5*3);
 var cpe521 = (input6*2);
 var res02 = (input7*3);
 var bee01 = (input8*3);
 var gwa = (cpe513+cpe513l+cpe501+cpe501a+cpee2+cpe521+res02+bee01);


var result = Math.round(gwa/21* 100)/100;
    $("#GWA9").val(result);
};
//second year 1rst Sem
 getGWA10();
 $(".select-value").change(getGWA10);
function getGWA10() {

 var input1 = $(".one10").val();
 var input2 = $(".two10").val();
 var input3 = $(".three10").val();
 var input4 = $(".four10").val();
 var input5 = $(".five10").val();
 var input6 = $(".six10").val();
 var input7 = $(".seven10").val();
 var acc01a = (input1*3);
 var cpe522 = (input2*3);
 var cpe522l = (input3*1);
 var cpee3 = (input4*3);
 var bee01a = (input5*3);
 var cpe501b = (input6*2);
 var cpe501c = (input7*2);
 var gwa = (acc01a+cpe522+cpe522l+cpee3+bee01a+cpe501b+cpe501c);


var result = Math.round(gwa/17* 100)/100;
    $("#GWA10").val(result);
};
});
