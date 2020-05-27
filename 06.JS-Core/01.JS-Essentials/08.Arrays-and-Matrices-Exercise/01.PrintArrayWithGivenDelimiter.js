function solve(arr) {
    let delimiter = arr.pop();
    let str = arr.join(delimiter);
    console.log(str);
}

solve(['One', 'Two', 'Three', 'Four', 'Five', '-']);