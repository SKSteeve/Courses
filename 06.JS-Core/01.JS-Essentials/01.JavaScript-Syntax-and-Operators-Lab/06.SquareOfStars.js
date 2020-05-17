
function solve(n) {
    if(n) {
        let result = "";
        for(let i = 1; i <= n; i++) {
            result += "* ";
        }

        for(let i = 1; i <= n; i++) {
            console.log(result);
        }
    } else {
        console.log("*****\n*****\n*****\n*****");
    }
}

//solve('');
//solve(3);