
function solve(matrix, commands) {

    commands = commands.split(' ');
    let command = commands[0];

    switch (command) {
        case 'hide':
            let columnToHide = commands[1];
            let indexToHide = indexFind(columnToHide);

            for (let row of matrix) {
                row.splice(indexToHide, 1);
            }
            print(matrix);

            break;
        case 'sort':
            let columnToSort = commands[1];
            let indexToSort = indexFind(columnToSort);

            matrix = sortByColumn(matrix, indexToSort);
            let a = matrix.pop();
            matrix.splice(0, 0, a);

            function sortByColumn(a, colIndex){

                a.sort(sortFunction);

                function sortFunction(a, b) {
                    if (a[colIndex] === b[colIndex]) {
                        return 0;
                    }
                    else {
                        return (a[colIndex] < b[colIndex]) ? -1 : 1;
                    }
                }
                return a;
            }
            print(matrix);

            break;
        case 'filter':
            let columnToSearchFor = commands[1];
            let indexToFilter = indexFind(columnToSearchFor);
            let searchingFor = commands[2];

            let filtered = [];
            for(let row of matrix) {
                if (row[indexToFilter] === searchingFor) {
                    filtered.push(row);
                }
            }
            filtered.splice(0, 0, matrix[0]);
            print(filtered);
            break;
    }

    function indexFind(headerColumn) {
        let columnIndex = (element) => element === headerColumn;
        let index = matrix[0].findIndex(columnIndex);
        return index;
    }

    function print(matrixOfPeople) {
        for (let row of matrixOfPeople) {
            console.log(row.join(' | '));
        }
    }
}

solve(
    [['firstName', 'age', 'grade', 'course'],
        ['Peter', '25', '5.00', 'JS-Core'],
        ['George', '34', '6.00', 'Tech'],
        ['Marry', '28', '5.49', 'Ruby'],
        ['Marry', '21', '3.12', 'C#']],
    'filter firstName Marry'
);

//filter firstName Marry