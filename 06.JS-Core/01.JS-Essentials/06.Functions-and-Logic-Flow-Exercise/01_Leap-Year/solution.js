function leapYear() {
    
    let inputHtml = document.querySelector('#exercise > input');
    let button = document.querySelector('#exercise > button');
    let h2Element = document.querySelector('#year > h2');
    let divElement = document.querySelector('#year > div');
    
    button.addEventListener('click', () => {
        let year = Number(inputHtml.value);
        let isLeap = '';
        
        if ((year % 400 === 0) || (year % 4 === 0) && (year % 100 !== 0)) {
            isLeap = 'Leap Year';
        } else {
            isLeap = 'Not Leap Year';
        }
        
        h2Element.textContent = isLeap;
        divElement.textContent = year;
    });
}