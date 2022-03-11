@if(Session::has('error'))
    <div class="alert alert-danger d-flex justify-content-center align-items-center" style="width: 85%; font-size: 20px; height: 45px;" >{{ Session::get('error') }}</div>
@endif