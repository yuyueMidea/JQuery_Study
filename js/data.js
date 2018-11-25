(function(){
	var datepicker = {};
	datepicker.getMonthData = function(year,month){
		var ret = [];
		if(!year || !month){
			var today = new Date();
			year = today.getFullYear();
			month = today.getMonth() + 1;
		}	
		var firstDay = new Date(year,month - 1, 1);
		var firstDayWeekday = firstDay.getDay();
		if(firstDayWeekday === 0) firstDayWeekday = 7;
		var lastDayOfLastMonth = new Date(year,month - 1, 0);
		var lastDateOfLastMonth = lastDayOfLastMonth.getDate();

		var prevDay = firstDayWeekday - 1;
		var lastDay = new Date(year, month, 0);
		var lastDate = lastDay.getDate();

		for(var i=0; i<7*6; i++){
			var date = i+1 -prevDay;
			var showDate = date;
			var thisMonth = month;
			if(date <= 0){
				showDate = lastDateOfLastMonth + date;
				thisMonth = month - 1;
			}else if (date > lastDate) {
				showDate = showDate - lastDate;
				thisMonth = month + 1;
			}	
			if(thisMonth ===0) thisMonth = 12;
			if(thisMonth ===13) thisMonth = 1;

			ret.push({
				year: year,
				date: date,
				month: thisMonth,
				showDate: showDate
			})

		}
		return ret;
		
	}


	window.datepicker = datepicker;
})()
