function solve() {
    let input = JSON.parse(document.getElementById('arr').value);
    let regExp = /^(?<name>[A-Z][a-z]* [A-Z][a-z]*) (?<phone>\+359([- ])\d(\3)\d{3}(\3)\d{3}) (?<email>[a-z0-9]+@[a-z]+\.[a-z]{2,3})$/g;
    let result = document.getElementById('result');
    input.forEach(e => {
        let info = regExp.exec(e);
        regExp.lastIndex = 0;
        if (info !== null) {
            let {name, phone, email} = info.groups;
            let nameParagraph = document.createElement('p');
            nameParagraph.textContent = `Name: ${name}`;
            let phoneParagraph = document.createElement('p');
            phoneParagraph.textContent = `Phone Number: ${phone}`;
            let emailParagraph = document.createElement('p');
            emailParagraph.textContent = `Email: ${email}`;
            let endParagraph = document.createElement('p');
            endParagraph.textContent = '- - -';
            result.appendChild(nameParagraph);
            result.appendChild(phoneParagraph);
            result.appendChild(emailParagraph);
            result.appendChild(endParagraph);
        } else {
            let invalidDataParagraph = document.createElement('p');
            invalidDataParagraph.textContent = 'Invalid data';
            result.appendChild(invalidDataParagraph);
            let endParagraph = document.createElement('p');
            endParagraph.textContent = '- - -';
            result.appendChild(endParagraph);
        }
    });
}