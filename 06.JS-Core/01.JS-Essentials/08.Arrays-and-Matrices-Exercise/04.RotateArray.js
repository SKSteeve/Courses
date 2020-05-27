function solve(arr) {
    let rotationCount = +arr.pop();

    if (rotationCount % arr.length === 0) {
        console.log(arr.join(' '));
        return;
    }
    while (rotationCount > 0) {
        arr.unshift(arr.pop());

        rotationCount--;
    }

    console.log(arr.join(' '));
}


solve(['1',
    '2',
    '3',
    '4',
    '4']
);