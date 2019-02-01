
var el1 =  document.getElementById('counter1');
var el2 =  document.getElementById('counter2');



// Button "increment" - counter1 and counter2(adds +1)
function incrementNumber12() {
   // var el1 =  document.getElementById('counter1');
    var currentNumber = parseInt(el1.innerText);
    var incrementedNumber1 = currentNumber + 1;
    el1.innerText = incrementedNumber1;
   
   // var el2 =  document.getElementById('counter2');
    var currentNumber = parseInt(el2.innerText);
    var incrementedNumber2 = currentNumber + 1;
    el2.innerText = incrementedNumber2;
   }




//Button Buy1 - counter3 and counter4 (adds +1)
function incrementNumber34() {
    var el3 = document.getElementById('counter3');
    var currentNumber = parseInt(el3.innerText);
    var incrementedNumber3 = currentNumber + 1;
    // el3.innerText = incrementedNumber3;

    var el4 = document.getElementById('counter4');
    var currentNumber = parseInt(el4.innerText);
    var incrementedNumber4 = currentNumber + 1;
    // el4.innerText = incrementedNumber4;

//Checks if enough coins to buy upgrade
    if (parseInt(el2.innerText) >= (parseInt(el4.innerText))) {
        el3.innerText = incrementedNumber3;
        el4.innerText = incrementedNumber4;
       } else {
           alert('Not enough funds');
           return;
       }


/// Adds Interval 
    if (el4.innerText == incrementedNumber4 && parseInt(el2.innerText) >= 10) {
        // alert('not enough funds!');
        
         window.setInterval(incrementNumber12,700); 
         el2.innerText = parseInt(el2.innerText) - parseInt(el4.innerText);
        }  else {
            return;
        }

}






// Button Buy10 - counter5 (adds +1) and counter6 (adds +10)
function incrementNumber56() {
    var el5 = document.getElementById('counter5');
    var currentNumber = parseInt(el5.innerText);
    var incrementedNumber5 = currentNumber + 1;
    
    var el6 = document.getElementById('counter6');
    var currentNumber = parseInt(el6.innerText);
    var incrementedNumber6 = currentNumber + 10;
   

//Checks if enough coins to buy upgrade
    if (parseInt(el2.innerText) >= (parseInt(el6.innerText))) {
     el5.innerText = incrementedNumber5;
     el6.innerText = incrementedNumber6;
    } else {
        alert('Not enough funds');
        return;
    }


//Adds interval
    if (el6.innerText == incrementedNumber6 && parseInt(el2.innerText) >= 90) {
    // alert('not enough funds!');
    
     window.setInterval(incrementNumber12,300); 
     el2.innerText = parseInt(el2.innerText) - parseInt(el6.innerText);
    }  else {
        return;
    }
 
}

