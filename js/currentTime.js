function showTime(){
    var m_names = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var d_names = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

    var currentTime = new Date();
    var day = currentTime.getDay();
    var month = currentTime.getMonth() + 1;
    var date = currentTime.getDate();
    var year = currentTime.getFullYear();

    var showDate=d_names[day] + ", " + date + " " + m_names[month] + " " + year + ", ";
    currentTime = new Date();
    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    if (minutes < 10){
        minutes = "0" + minutes
    }
    var showTime=hours + ":" + minutes +" ";
    var showAPM=null;
    if(hours > 11){
        showAPM="PM";
    } else {
        showAPM="AM";
    }

    document.getElementById("currentTime").innerHTML=showDate+showTime+showAPM;

}

