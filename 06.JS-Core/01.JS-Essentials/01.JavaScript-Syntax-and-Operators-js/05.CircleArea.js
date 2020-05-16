
function solve(r) {

    let inputType = typeof(r) ;
    if(inputType === 'number') {
        result = Math.PI * Math.pow(r,2);
        console.log(result.toFixed(2));
    } else {
        console.log("We can not calculate the circle area, because we receive a " + inputType + ".");
    }
}

//solve('5');
//solve(5);