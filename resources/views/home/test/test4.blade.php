id&emsp;&emsp;name&emsp;&emsp;email<br/>
@foreach($data as $key=>$value)
	{{$value->id}}&emsp;&emsp;{{$value->name}}&emsp;&emsp;{{$value->email}}<br/>
@endforeach
