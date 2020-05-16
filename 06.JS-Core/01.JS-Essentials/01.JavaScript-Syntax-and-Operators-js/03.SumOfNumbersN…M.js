
function solve(n, m) {
    let firstNum = Number(n);
    let secondNum = Number(m);
    let sum = firstNum;
    for(let i = firstNum + 1; i <= secondNum; i++) {
        sum += i;
    }
    return sum;
}

//solve("-8", "20");