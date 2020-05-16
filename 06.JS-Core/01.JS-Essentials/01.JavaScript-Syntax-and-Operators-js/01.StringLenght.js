
function solve(a, b, c) {
    let sumLenght;
    let avgLenght;

    let firstStr = a.length;
    let secondStr = b.length;
    let thirdStr = c.length;

    sumLenght = firstStr + secondStr + thirdStr;
    avgLenght = Math.floor(sumLenght / 3);

    console.log(sumLenght);
    console.log(avgLenght);
}

//solve("bb", "n" ,"stefi");