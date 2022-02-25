<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN DASHBOARD</title>

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

        .header {
            width: 100%;
            height: 60px;
            background-color: white !important;
            justify-content: space-between;
            align-items: center;
            display: flex;
            color: black;
            box-shadow: 0px 0px 4px black;
            padding-left: 50px;
            padding-right: 50px;
            position: fixed;
            top: 0px;
            z-index: 7000;
        }

        .header .right i {
                display: none;
            }

        .body {
            width: 100%;
        }

        .body img {
            width: 100%;
            margin-top: -150px;
        }

     

        .left button {
            /* border-radius: 25px; */
            font-size: 14px;
            width: 120px;
            height: 40px;
            font-weight: bold;
            box-shadow: 0px 0px 1px black;
            margin-right: 40px;
        }

        #profil{
            border: 2px solid #ffc107;
            width: 100px;
            height: 100px;
            border-radius: 100%;
            position: absolute;
            top: 250px;
            right: 70px;
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
            color: white;
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

        .body .menu {
            height: 100vh;
            width: 250px;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            position: fixed;
            left: 0px;
            top: 60px;
            padding-top: 20px;
            padding-left: 30px
        }

        .body .menu button {
            margin-bottom: 30px;
            margin-top: 20px;
            background-color: transparent;
            outline: none;
            border: 0px;
            font-family: "Futura Md";
            font-size: 18px;
            font-weight: bold;
        }

      

        .body .menu2 {
            height: 100vh;
            width: 250px;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            position: fixed;
            left: 0px;
            top: 60px;
            z-index: 9000;
            padding-top: 20px;
            padding-left: 30px
        }
        .body .menu2 button {
            margin-bottom: 22px;
            margin-top: 20px;
            background-color: transparent;
            outline: none;
            border: 0px;
            font-family: "Futura Md";
            font-size: 18px;
            font-weight: bold;
      
        }

         .cabinet{
            height: 74vh;
            width: 30%;
            background-color: white;
            /* box-shadow: 0px 0px 1px black; */
            margin-left: 40%;
            margin-top: 100px;
            position: relative;
            padding: 30px;
            padding-top:50px; 
            font-size: 17px;
         }
         .cabinet input{
            outline: none;
            width: 100%;
            padding: 4px;
            margin-right: 43px;
            border: none;
            border-bottom: 2px solid red;
            margin-bottom: 25px;
            
         }

        .body .content p {
            text-decoration: underline
        }

        /* .body #completeReg {
            display: block;
            background-color: white;
            width: 30%;
            box-shadow: 0px 0px 4px black;
            position: relative;
        } */

        .cabinet span {
            font-weight: bold;
        }

        .menu button a {
            text-decoration: none;
            color: black;
        }
        .menu2 button a {
            text-decoration: none;
            color: black;
        }
        

        @media(max-width:915px){
            .body .menu {
               overflow-y: scroll
            }
            .body .menu button{
            margin-top: 10px;
              margin-bottom: 50px;
            }
            .body #completeReg input {
            width: 350px;
           
        }
        .card{
            width: 50%;
            height: 450px;
        }
        }

        @media(max-width:912px){
            .header {
                padding-left: 60px;
                padding-right: 60px;
            }

            .header .left {
                display: none;
            }

            .header .right {
                width: 100%;
                margin-top: 30px;
            }

            .header .right h2 {
                width: 100%;
                font-size: 23px;
                margin-top: -15px !important;
            }

            .header .right i {
                margin-top: -18px;
                font-size: 33px;
            }

            .body .menu {
                display: none;
            }

            .body .menu2 {
                height: 100vh;
                width: 350px;
            }
            .body .menu2 button{
                margin-top: 35px;
                margin-bottom: 35px;
            }
            .body .menu2 a {
                font-size: 28px;
            }
            .header .right i {
                display: inherit;
            }
            .body .content {
            width: 100%;
            height: 100%;
            background-color: transparent;
            margin-left: 0px;
            position: absolute;
            top: 0px;
            padding: 20px;
            font-size: 23px;
            text-align: justify;
        }
        .card{
            width: 50%;
            height: 450px;
            margin-left: 250px;
        }
        .body .content .picture {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .body .content .picture div {
            width: 250px;
            height: 250px;
            margin-right: 0px;
            margin-bottom: 150px;
            text-align: right;
        }
        }
        @media(max-width:896px) {
            .header {
                padding-left: 60px;
                padding-right: 60px;
            }

            .header .left {
                display: none;
            }

            .header .right {
                width: 100%;
                margin-top: 30px;
            }

            .header .right h2 {
                width: 100%;
                font-size: 23px;
                margin-top: -15px !important;
            }

            .header .right i {
                margin-top: -18px;
                font-size: 33px;
            }

            .body .menu {
                display: none;
            }
            .body .menu2 {
                height: 100vh;
                width: 350px;
                overflow-y: scroll;
            }
            .body .menu2 button{
                margin-top: 17px;
                margin-bottom: 17px;
            }
            .body .menu2 a {
                font-size: 22px;
            }
            .header .right i {
                display: inherit;
            }
            .profile {
            position: absolute;
            right: 20px;
            top: 10px;
        }

        .profile2 {
            position: absolute;
            right: 50px;
            top: 29px;
        }

        .profile2 img {
            width: 60px;
            height: 60px;
            border-radius: 100%;
        }
        .body #completeReg input {
            outline: none;
            width: 350px;
            padding: 4px;
            margin-right: 43px;
            margin-bottom: 20px;
            border: none;
            border-bottom: 2px solid #007bff;
        }
        #complete{
            margin-bottom: 20px;
        }
        .card{
            width: 100%;
            margin-left: 0px;
        }
        }
        @media(max-width:820px){
            .header {
                padding-left: 60px;
                padding-right: 60px;
            }

            .header .left {
                display: none;
            }

            .header .right {
                width: 100%;
                margin-top: 30px;
            }

            .header .right h2 {
                width: 100%;
                font-size: 23px;
            }

            .header .right i {
                margin-top: -18px;
                font-size: 33px;
            }

            .body .menu {
                display: none;
            }
            .header .right i {
                display: inherit;
            }
            .body .content {
            width: 100%;
            height: 100%;
            background-color: transparent;
            margin-left: 0px;
            position: absolute;
            top: 0px;
            padding: 20px;
            font-size: 17px;
            text-align: justify;
        }
        .body .content .picture {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .body .content .picture div {
            width: 250px;
            height: 250px;
            margin-right: 0px;
            margin-bottom: 150px;
            text-align: right;
        }
        .body #completeReg span {
            margin-left: 70px;
        }
        .body #completeReg input {
            outline: none;
            width: 600px;
            padding: 4px;
            margin-left: 70px;
            margin-bottom: 20px;
            border: none;
            border-bottom: 2px solid #007bff;
        }
        #complete{
            margin-bottom: 20px;
        }
        }
      
       

        @media(max-width:700px){
            .header {
                padding-left: 20px;
                padding-right: 20px;
            }

            .header .left {
                display: none;
            }

            .header .right {
                width: 100%;
                margin-top: 30px;
            }

            .header .right h2 {
                width: 100%;
                font-size: 17px;
                margin-top: -15px !important;
            }

            .header .right i {
                margin-top: -18px;
                font-size: 23px;
            }

            .body .menu {
                display: none;
            }
            .body .menu2 {
                height: 100vh;
                width: 100%;
                overflow-y: scroll
            }
            .body .menu2 button{
                margin-top: 15px;
                margin-bottom: 15px;
            }
            .body .menu2 a {
                font-size: 22px;
            }
            .header .right i {
                display: inherit;
            }
            .body .content {
            width: 100%;
            height: 100%;
            background-color: transparent;
            margin-left: 0px;
            position: absolute;
            top: 0px;
            padding: 20px;
            font-size: 17px;
            text-align: justify;
        }
        .card{
            width: 100%;
            margin-left: 5px;
        }
        .body .content .picture {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .body .content .picture div {
            width: 250px;
            height: 250px;
            margin-right: 0px;
            margin-bottom: 150px;
            text-align: right;
        }
        .profile {
            position: absolute;
            right: 20px;
            top: 10px;
        }

        .profile2 {
            position: absolute;
            right: 50px;
            top: 40px;
        }

        .profile2 img {
            width: 60px;
            height: 60px;
            border-radius: 100%;
        }
        .body #completeReg span {
            font-weight: bold;
            margin-left: 40px !important;
        }
        .body #completeReg input {
            outline: none;
            width: 400px;
            padding: 4px;
            margin-left: 40px !important;
            margin-bottom: 20px;
            border: none;
            border-bottom: 2px solid #007bff;
        }
        #complete{
            margin-bottom: 20px;
        }
        }
        
        @media(max-width:540px) {
            .header {
                padding-left: 60px;
                padding-right: 60px;
            }

            .header .left {
                display: none;
            }

            .header .right {
                width: 100%;
                margin-top: 30px;
            }

            .header .right h2 {
                width: 100%;
                font-size: 23px;
            }

            .header .right i {
                margin-top: -18px;
                font-size: 33px;
            }

            .body .menu {
                display: none;
            }
            .body .menu2 {
                height: 100vh;
                width: 350px;
            }
            .body .menu2 button{
                margin-top: 17px;
                margin-bottom: 17px;
            }
            .body .menu2 a {
                font-size: 22px;
            }
            .header .right i {
                display: inherit;
            }
        }
        @media(max-width:414px){
            .header {
                padding-left: 20px;
                padding-right: 20px;
            }

            .header .left {
                display: none;
            }

            .header .right {
                width: 100%;
                margin-top: 30px;
            }

            .header .right h2 {
                width: 100%;
                font-size: 17px;
                margin-top: -15px !important;
            }

            .header .right i {
                margin-top: -18px;
                font-size: 23px;
            }

            .body .menu {
                display: none;
            }
            .body .menu2 {
                height: 100vh;
                width: 100%;
            }
            .body .menu2 button{
                margin-top: 15px;
                margin-bottom: 15px;
            }
            .body .menu2 a {
                font-size: 22px;
            }
            .header .right i {
                display: inherit;
            }
            .body .content {
            width: 100%;
            height: 100%;
            background-color: transparent;
            margin-left: 0px;
            position: absolute;
            top: 0px;
            padding: 20px;
            font-size: 17px;
            text-align: justify;
        }
        .card{
            width: 100%;
            margin-left: 0px;
        }
        .body .content .picture {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .body .content .picture div {
            width: 250px;
            height: 250px;
            margin-right: 0px;
            margin-bottom: 150px;
            text-align: right;
        }
        .profile {
            position: absolute;
            right: 20px;
            top: 10px;
        }

        .profile2 {
            position: absolute;
            right: 50px;
            top: 40px;
        }

        .profile2 img {
            width: 60px;
            height: 60px;
            border-radius: 100%;
        }
        .body #completeReg input {
            outline: none;
            width: 350px;
            padding: 4px;
            margin-left:10px !important;
            margin-bottom: 20px;
            border: none;
            border-bottom: 2px solid #007bff;
        }
        #complete{
            margin-bottom: 20px;
        }
        .body #completeReg span {
            margin-left: 10px !important;
        }
        }
        @media(max-width:375px){
            .header {
                padding-left: 20px;
                padding-right: 20px;
            }

            .header .left {
                display: none;
            }

            .header .right {
                width: 100%;
                margin-top: 30px;
            }

            .header .right h2 {
                width: 100%;
                font-size: 17px;
            }

            .header .right i {
                margin-top: -18px;
                font-size: 23px;
            }

            .body .menu {
                display: none;
            }
            .body .menu2 {
                height: 100vh;
                width: 100%;
            }
            .body .menu2 button{
                margin-top: 15px;
                margin-bottom: 15px;
            }
            .body .menu2 a {
                font-size: 22px;
            }
            .header .right i {
                display: inherit;
            }
            .body .content {
            width: 100%;
            height: 100%;
            background-color: transparent;
            margin-left: -90px;
            position: absolute;
            top: 0px;
            padding: 20px;
            font-size: 17px;
            text-align: justify;
        }
        .card{
            min-width: 100%;
            margin-left: 5px;
        }
        .body .content .picture {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .body .content .picture div {
            width: 250px;
            height: 250px;
            margin-right: 0px;
            margin-bottom: 150px;
            text-align: right;
        }
        .profile {
            position: absolute;
            right: -80px;
            top: 10px;
        }

        .profile2 {
            position: absolute;
            right: -50px;
            top: 40px;
        }

        .profile2 img {
            width: 60px;
            height: 60px;
            border-radius: 100%;
        }

        .body #completeReg span {
            margin-left: 100px !important;
        }

        .body #completeReg input {
            outline: none;
            width: 300px;
            padding: 4px;
            margin-left: 100px !important;
            margin-bottom: 20px;
            border: none;
            border-bottom: 2px solid #007bff;
        }
        #complete{
            margin-bottom: 20px;
            margin-left: 130px;
        }
        }
        @media(max-width:280px){
            .header {
                padding-left: 20px;
                padding-right: 20px;
            }

            .header .left {
                display: none;
            }

            .header .right {
                width: 100%;
                margin-top: 30px;
            }

            .header .right h2 {
                width: 100%;
                font-size: 12px;
            }

            .header .right i {
                margin-top: -18px;
                font-size: 23px;
            }

            .body .menu {
                display: none;
            }
            .body .menu2 {
                height: 100vh;
                width: 100%;
            }
            .body .menu2 button{
                margin-top: 15px;
                margin-bottom: 15px;
            }
            .body .menu2 a {
                font-size: 22px;
            }
            .header .right i {
                display: inherit;
            }
            .body .content {
           min-width: 100%;
            height: 100%;
            background-color: transparent;
            margin-left: -90px;
            position: absolute;
            top: 50px;
            padding: 20px;
            font-size: 17px;
        }
        .cabinet{
            min-width: 100%;
            background-color: white;
            margin-left: 0%;
         }
         .card{
             min-width: 100% !important;
         }

        .body #completeReg span {
            margin-left: 100px !important;
        }

        .body #completeReg input {
            outline: none;
            width: 200px;
            padding: 4px;
            margin-left: 100px !important;
            margin-bottom: 20px;
            border: none;
            font-size: 14px;
            border-bottom: 2px solid #007bff;
        }
        #complete{
            margin-bottom: 20px;
            margin-left: 30px;
            width: 100px
        }
        }

    </style>
