/**********************************************************************
DHTML CALENDAR CONTROL
copyright (c) 1999-2001 The Ashley Group, Ltd.
ALL RIGHTS RESERVED
**********************************************************************

Created By:     Patrick Milliken
Creation Date:  1/31/99

Purpose:        This control is only available to MSIE 4.x clients and
                above. It is called by forms containing date controls.
                When a user clicks on a date, the calendar is closed and
                the date is inserted into the specified control.

Modified By:    Patrick Milliken
Last Mod Date:  6/1/01

**********************************************************************/

/*--------------------------------------------------------------
Declare and initialize global variables
----------------------------------------------------------------*/
var strHTML = ""
var thisDate = new Date()
var orgDate = new Date()
var ReturnCntrl = ""

/*--------------------------------------------------------------
When the calendar is called, the calling script creates two
properties on the calling Window: DateVal is the value contained
in the date control the calendar is associated with; ReturnCntrl
is the name of the date control the calendar is associated with.
When the calendar is loaded, these property values are retrieved
and assigned to global variables and the date is set to the first
of the month.
----------------------------------------------------------------*/
function loadCalendar()
	{
	thisDate = new Date(opener.UserDate)
	if (isNaN(thisDate)) thisDate = new Date()
	thisDate.setDate(1)
	
	orgDate = new Date(opener.UserDate)
	if (orgDate.getYear() <= 35)
		{
		thisDate.setFullYear(2000 + orgDate.getYear())
		orgDate.setFullYear(2000 + orgDate.getYear())
		}
	ReturnCntrl = opener.ReturnEl
	showCalendar()
	}

/*--------------------------------------------------------------
Control function
----------------------------------------------------------------*/
function showCalendar()
	{
	strHTML = ""
	doHeader()
	doBody()
	document.all.Calendar.innerHTML = strHTML
	}

/*--------------------------------------------------------------
Build the first three rows 
----------------------------------------------------------------*/
function doHeader()
	{
	theMonth = readMonth(thisDate.getMonth())
	theYear = readYear(thisDate.getYear())
	strHTML += "<table class=tblCal width=80% cellpadding=10 cellspacing=0 style=font-size:1em; >" +
			   "<tr>" +
			   "<td valign=middle align=center colspan=7 class=calendarHeader>" +
			   "<table width=100% border=0 cellpadding=0 cellspacing=0>" +
			   "<tr class=HeaderRow valign=middle>" +
			   "<td align=left width=25><span class=CalCntrl title='Año anterior' onclick='changeYear(-1)'>&lt;&lt;</span></td>" +
			   "<td align=left width=25><span class=CalCntrl title='Mes anterior' onclick='changeMonth(-1)'>&lt;</span></a></td>" +
			   "<td align=center>" + theMonth + " " + theYear + "</td>" +
			   "<td align=right width=25><span class=CalCntrl title='Fecha original' onclick='showToday()'>^</span></td>" +
			   "<td align=right width=25><span class=CalCntrl title='Mes siguiente' onclick='changeMonth(1)'>&gt;</span></td>" +
			   "<td align=right width=25><span class=CalCntrl title='Año siguiente' onclick='changeYear(1)'>&gt;&gt;</span></td>" +
			   "</tr></table></td></tr>" +
			   "<tr valign=middle align=center class=WeekDays style=border-bottom: solid 2px #999>" +
			   "<td>D</td><td>L</td><td>M</td><td>M</td>" +
			   "<td>J</td><td>V</td><td>S</td></tr>"
	}

/*--------------------------------------------------------------
Build the calendar's body
----------------------------------------------------------------*/
function doBody()
	{
	loadArray()
	strHTML += "<tr class=BodyRow valign=middle align=center>"
	for (x = 1; x <= 35; x++)
		{
		isToday = false
		if (orgDate.getYear() == thisDate.getYear())
			if (orgDate.getMonth() == thisDate.getMonth())
				if (orgDate.getDate() == theDay[x])
					isToday = true
		if (! isNaN(theDay[x]))
			{
			if (isToday)
				{
				strHTML += "<td class=DayCell2 width=55>"
				}
			else
				{
				strHTML += "<td class=DayCell width=55 onclick='returnDate(" + theDay[x] + ")' " +
						   "onmouseover='doMouseOver()' onmouseout='doMouseOut()'>"
				}
			}
		else
			{
			strHTML += "<td class=DayCell width=35 style='cursor:default'>"
			}
		strHTML += theDay[x] + "</td>"
		if (x % 7 == 0 && x != 35)
			{
			strHTML += "</tr><tr class=BodyRow valign=middle align=center>"
			}
		}
	/*strHTML += "</tr>"
		+ "<tr><td colspan=7 align=center><a href='http://www.ashleygrp.com' target='_blank'>"
		+ "<i><font size=1 face='Verdana,Arial,sans-serif'>&copy;1999-2000 The Ashley "
		+ "Group, Ltd.</font></i></a></td></tr></table>"*/
	strHTML += "</tr></table>";
	}

/*--------------------------------------------------------------
Build an array containing the sequential values for the 35-cell
calendar grid based on the current date
----------------------------------------------------------------*/
function loadArray()
	{
	theDay = new Array()
	offset = thisDate.getDay()
	LastDay = readLastDay()
	for (x = 1; x <= 35; x++)
		{
		DayVal = x - offset
		if (DayVal < 1)
			{
			if (LastDay >= 35 + DayVal)
				theDay[x] = 35 + DayVal
			else
				theDay[x] = "&nbsp;"
			}
		else if (DayVal > LastDay)
			theDay[x] = "&nbsp;"
		else
			theDay[x] = DayVal
		}
	}

