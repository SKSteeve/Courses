function validate() {
   
    let inputElement = document.querySelector('fieldset div input');
    let buttonElement = document.querySelector('fieldset div button');
    let responseElement = document.getElementById('response');

    buttonElement.addEventListener('click', () => {
        let input = inputElement.value;
        responseElement.textContent = numberValidator(input);
    });

    function numberValidator(num) {
        let number = num;
        let lastDigit = number[9];

        let weightsArr = [2, 4, 8, 5, 10, 9, 7, 3, 6];
        let sumOfDigits = 0;
        for (let i = 0; i < 9; i++) {
            sumOfDigits += (number[i] * weightsArr[i]);
        }

        let reminder = sumOfDigits % 11;
        if(reminder === 10) {
            reminder = 0;
        }

        if (number.length === 10 && +lastDigit === +reminder) {
            return 'This Number is Valid!';
        } else {
            return 'This Number is NOT Valid!';
        }
    }
}