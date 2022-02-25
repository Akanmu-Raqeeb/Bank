<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>USER LOGIN PAGE</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('/bootstrap.css')}}">


    <!-- Styles -->
    <style lang="scss">
        body {
            font-family: 'Futura Md';
        }

        html,
        body {
            margin: 0px;
            padding: 0px;
        }

       

        .body {
            width: 100%;
        }

        .left button {
            /* border-radius: 25px; */
            font-size: 14px;
            width: 120px;
            height: 50px;
            font-weight: bold;
            box-shadow: 0px 0px 1px black;
            margin-right: 40px;
        }

        .btn-dark:hover {
            background-color: transparent !important;
            border: 1px solid #dc3545 !important;
        }

        .btn-dark a {
            text-decoration: none;
            color: white;
        }

        .btn-dark:hover a {
            text-decoration: none;
            color: black;
        }

        .btn-danger a {
            text-decoration: none;
            color: black
        }

        .btn-danger:hover {
            background-color: transparent !important;
            border: 1px solid #007bff !important;
            color: black !important;
        }

        .btn-danger:hover a {
            color: black
        }

        .right h2 {
            margin-top: -15px;
        }

        .body {
            width: 100%;
            height: 100vh;
        }

        .body .word{
            margin-top: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .body .word p{
           font-size: 23px;
        }

        .body .content {
            height: 56vh;
            background-color: transparent;
            margin-left: 36%;
            margin-top: -20px;
            padding: 30px;
            padding-top:50px; 
            font-size: 17px;
        }
        .adjust{
            margin-top: 100px !important
        }

        .body .content p {
            text-decoration: underline
        }

        .body #completeReg {
            display: block;
            background-color: white;
            width: 30%;
            position: relative;
        }

        .body #completeReg span {
            font-weight: bold;
        }

        .body #completeReg input {
            outline: none;
            width: 100%;
            padding: 4px;
            margin-right: 43px;
            border: none;
            border-bottom: 2px solid red;
            margin-bottom: 30px;
        }
      
        .body #courseReg span {
            font-weight: bold;
        }
      
        .body #mycourse {
            margin-bottom: 40px;
        }

        .body #courseReg input {
            outline: none;
            width: 600px;
            padding: 4px;
            margin-right: 43px;
            border: none;
            border-bottom: 2px solid red;
        }

        @media(max-width:915px){
        .body .word p{
           font-size: 20px;
           width: 80%;
           margin-left: 60px;

        }
        .body .content {
            margin-left: 20%;
            height: 350px;
        }
        .card{
            min-width: 60%;
            height: 600px;
            margin-left: 0%;
        }
        }
        @media(max-width:896px){
        .body .word p{
           font-size: 20px;
           width: 80%;
           margin-left: 60px;

        }
        .body .content {
            margin-left: 20%;
            height: 350px;
        }
        .card{
            min-width: 60%;
            height: 600px;
            margin-left: 0%;
        }
        }
        @media(max-width:700px){
        .body .word p{
           font-size: 20px;
           width: 80%;
           margin-left: 60px;

        }
        .body .content {
            margin-left: 20%;
            height: 350px;
        }
        .card{
            min-width: 60%;
            height: 600px;
            margin-left: 0%;
        }
        }
        @media(max-width:414px){
        .body .word p{
           font-size: 20px;
           width: 100%;
           margin-left: 0px;
        }
        .body .content {
            margin-left: 0%;
        }
        .card{
            min-width: 100%;
            margin-left: 0%;
        }
        }
        @media(max-width:375px){
        .body .word p{
           font-size: 17px;
           width: 100%;
           margin-left: 0px;
        }
        .card{
            min-width: 100%;
            margin-left: 0%;
        }
        }

     

    </style>
</head>
<body>
    <main>
        <main>
            <div class="body">
                <div class="word p-4">
                    <p>Remember to access your page with correct information</p>
                </div>
        <form action="{{url('user/')}}" method="post" id="completeReg" class="content card">
                            <div>
                                <span>Email:</span>
                                <div>
                                    @error('email')
                                    <div>
                                    <small class="text-danger">{{$message}}</small>
                                  </div>
                                    @enderror
                                    @if ($u=Session::get('error'))
                                    <span class="text-danger">{{$u}}</span>
                                    @endif
                                    <input id="profilepic"  type="text" value="{{old('email')}}" name="email"
                                    class="{{$errors->has('profilepic') ? 'is-inavlid' : '' }}">
                                </div>
                            </div>
                            <div>
                                <span>Password:</span>
                                <div>
                                    @error('password')
                                    <div>
                                    <small class="text-danger">{{$message}}</small>
                                  </div>
                                    @enderror
                                    @if ($u=Session::get('error'))
                                    <span class="text-danger">{{$u}}</span>
                                    @endif
                                    <input id="profilepic"  type="text" value="{{old('password')}}" name="password"
                                    class="{{$errors->has('password') ? 'is-inavlid' : '' }}">
                                </div>
                            </div>
                            @csrf
                            <div class="text-center">
                                <button id="complete" class="btn btn-warning">Login</button>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <a href="" class="text-dark">Forgot Password</a> 
                            </div>

                        </form> 
            </div>
            </div>
        </main>
    </main>
</body>
</html>
<script>
    
</script>