/*--------------------------------------------------------------
Inset the current cell on mouse over
----------------------------------------------------------------*/
function doMouseOver()
	{
	el = event.srcElement
	el.style.borderLeftColor = "white"
	el.style.borderTopColor = "white"
	el.style.borderRightColor = "white"
	el.style.borderBottomColor = "white"
	el.style.backgroundColor = "#fed136"	
	}

/*--------------------------------------------------------------
Return the current cell to its original state on mouse out
----------------------------------------------------------------*/
function doMouseOut()
	{
	el = event.srcElement
	el.style.borderLeftColor = "white"
	el.style.borderTopColor = "white"
	el.style.borderRightColor = "white"
	el.style.borderBottomColor = "white"
	el.style.backgroundColor = "white"		
	}

/*--------------------------------------------------------------
When the user clicks on a date in the calendar, concatenate the
selected date, place it in the associated date control on the
calling form, and close the calendar
----------------------------------------------------------------*/
function returnDate(DayVal)
	{
	tmpYr = thisDate.getYear()
	if (tmpYr >= 2000)
		tmpYr -= 2000
	if (tmpYr < 10)
		tmpYr = "0" + tmpYr
	//tmpVal = ((thisDate.getMonth() < 9) ? "0" + (thisDate.getMonth() + 1) : thisDate.getMonth() + 1)
	//	+ "/" + ((DayVal < 10) ? "0" + DayVal : DayVal) + "/" + thisDate.getFullYear()
	//tmpVal = thisDate.getFullYear() + "-" + ((thisDate.getMonth() < 9) ? "0" + (thisDate.getMonth() + 1) : thisDate.getMonth() + 1)
	//+ "-" + ((DayVal < 10) ? "0" + DayVal : DayVal)
	
	tmpVal =   ((DayVal < 10) ? "0" + DayVal : DayVal) + "-" + 
	((thisDate.getMonth() < 9) ? "0" + (thisDate.getMonth() + 1) : thisDate.getMonth() + 1) + "-" + thisDate.getFullYear()
	
	//opener.document.all.item(ReturnCntrl).value = englishToSpanishDate(tmpVal);
	opener.document.all.item(ReturnCntrl).value = tmpVal;
	//opener.document.all.item(ReturnCntrl).focus()
	opener
	opener.nWin = ""
	window.close()
}

function englishToSpanishDate(v)
{
	var date = v;
	var year = date.substring(6,10);
	var month = date.substring(0,2);
	var day = date.substring(3,5);
	return day + "/" + month + "/" + year;
}

/*--------------------------------------------------------------
Return to the original date
----------------------------------------------------------------*/
function showToday()
	{
	if (! isNaN(orgDate))
		thisDate = new Date(orgDate)
	else
		thisDate = new Date()	
	thisDate.setDate(1)
	showCalendar()
	}

/*--------------------------------------------------------------
Increment or decrement the month based on the control click
----------------------------------------------------------------*/
function changeMonth(offset)
	{
	thisDate.setMonth(thisDate.getMonth() + offset)
	showCalendar()
	}

/*--------------------------------------------------------------
Increment or decrement the year based on the control click
----------------------------------------------------------------*/
function changeYear(offset)
	{
	thisDate.setFullYear(readYear(thisDate.getYear()) + offset)
	showCalendar()
	}

/*--------------------------------------------------------------
Return the name of the month based on the index passed in
----------------------------------------------------------------*/
function readMonth(MoVal)
	{
	Month = new Array();
	Month[0] = "Enero";
	Month[1] = "Febrero";
	Month[2] = "Marzo";
	Month[3] = "Abril";
	Month[4] = "Mayo";
	Month[5] = "Junio";
	Month[6] = "Julio";
	Month[7] = "Agosto";
	Month[8] = "Septiembre";
	Month[9] = "Octubre";
	Month[10] = "Noviembre";
	Month[11] = "Diciembre";
	return(Month[MoVal]);
	}

/*--------------------------------------------------------------
Return the four digit value of the year based on the year value
passed in
----------------------------------------------------------------*/
function readYear(YrVal)
	{
	Cent = ""
	if (YrVal < 1000) YrVal += 1900
	if (YrVal < 100) Cent = "19"
	if (YrVal < 50) Cent = "20"
	if (YrVal < 10) Cent = "200"
	return(parseInt(Cent + YrVal))
	}

/*--------------------------------------------------------------
Return the last day of the month based on the month of the 
current date
----------------------------------------------------------------*/
function readLastDay()
	{
	MoVal = thisDate.getMonth() + 1
	YrVal = readYear(thisDate.getYear())
	tmpVal = 31
	if (MoVal == 4 || MoVal == 6 || MoVal == 9 || MoVal == 11)
		{
		tmpVal = 30
		}
	else if (MoVal == 2)
		{
		tmpVal = 28
		if (YrVal % 4 == 0)
			{
			if (YrVal % 100 > 0 || (YrVal % 100 == 0 && YrVal % 400 == 0))
				{
				tmpVal = 29
				}
			}
		}
	return(tmpVal)
	}

