现在是:{{$date}},今天是星期
@if($day=='1')
一
@elseif($day=='2')
二
@elseif($day=='3')
三
@elseif($day=='4')
四
@elseif($day=='5')
五
@elseif($day=='6')
六
@else
日
@endif<br/>
{{date('Y-m-d H:i:s',$time)}}