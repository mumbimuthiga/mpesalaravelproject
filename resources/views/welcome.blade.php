<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}">  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <title>Laravel Daraja API</title>
</head>
<body>
    <div class="container">
       <div class="row mt-5">
        <div class="col-sm-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    Obtain Access Token
                </div>
                <div class="card-body">
                    <button id="getAccessToken" class="btn btn-primary">Request Access Token</button>
                </div>
            </div>
            <div class="card mt-5">
                <div class="div card-header">
                    Register URLS
                </div>
                <div class="card-body">
                <button class="btn btn-primary">Register URLS</button>
                </div>
            </div>

            <div class="card mt-5">
                <div class="div card-header">
                    Simulate Transactions
                </div>
                <div class="card-body">
                    <form action="">
                        @csrf
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="number" name="amount" class="form-control" id="amount">
                        </div>
                        <div class="form-group">
                            <label for="amount">Account</label>
                            <input type="number" name="account" class="form-control" id="account">
                        </div>
                        <br>
                        <button class="btn btn-primary">Simulate Payment</button>
                    </form>
              
                </div>
            </div>

        </div>

       </div>
    </div> 
   
   
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        document.getElementById("getAccessToken").addEventListener('click',(event)=>{
            event.preventDefault();
            axios.post('/get-token' ,{})
            .then((response)=>{
                console.log(response)
            })
            .catch((error)=>{
                console.log(error)
            })

        });
    </script>

</body>
</html>