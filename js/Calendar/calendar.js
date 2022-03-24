var nWin = "";

function showCalendar(name) {
	Height = 310;
	Width = 310;
	Top = 100;
	Left = 100;
	el = document.form1.elements[name];
	UserDate = el.value;
	ReturnEl = name;
	if (nWin == "") {
		nWin = window.open("js/Calendar/cal_dhtml.htm", "Calendar", "height=" + Height + ",width=" + Width + ",top=" + Top + ",left=" + Left + ",status=no,toolbar=no,menubar=no," + "location=no,resizable=no,scrollbars=no");
		nWin.opener = window;
	} else {
		CloseNWin();
		showCalendar(name);
	}
}
function CloseNWin() {
	if (nWin != "") {
		nWin.close();
		nWin = "";
	}
}