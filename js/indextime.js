/* $Id : lefttime.js 4865 2007-01-31 14:04:10Z paulgao $ */

/* *
 * 给定一个剩余时间（s）动态显示一个剩余时间.
 * 当大于一天时。只显示还剩几天。小于一天时显示剩余多少小时，多少分钟，多少秒。秒数每秒减1 *
 */

// 初始化变量
var _GMTEndTime = 0;
var _GMTEndTime = 0;

var _day = 'day';
var _hour = 'hour';
var _minute = 'minute';
var _second = 'second';
var _end = 'end';

var cur_date = new Date();
var startTime = cur_date.getTime();
var Temp;
var timerID = null;
var timerRunning = false;

  var auctionDates = new Array();

function stat(auctionDate)
{
  now = new Date();
  var ts = parseInt((startTime - now.getTime()) / 1000) + auctionDate;
  var dateLeft = 0;
  var hourLeft = 0;
  var minuteLeft = 0;
  var secondLeft = 0;
  var hourZero = '';
  var minuteZero = '';
  var secondZero = '';
  if (ts < 0)
  {
    ts = 0;
    CurHour = 0;
    CurMinute = 0;
    CurSecond = 0;
  }
  else
  {
    dateLeft = parseInt(ts / 86400);
    ts = ts - dateLeft * 86400;
    hourLeft = parseInt(ts / 3600);
    ts = ts - hourLeft * 3600;
    minuteLeft = parseInt(ts / 60);
    secondLeft = ts - minuteLeft * 60;
  }

  if (hourLeft < 10)
  {
    hourZero = '0';
  }
  if (minuteLeft < 10)
  {
    minuteZero = '0';
  }
  if (secondLeft < 10)
  {
    secondZero = '0';
  }
  if (dateLeft > 0)
  {
    Temp = dateLeft + _day + hourZero + hourLeft + _hour + minuteZero + minuteLeft + _minute + secondZero + secondLeft + _second;
  }
  else
  {
    if (hourLeft > 0)
    {
      Temp = hourLeft + _hour + minuteZero + minuteLeft + _minute + secondZero + secondLeft + _second;
    }
    else
    {
      if (minuteLeft > 0)
      {
        Temp = minuteLeft + _minute + secondZero + secondLeft + _second;
      }
      else
      {
        if (secondLeft > 0)
        {
          Temp = secondLeft + _second;
        }
        else
        {
          Temp = '';
        }
      }
    }
  }

  if (auctionDate <= 0 || Temp == '')
  {
    Temp = "<strong>" + _end + "</strong>";
    stopclock();
  }
  return Temp;
}

function showtime()
{
	var auctionDate = 0;
	for (i = 0; i < auctionDates.length; i++)
	{
		auctionDate = auctionDates[i];
		Temp = stat(auctionDate);
		if (document.getElementById("leftTime"+i))
		{
			document.getElementById("leftTime"+i).innerHTML = Temp;
		}
	}
	timerID = setTimeout("showtime()", 1000);
	timerRunning = true;
}

var timerID = null;
var timerRunning = false;
function stopclock()
{
  if (timerRunning)
  {
    clearTimeout(timerID);
  }
  timerRunning = false;
}

function macauclock()
{
  stopclock();
  showtime();
}

function onload_leftTime()
{
  /* 第一次运行时初始化语言项目 */
  try
  {
    // 剩余时间
    _day = "<b>" + day + "</b>";
    _hour = "<b>" + hour + "</b>";
    _minute = "<b>" + minute + "</b>";
    _second = "<b>" + second + "</b>";
    _end = "<b>" + end + "</b>";
  }
  catch (e)
  {
  }
	for (i = 0; i < theEndTimes.length; i++)
	{
		if (now_time == undefined)
		{
		  var tmp_val = parseInt(theEndTimes[i]) - parseInt(cur_date.getTime() / 1000 + cur_date.getTimezoneOffset() * 60);
		}
		else
		{
		  var tmp_val = parseInt(theEndTimes[i]) - now_time;
		}
		if (tmp_val > 0)
		{
		  auctionDates[i] = tmp_val;
		}
	}
	//alert(auctionDates.length);
  if (_GMTEndTime > 0)
  {

  }

  macauclock();
  try
  {
    initprovcity();
  }
  catch (e)
  {
  }
}
