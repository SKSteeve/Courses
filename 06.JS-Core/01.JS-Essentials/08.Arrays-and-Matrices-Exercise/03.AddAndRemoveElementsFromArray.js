function solve(arr) {
    let count = 1;
    let arrCollector = [];
    for (let i = 0; i < arr.length; i++) {
        if (arr[i] === 'add') {
            arrCollector.push(count);
        } else {
            arrCollector.pop();
        }
        count++;
    }
    if (arrCollector. length <= 0) {
        console.log('Empty');
        return;
    }
    console.log(arrCollector.join('\n'));
}

//solve(['add', 'add', 'remove', 'add', 'add']);