@if($message=Session::get("success"))
    <div style="padding: 15px; background-color: green; color:#fff">
        <p>{{ $message }}</p>
    </div>
@elseif($message=Session::get("danger"))
    <div style="padding: 15px; background-color: red; color:#fff">
        <p>{{ $message }}</p>
    </div>
@endif