</head>
<body>
    <main>
        <main>
            <div class="header bg-warning">
                <div class="right d-flex">
                    <h2 class="mt-2">Welcome {{auth()->user()->fullname}}</h2>
                    <i class="fa fa-bars text-primary" onclick="handleMenu()"></i>
                </div>
                <div class="left">
                    <button class="btn btn-dark"><a href="/user/logout">LOGOUT</a></button>
                    <button class="btn btn-danger"><a href="/user/dashboard">HOME</a></button>
                </div>
            </div>
            <div class="body">
                <div class="menu">
                    <div><button><a href="">Edit Profile</a></button></div>
                    <div><button><a href="">Loan Status</a></button></div>
                    <div><button><a href="/user/transaction">All Transaction</a></button></div>
                    <div><button><a href="">Account Statement</a></button></div>
                    <div><button><a href="">Complaints</a></button></div>
                    <div><button><a href="/user/cashout">Cash Out</a></button></div>
                </div>
                <div class="menu2" id="menu2" hidden>
                    <div><button><a href="">Edit Profile</a></button></div>
                    <div><button><a href="">Loan Status</a></button></div>
                    <div><button><a href="/user/transaction">All Transaction</a></button></div>
                    <div><button><a href="">Account Statement</a></button></div>
                    <div><button><a href="">Complaints</a></button></div>
                    <div><button><a href="/user/cashout">Cash Out</a></button></div>
                    <div><button><a href="/user/dashboard">Home</a></button></div>
                    <div> <button><a href="/user/logout">Logout</a></button></div>
                  
                </div>
              
                <form action="{{url('user/cashout')}}" method="post">
                    <div class="cabinet card">
                        <div class="text-center">
                            <h3>{{'NGN' . number_format(auth()->user()->balance , 2)}}</h3>
                        </div>
                        <div>
                            <span>Amount to cashout:</span>
                            <div>
                                @error('amount')
                                <div>
                                <small class="text-danger">{{$message}}</small>
                              </div>
                                @enderror
                                @if ($u=Session::get('error'))
                                <span class="text-danger">{{$u}}</span>
                                @endif
                                <input id="amount"  type="text" value="{{old('amount')}}" name="amount"
                                class="{{$errors->has('amount') ? 'is-inavlid' : '' }}">
                            </div>
                        </div>
                        <div>
                            <span>Account Number:</span>
                            <div>
                                @error('accountnum')
                                <div>
                                <small class="text-danger">{{$message}}</small>
                              </div>
                                @enderror
                                @if ($u=Session::get('error'))
                                <span class="text-danger">{{$u}}</span>
                                @endif
                                <input id="accountnum"  type="text" value="{{old('accountnum')}}" name="accountnum"
                                class="{{$errors->has('accountnum') ? 'is-inavlid' : '' }}">
                            </div>
                        </div>
                        <div>
                            <span>Bank Name:</span>
                            <div>
                                @error('bankname')
                                <div>
                                <small class="text-danger">{{$message}}</small>
                              </div>
                                @enderror
                                @if ($u=Session::get('error'))
                                <span class="text-danger">{{$u}}</span>
                                @endif
                                <input id="bankname"  type="text" value="{{old('bankname')}}" name="bankname"
                                class="{{$errors->has('bankname') ? 'is-inavlid' : '' }}">
                            </div>
                        </div>
                        @csrf
                        <div class="text-center">
                            <button id="complete" class="btn btn-warning">Withdraw</button>
                        </div>
                    </div>
                </form> 
            </div>
            </div>
        </main>
    </main>
</body>

</html>
<script>
    function handleMenu(params) {
        document.getElementById('menu2').hidden = !document.getElementById('menu2').hidden;
    } 
</script>
