function solve(arr) {
    let step = Number(arr.pop());
    let arrFiltered = arr.reduce((accumulator, currValue, currIndex) => {
        if (currIndex % step === 0) {
            accumulator.push(currValue);
        }
        return accumulator;
    },[]);

    console.log(arrFiltered.join("\n"));
}

//solve(['1', '2', '3', '4', '5', '6']);