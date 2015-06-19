msg=0;
msg1=0;
msg2=0;
msg3=0;

<!--
function Selc(Obj){
index_nub = Obj.selectedIndex; //選択された項目番号を取得する
T_value = Obj.options[Obj.selectedIndex].value; //選択された項目のカロリーを取得する
msg=T_value;
document.getElementById("comt").innerHTML = msg;//カロリー表示
document.getElementById("goukei").innerHTML = msg+msg1+msg2+msg3;　//未完成カロリー合計値
num = document.selc.selectedIndex; //未完成　画像表示
if(num == 0)
document.gazou.src="./img/back.jpg";
else if(num == 1)
document.gazou.src="./img/hakumai.jpg";
else if(num == 2)
document.gazou.src="./img/genmai.jpg";
else if(num == 3)
document.gazou.src="./img/sekihan.jpg";
else
document.gazou.src="./img/kurigohan.jpg";


}
// -->
<!--
function Selc1(Obj){
index_nub = Obj.selectedIndex; //選択された項目番号を取得する
T_value = Obj.options[Obj.selectedIndex].value; //選択された項目のカロリーを取得する
msg1=T_value;
document.getElementById("comt1").innerHTML = msg1;
document.getElementById("goukei").innerHTML = msg+msg1+msg2+msg3;
}
// -->
<!--
function Selc2(Obj){
index_nub = Obj.selectedIndex; //選択された項目番号を取得する
T_value = Obj.options[Obj.selectedIndex].value; //選択された項目のカロリーを取得する
msg2=T_value;
document.getElementById("comt2").innerHTML = msg2;
document.getElementById("goukei").innerHTML = msg+msg1+msg2+msg3;
}
// -->
<!--
function Selc3(Obj){
index_nub = Obj.selectedIndex; //選択された項目番号を取得する
T_value = Obj.options[Obj.selectedIndex].value; //選択された項目のカロリーを取得する
msg3=T_value;
document.getElementById("comt3").innerHTML = msg3;
document.getElementById("goukei").innerHTML = msg+msg1+msg2+msg3;
}
// -->