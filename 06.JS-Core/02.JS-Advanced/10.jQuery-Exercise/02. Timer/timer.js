function timer() {
    let seconds = $('#seconds');
    let minutes = $('#minutes');
    let hours = $('#hours');
    let isTicking = false;

    let timer;

    $('#start-timer').on('click', function () {
        if(!isTicking) {
            timer = setInterval(secondsUpdate, 1);
            isTicking = true;
        }
    });

    $('#stop-timer').on('click', stopTimer);

    function stopTimer() {
        clearInterval(timer);
        isTicking = false;
    }

    function secondsUpdate() {
        let secs = +seconds.text() + 1;
        if(secs < 10) {
            seconds.text(`0${secs}`);
        } else if(secs >= 60) {
            seconds.text(`00`);
            minutesUpdate();
        } else {
            seconds.text(secs);
        }
    }

    function minutesUpdate() {
        let mins = +minutes.text() + 1;
        if(mins < 10) {
            minutes.text(`0${mins}`);
        } else if(mins >= 60) {
            minutes.text(`00`);
            hoursUpdate();
        } else {
            minutes.text(mins);
        }
    }

    function hoursUpdate() {
        let hr = +hours.text() + 1;
        if(hr < 10) {
            hours.text(`0${hr}`);
        } else if(hr >= 24) {
            hours.text(`00`);
        } else {
            hours.text(hr);
        }
    }
}