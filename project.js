//alert("I dey work");
var NumOfDigits = new Array (10); 
var timeCounter=20;
var t;
var isTimerOn= false;
var answer;
var correct;
var intro = 'Welcome to the Group Four Project Game ' ;
//alert(intro);

function readCookie(name) {  
    //alert('HAHA NIKLAS KAN INTE JAVASCRIPT');
        var cookieName = name + "=";
        var cookieArray = document.cookie.split(';'); 
        
        for (var i = 0; i < cookieArray.length; i++){  
            var cookie = cookieArray[i];  
            while (cookie.charAt(0)==' '){ 
            cookie = cookie.substring(1,cookie.length);
        }
            if (cookie.indexOf(cookieName) == 0){
            return cookie.substring(cookieName.length,cookie.length);
        }
        }
    return null;  
    }

function stream(){
    for (let counter = 0; counter < 10; counter++) {
        NumOfDigits[counter] = Math.floor((Math.random() * 9) + 1);
    }
    document.cookie = "NumOfDigits= " + NumOfDigits;
    var numm = document.getElementsByTagName("p");
    for (let counter = 0; counter < 10; counter++) {
        numm[counter].innerHTML =  NumOfDigits[counter];
    }
}

function countdown() {
    document.getElementById("txt").innerHTML = timeCounter;
    timeCounter--;
    t = setTimeout("countdown();", 1000);
    if(timeCounter<0){
        clearTimeout(t);
        document.getElementById("txt").innerHTML = " ";
        window.open('play.php','_self');
    }
}
function countdown1() {
    document.getElementById("txt").innerHTML = timeCounter;
    timeCounter--;
    t = setTimeout("countdown1();", 1000);
    if(timeCounter<0){
        clearTimeout(t);
        document.getElementById("txt").innerHTML = " ";
        scorecheck();
    }
}

function startMe() {
    var sPath = window.location.pathname;
    if(sPath == "project.php" && !isTimerOn){
        isTimerOn = true;
        countdown();
    }
    else if(sPath  == "play.php" && !isTimerOn){
        isTimerOn = true;
        countdown1();
    }
    // if (!isTimerOn) {
    //     isTimerOn = true;
    //     countdown();
    // }
}

// function getvalues(){
//     var ans = new Array(10);
//     for (let index = 0; index < 10; index++) {
//     if (index == 0) {
//         answer = prompt ('Enter the '+ index + 'st number');
//         ans[index] = answer;
//     }
//     else if(index == 1){
//         answer = prompt ('Enter the '+ index + 'nd number');
//         ans[index] = answer;
//     }
//     else if(index==2){
//         answer = prompt ('Enter the '+ index + 'rd number');
//         ans[index] = answer;
//     }
//     else{
//         answer = prompt ('Enter the '+ index + 'th number');
//         ans[index] = answer;
//     }
// }
// }

function getvalues(){
    var change = document.getElementsByTagName("p");
          for(var i = 0; i < 10; i++){
            change[i].innerHTML = "<input class=\"center md-form col-md-1 \"></input>";
            document.getElementById("bb").innerHTML = "<input value=\"Submit!\" type=\"button\" class=\"container-fluid btn ma2 ba bw3 br3 b--white center dim\" style=\"background-color:#ffffff; text-align:center;\" onclick=\"scorecheck();\"></input>";
          }

}

function viewuser(){
    window.open('view_users.php','_self');
}

function scorecheck(){
    var f = document.cookie;
    var nod = readCookie('NumOfDigits');
    var correct = 0;
    var ans = document.getElementsByTagName("input");
    for (let index = 0; index < 10; index++) {
        if (ans[index+1].value === nod[index*2]) {
            correct++;
        }
    }
    for (let inde = 0; inde < 10; inde++) {
        console.log(ans[inde+1].value);
        console.log(nod[inde*2]);
    }
    console.log(correct);
    document.cookie = "correct = " + correct;

    window.open('finish.php','_self');
    //document.getElementById("final").innerHTML = "Your score was" + correct;
    scoreprint(correct);
    // if (correct==10) {
    //     alert("You got all correct! CONGRATULATIONS");
    // }
    // else{
    //     prompt("Nice try, but try again");
    //     prompt("Your Score was "+ correct);        
    //     for (let index = 0; index < 10; index++){
    //         document.write(ans[index]);
    //     }
    //     document.write('What is correct: ');
    //     for (let index = 0; index < 10; index++){
    //         document.write(NumOfDigits[index]);
    //     }
    //}
}

function scoreprint(h){
    var done = readCookie('correct');
    document.getElementById("final").innerHTML = "Your score was " + done;
    //document.getElementById("final").innerHTML = "<input class=\"center md-form col-md-1 \"></input>";
}
