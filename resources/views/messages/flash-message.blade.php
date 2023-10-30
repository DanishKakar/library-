
{{-- for succes message  --}}
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block" style="font-size: 20px">
        <button class="close" type="button" data-dismiss="alert">X</button>
        <strong>{{ $message}}</strong>
    </div>
@endif
{{-- for error message --}}
@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block" style="font-size: 20px">
        <button class="close" type="button" data-dismiss="alert">X</button>
        <strong>{{ $message}}</strong>
    </div>
@endif
{{-- for warning message --}}
@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block" style="font-size: 20px">
        <button class="close" type="button" data-dismiss="alert">X</button>
        <strong>{{ $message}}</strong>
    </div>
@endif
{{-- for info message --}}
@if ($message = Session::get('info'))
    <div class="alert alert-info alert-block" style="font-size: 20px">
        <button class="close" type="button" data-dismiss="alert">X</button>
        <strong>{{ $message}}</strong>
    </div>
@endif
