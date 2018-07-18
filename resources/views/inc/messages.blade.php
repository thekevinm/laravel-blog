@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" style="margin-top:75px;">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
        <div class="alert alert-success" style="margin-left: 10%; position:absolute;">
            {{session('success')}}
        </div>
@endif

@if(session('error'))
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
@endif