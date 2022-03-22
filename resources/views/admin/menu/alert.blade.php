@if(Session::has('successful'))
    <div id="success" class="alert alert-success text-center w-100" style="font-size: 20px; height: 45px;" >{{ Session::get('successful') }}</div>
    <script>
        var success = document.getElementById("success");
        console.log(success);
        setTimeout(() => {
            success.style.display = "none";
        }, 3000);
    </script>
@endif

@if(Session::has('error'))
    <div id="error" class="alert alert-danger text-center" style="width: 85%; font-size: 20px; height: 45px;" >{{ Session::get('error') }}</div>
    <script>
        var error = document.getElementById("error");
        console.log(error);
    </script>
@endif