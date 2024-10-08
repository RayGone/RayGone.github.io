
function dateDifference(Date1,Date2){
    var dateFirst = new Date(Date1)
    dateFirst = new Date(dateFirst.getFullYear(),dateFirst.getMonth(),dateFirst.getDate())
    var dateSecond = new Date(Date2)
    dateSecond = new Date(dateSecond.getFullYear(),dateSecond.getMonth(),dateSecond.getDate())

    // time difference
    var timeDiff = Math.abs(dateSecond.getTime() - dateFirst.getTime());
    // days difference
    var diffDays = Math.floor(timeDiff / (1000 * 3600 * 24));
    return diffDays;
}

function timeDifferenceMS(Date1,Date2){
    var dateFirst = new Date(Date1)
    var dateSecond = new Date(Date2)

    // time difference
    var timeDiff = Math.abs(dateSecond.getTime() - dateFirst.getTime());
    return timeDiff;
}

function dateCompare(Date1,Date2){
    var dateFirst = new Date(Date1)
    var dateSecond = new Date(Date2)

    // time difference
    var timeDiff = dateSecond.getTime() - dateFirst.getTime();

    if(timeDiff > 0){
        return "<"
    } else if(timeDiff < 0){
        return ">"
    } else {
        return "="
    }
}
