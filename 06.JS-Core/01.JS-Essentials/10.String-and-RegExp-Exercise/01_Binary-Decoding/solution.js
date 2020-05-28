function solve() {
    let resultElement = document.getElementById('result');
    let str = document.getElementById('str').value;

    let sum = 0;
    for (let i = 0; i < str.length; i++) {
        if(+str[i] === 1) {
            sum++;
        }
    }

    let num = getOneDigit(sum);

    function getOneDigit(summ) {
        let sum = Number(summ);
        while (sum >= 10) {
            let numberr = 0;
            sum = sum.toString();
            for (let i = 0; i < sum.length; i++) {
                numberr += +sum[i];
            }
            sum = Number(numberr);
        }
        return sum;
    }

    let cutedStr = str.slice(num, (str.length - num));
    let arrSplitedElements = [];
    for (let i = 0; i < cutedStr.length; i+=8) {

        let eightChars = cutedStr.slice(i, (i + 8)); // can be done with split(/([\d]{8})/)
        let a = parseInt(eightChars, 2);        //  with no need to loop
        let b = String.fromCharCode(a);
        arrSplitedElements.push(b);
    }

    resultElement.textContent = arrSplitedElements.filter((c) => /[A-Za-z ]+/g.test(c)).join('');
}

//solve('010011100110110111101100110011101000111010101101110011010010010000001110011011101000111010101100100011001010110111001110100010');
// '010011100110110111101100110011101000111010101101110011010010010000001110011011101000111010101100100011001010110111001110100010'
//'0100011011010111100100100000011011100110000101101101011001010010000001101001011100110010'
