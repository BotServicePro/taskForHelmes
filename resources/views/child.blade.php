@if($sessionData['sectors'] !== null && in_array($sector['id'], $sessionData['sectors']))
        <option value="{{ $sector['id'] }}" selected>{!! str_repeat("&nbsp;", $sector['depth']) . $sector['name'] !!}</option>
@else
        f<option value="{{ $sector['id'] }}">{!! str_repeat("&nbsp;", $sector['depth']) . $sector['name'] !!}</option>
@endif

@if (count($sector['children']) > 0) 
	@foreach($sector['children'] as $sector)
	        @include('child', $sector)
	@endforeach
@endif
