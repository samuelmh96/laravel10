@if($message = Session::get('success'))
    <div class="alert success">
        <p>{{ $message }}</p>
    </div>    
@endif

@if($message = Session::get('danger'))
    <div class="alert danger">
        <p>{{ $message }}</p>
    </div>    
@endif