		<!-- For calendar style -->
		<link href='calendar/fullcalendar.css' rel='stylesheet' />
		<link href='calendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
		<script src='calendar/lib/moment.min.js'></script>
		<script src='calendar/fullcalendar.min.js'></script>

<script> 






$(document).ready(function() { 
$('#calendar').fullCalendar({ 
locale:'th', 
header: { 
left: '', 
center: 'prev title next', 
right: '' 
}, 
selectable: true, 
selectHelper: true, 
editable: false, 
/*eventClick: function(event, jsEvent, view) { 
$('#modalTitle').html(event.title); 
$('#modalBody').html(event.description); 
if(event.url){ 
$('#eventUrl').attr('href',event.url); 
}else{ 
//$('#eventUrl').attr('href',event.url); 
$('#eventUrl').attr("style", "display:none"); 
} 
$('#fullCalModal').modal(); 
return false; 
},*/ 
events: { 
url: 'calendar_events.php?gData=1', 
error: function() { 

} 
}, 


}); 
}); 




</script>		
		
		
<script>


	/*$(document).ready(function() {

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listYear'
			},
			defaultDate: '2017-12-12',
			navLinks: true, // can click day/week names to navigate views
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'นับถอยหลังเที่ยวงาน มหกรรมเปิดโลกธรณีวิทยาเพื่อการท่องเที่ยวครั้งที่ 3',
                    url:'caldr_view.php',
					start: '2017-12-01'
				},
				{
					title: 'นับถอยหลังเที่ยวงาน มหกรรมเปิดโลกธรณีวิทยาเพื่อการท่องเที่ยวครั้งที่ 3',
                    url:'caldr_view.php',
					start: '2017-12-07',
					end: '2017-12-10'
				},
				{
					id: 999,
					title: 'นับถอยหลังเที่ยวงาน มหกรรมเปิดโลกธรณีวิทยาเพื่อการท่องเที่ยวครั้งที่ 3',
                    url:'caldr_view.php',
					start: '2017-12-09T16:00:00'
				},
				{
					id: 999,
					title: 'นับถอยหลังเที่ยวงาน มหกรรมเปิดโลกธรณีวิทยาเพื่อการท่องเที่ยวครั้งที่ 3',
                    url:'caldr_view.php',
					start: '2017-12-16T16:00:00'
				},
				{
					title: 'นับถอยหลังเที่ยวงาน มหกรรมเปิดโลกธรณีวิทยาเพื่อการท่องเที่ยวครั้งที่ 3',
                    url:'caldr_view.php',
					start: '2017-12-11',
					end: '2017-12-13'
				},
				{
					title: 'นับถอยหลังเที่ยวงาน มหกรรมเปิดโลกธรณีวิทยาเพื่อการท่องเที่ยวครั้งที่ 3',
                    url:'caldr_view.php',
					start: '2017-12-12T10:30:00',
					end: '2017-12-12T12:30:00'
				},
				{
					title: 'นับถอยหลังเที่ยวงาน มหกรรมเปิดโลกธรณีวิทยาเพื่อการท่องเที่ยวครั้งที่ 3',
                    url:'caldr_view.php',
					start: '2017-12-12T12:00:00'
				},
				{
					title: 'นับถอยหลังเที่ยวงาน มหกรรมเปิดโลกธรณีวิทยาเพื่อการท่องเที่ยวครั้งที่ 3',
                    url:'caldr_view.php',
					start: '2017-12-12T14:30:00'
				},
				{
					title: 'นับถอยหลังเที่ยวงาน มหกรรมเปิดโลกธรณีวิทยาเพื่อการท่องเที่ยวครั้งที่ 3',
                    url:'caldr_view.php',
					start: '2017-12-12T17:30:00'
				},
				{
					title: 'นับถอยหลังเที่ยวงาน มหกรรมเปิดโลกธรณีวิทยาเพื่อการท่องเที่ยวครั้งที่ 3',
                    url:'caldr_view.php',
					start: '2017-12-12T20:00:00'
				},
				{
					title: 'นับถอยหลังเที่ยวงาน มหกรรมเปิดโลกธรณีวิทยาเพื่อการท่องเที่ยวครั้งที่ 3',
                    url:'caldr_view.php',
					start: '2017-12-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2017-12-28'
				}
			]
		});

	});*/

</script>
