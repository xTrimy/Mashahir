import Calendar from "color-calendar";
import "../css/calendar.css";

var calendar_element = document.getElementById('calendar');
if(calendar_element){
    new Calendar({
    id: "#calendar",
    calendarSize: "large",
    });  
}