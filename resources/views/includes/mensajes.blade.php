@if ($message = Session::get('success'))
    <div class="row">
        <div class="alert alert-success">
            <p>
                <strong>{{ $message }}</strong>
            </p>
        </div>
    </div>
    @endif
@if(count($errors)>0)
    @foreach($errors->all() as $error)
    <div class="row">
        <div class="alert alert-danger">
            <p>
                <strong>{{ $error }}</strong>
            </p>
        </div>
    </div>
    @endforeach
@endif