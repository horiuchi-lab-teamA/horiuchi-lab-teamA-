var msg=0,msg1=0,msg2=0,msg3=0,kuri=0,kuri1=0,kuri2=0,kuri3=0,num=0,kei=0,num1=0,num2=0,num3=0;

<!--
function Selc(Obj){
index_nub = Obj.selectedIndex; //選択された項目番号を取得する
T_value = Obj.options[Obj.selectedIndex].value; //選択された項目のカロリーを取得する
msg=T_value;
kuri=parseInt(msg);
document.getElementById("comt").innerHTML = kuri;//カロリー表示
kei=kuri+kuri1+kuri2+kuri3;
document.getElementById("goukei").innerHTML = kei;　//カロリー合計値
num = document.form.selc.selectedIndex; //画像表示
if(num == 0){
document.getElementById("gazou1").style.background="url(img/back.jpg)" ;
}
else if(num == 1){
document.getElementById("gazou1").style.background="url(img/hakumai.jpg)" ;
}
else if(num == 2){
document.getElementById("gazou1").style.background="url(img/genmai.jpg)" ;}
else if(num == 3){
document.getElementById("gazou1").style.background="url(img/sekihan.jpg)" ;}
else if(num == 4){
document.getElementById("gazou1").style.background="url(img/kurigohan.jpg)" ;}
else{
document.getElementById("gazou1").style.background="url(img/mamegohan.jpg)" ;}

}
// -->
<!--
function Selc1(Obj){
index_nub = Obj.selectedIndex; //選択された項目番号を取得する
msg1 = Obj.options[Obj.selectedIndex].value; //選択された項目のカロリーを取得する
kuri1=parseInt(msg1);
document.getElementById("comt1").innerHTML = kuri1; 
kei=kuri+kuri1+kuri2+kuri3;
document.getElementById("goukei").innerHTML = kei;　//カロリー合計値
num1 = document.form.selc1.selectedIndex; //画像表示
if(num1 == 0){
document.getElementById("gazou2").style.background="url(img/back.jpg)" ;}
else if(num1 == 1){
document.getElementById("gazou2").style.background="url(img/karaage.jpg)" ;}
else if(num1 == 2){
document.getElementById("gazou2").style.background="url(img/tikinkatu.jpg)" ;}
else if(num1 == 3){
document.getElementById("gazou2").style.background="url(img/nagetto.jpg)" ;}
else if(num1 == 4){
document.getElementById("gazou2").style.background="url(img/teriyaki.jpg)" ;}
else if(num1 == 5){
document.getElementById("gazou2").style.background="url(img/syougayaki.jpg)" ;}
else if(num1 == 6){
document.getElementById("gazou2").style.background="url(img/hirekatu.jpg)" ;}
else if(num1 == 7){
document.getElementById("gazou2").style.background="url(img/menti.jpg)" ;}
else if(num1 == 8){
document.getElementById("gazou2").style.background="url(img/hanbagu.jpg)" ;}
else if(num1 == 9){
document.getElementById("gazou2").style.background="url(img/wahu.jpg)" ;}
else if(num1 == 10){
document.getElementById("gazou2").style.background="url(img/nikujaga.jpg)" ;}
else if(num1 == 11){
document.getElementById("gazou2").style.background="url(img/ebifurai.jpg)" ;}
else if(num1 == 12){
document.getElementById("gazou2").style.background="url(img/ikaring.jpg)" ;}
else if(num1 == 13){
document.getElementById("gazou2").style.background="url(img/yakisaba.jpg)" ;}
else if(num1 == 14){
document.getElementById("gazou2").style.background="url(img/sakeshio.jpg)" ;}
else{
document.getElementById("gazou2").style.background="url(img/sanma.jpg)" ;}

}
// -->
<!--
function Selc2(Obj){
index_nub = Obj.selectedIndex; //選択された項目番号を取得する
T_value = Obj.options[Obj.selectedIndex].value; //選択された項目のカロリーを取得する
msg2=T_value;
kuri2=parseInt(msg2);
document.getElementById("comt2").innerHTML = kuri2;
kei=kuri+kuri1+kuri2+kuri3;
document.getElementById("goukei").innerHTML = kei;　//未完成カロリー合計値
num2 = document.form.selc2.selectedIndex; //画像表示
if(num2 == 0){
document.getElementById("gazou3").style.background="url(img/back.jpg)" ;}
else if(num2 == 1){
document.getElementById("gazou3").style.background="url(img/yasaiitame.jpg)" ;}
else if(num2 == 2){
document.getElementById("gazou3").style.background="url(img/nikuyasai.jpg)" ;}
else if(num2 == 3){
document.getElementById("gazou3").style.background="url(img/sarada.jpg)" ;}
else if(num2 == 4){
document.getElementById("gazou3").style.background="url(img/potetosarada.jpg)" ;}
else if(num2 == 5){
document.getElementById("gazou3").style.background="url(img/makaroni.jpg)" ;}
else if(num2 == 6){
document.getElementById("gazou3").style.background="url(img/toufu.jpg)" ;}
else if(num2 == 7){
document.getElementById("gazou3").style.background="url(img/tunasarada.jpg)" ;}
else if(num2 == 8){
document.getElementById("gazou3").style.background="url(img/tikuzenn.jpg)" ;}
else{
document.getElementById("gazou3").style.background="url(img/goya.jpg)" ;}
}
// -->
<!--
function Selc3(Obj){
index_nub = Obj.selectedIndex; //選択された項目番号を取得する
T_value = Obj.options[Obj.selectedIndex].value; //選択された項目のカロリーを取得する
msg3=T_value;
kuri3=parseInt(msg3);
document.getElementById("comt3").innerHTML = kuri3;
kei=kuri+kuri1+kuri2+kuri3;
document.getElementById("goukei").innerHTML = kei;　//未完成カロリー合計値
num3 = document.form.selc3.selectedIndex; //画像表示
if(num3 == 0){
document.getElementById("gazou4").style.background="url(img/back.jpg)" ;}
else if(num3 == 1){
document.getElementById("gazou4").style.background="url(img/iritamago.jpg)" ;}
else if(num3 == 2){
document.getElementById("gazou4").style.background="url(img/sukurannburu.jpg)" ;}
else if(num3 == 3){
document.getElementById("gazou4").style.background="url(img/tamagoyaki.jpg)" ;}
else if(num3 == 4){
document.getElementById("gazou4").style.background="url(img/hijiki.jpg)" ;}
else if(num3 == 5){
document.getElementById("gazou4").style.background="url(img/nama.jpg)" ;}
else{
document.getElementById("gazou4").style.background="url(img/yakidouhu.jpg)" ;}
}
// -->
<!--
function openwin(){
if(kei <= 660){
document.getElementById("keikoku").innerHTML = "";
window.open('print.html','','scrollbars=yes,width=200,height=50,');
}
else{
document.getElementById("keikoku").innerHTML = "規定カロリーを超過しています．調整してください．";
}
}
// -->