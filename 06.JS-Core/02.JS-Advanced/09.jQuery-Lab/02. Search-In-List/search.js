function search() {
    // $('#towns li').css('font-weight', 'normal');
    // let searchFor = $('#searchText').val();
    // let arr = $('#towns li');
    //
    // let count = 0;
    //
    // for (let i = 0; i < arr.length; i++) {
    //     if(arr[i].textContent.includes(searchFor) && searchFor !== '') {
    //         arr[i].style.fontWeight = 900;
    //         count++;
    //     }
    // }
    //
    // $('#result').text(`${count} matches found`);

    $('#towns li').css('font-weight', 'normal');

    let searchTerm = $('#searchText').val();

    let count = $('#towns li')
        .filter((index, elem) => {
            return elem.textContent.indexOf(searchTerm) > -1;
        }).css('font-weight', 'bold');

    $('#result').text(`${count.length} matches found.`);

}