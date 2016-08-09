@if(count($errors)>0)
    <div class="row alert alert-danger error" role="alert">
        <div class="col-md-6 col-md--offset-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>

@endif
@if(Session::has('message'))
    <div class="row alert alert-success success" role="alert">
        <div class="col-md-6 col-md--offset-4">
            {{ Session::get('message') }}
        </div>
    </div>
@endif