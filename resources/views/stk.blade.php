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
           <div class="card mt-5">
                <div class="div card-header">
                    Stk Transactions
                </div>
                <div class="card-body">
                    <form action="">
                        @csrf
                        <div class="form-group">
                            <label for="amount">Phone Number</label>
                            <input type="number" name="phone" class="form-control" id="phone">
                        </div>
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
   
   
   

</body>
</html>