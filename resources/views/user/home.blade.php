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
            background-color: white;
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

        
        .left button {
            /* border-radius: 25px; */
            font-size: 14px;
            width: 120px;
            height: 40px;
            font-weight: bold;
            box-shadow: 0px 0px 1px black;
            margin-right: 40px;
        }

        .btn-dark:hover {
            background-color: transparent !important;
            border: 1px solid #ffc107 !important;
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
            border: 1px solid #ffc107 !important;
            color: black !important;
        }

        .btn-danger:hover a {
            color: black
        }

        .btn-danger a {
            text-decoration: none;
            color: white;
        }
        #profil{
            border: 2px solid #ffc107;
            width: 100px;
            height: 100px;
            border-radius: 100%;
            position: absolute;
            top: 70px;
            right: 70px;
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
            margin-top: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .body .word p{
           font-size: 23px;
        }

        .body .content {
            height: 30vh;
            background-color: transparent;
            margin-left: 36%;
            margin-top: 0px;
            padding: 30px;
            font-size: 17px;
        }
        .adjust{
            margin-top: 100px !important
        }

        .body .content p {
            text-decoration: underline
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
            margin-bottom: 30px;
            margin-top: 20px;
            background-color: transparent;
            outline: none;
            border: 0px;
            font-family: "Futura Md";
            font-size: 18px;
            font-weight: bold;
        }

        
        .menu2 button a {
            text-decoration: none;
            color: black;
        }

        .body #completeReg {
            display: block;
            background-color: white;
            width: 30%;
            box-shadow: 0px 0px 1px black;
        }

        .body #completeReg span {
            font-weight: bold;
        }

        .body #completeReg input {
            outline: none;
            width: 300px;
            padding: 4px;
            margin-right: 43px;
            border: none;
            border-bottom: 2px solid red;
            margin-bottom: 30px;
        }
      
        .body #courseReg span {
            font-weight: bold;
        }
        #complete{
           margin-left: 30%;
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

        @media(max-width:912px){
            .header {
            width: 100%;
            height: 60px;
            background-color: white;
            justify-content: space-between;
            align-items: center;
            display: flex;
            color: black;
            box-shadow: 0px 0px 4px black;
            padding-left: 20px;
            padding-right: 20px;
            position: fixed;
            top: 0px;
            z-index: 7000;
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

            .body .menu2 button {
                margin-top: 15px;
                margin-bottom: 15px;
            }

            .body .menu2 a {
                font-size: 22px;
            }

            .header .right i {
                display: inherit;
            }

        .body {
            width: 100%;
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

        .btn-dark:hover {
            background-color: transparent !important;
            border: 1px solid #ffc107 !important;
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
            border: 1px solid #ffc107 !important;
            color: black !important;
        }

        .btn-danger:hover a {
            color: black
        }

        .btn-danger a {
            text-decoration: none;
            color: white;
        }
        #profil{
            border: 2px solid #ffc107;
            width: 100px;
            height: 100px;
            border-radius: 100%;
            position: absolute;
            top: 70px;
            right: 70px;
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
            margin-top: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .body .word p{
           font-size: 23px;
           margin-top: 40px;
        }

        .body .content {
            height: 30vh;
            background-color: transparent;
            margin-top: 0px;
            padding: 30px;
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
            width: 80%;
            box-shadow: 0px 0px 1px black;
            margin-left: 80px;
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
        #complete{
           margin-left: 30%;
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
        }
        @media(max-width:1180px){
            .header {
            width: 100%;
            height: 60px;
            background-color: white;
            justify-content: space-between;
            align-items: center;
            display: flex;
            color: black;
            box-shadow: 0px 0px 4px black;
            padding-left: 20px;
            padding-right: 20px;
            position: fixed;
            top: 0px;
            z-index: 7000;
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

            .body .menu2 button {
                margin-top: 15px;
                margin-bottom: 15px;
            }

            .body .menu2 a {
                font-size: 22px;
            }

            .header .right i {
                display: inherit;
            }

        .body {
            width: 100%;
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

        .btn-dark:hover {
            background-color: transparent !important;
            border: 1px solid #ffc107 !important;
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
            border: 1px solid #ffc107 !important;
            color: black !important;
        }

        .btn-danger:hover a {
            color: black
        }

        .btn-danger a {
            text-decoration: none;
            color: white;
        }
        #profil{
            border: 2px solid #ffc107;
            width: 100px;
            height: 100px;
            border-radius: 100%;
            position: absolute;
            top: 70px;
            right: 70px;
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
            margin-top: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .body .word p{
           font-size: 23px;
           margin-top: 40px;
        }

        .body .content {
            height: 30vh;
            background-color: transparent;
            margin-top: 0px;
            padding: 30px;
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
            width: 40%;
            box-shadow: 0px 0px 1px black;
            margin-left: 300px;
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
        #complete{
           margin-left: 30%;
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
        }
        @media(max-width:1024px){
            .header {
            width: 100%;
            height: 60px;
            background-color: white;
            justify-content: space-between;
            align-items: center;
            display: flex;
            color: black;
            box-shadow: 0px 0px 4px black;
            padding-left: 20px;
            padding-right: 20px;
            position: fixed;
            top: 0px;
            z-index: 7000;
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

            .body .menu2 button {
                margin-top: 15px;
                margin-bottom: 15px;
            }

            .body .menu2 a {
                font-size: 22px;
            }

            .header .right i {
                display: inherit;
            }

        .body {
            width: 100%;
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

        .btn-dark:hover {
            background-color: transparent !important;
            border: 1px solid #ffc107 !important;
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
            border: 1px solid #ffc107 !important;
            color: black !important;
        }

        .btn-danger:hover a {
            color: black
        }

        .btn-danger a {
            text-decoration: none;
            color: white;
        }
        #profil{
            border: 2px solid #ffc107;
            width: 100px;
            height: 100px;
            border-radius: 100%;
            position: absolute;
            top: 70px;
            right: 70px;
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
            margin-top: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .body .word p{
           font-size: 23px;
           margin-top: 40px;
        }

        .body .content {
            height: 30vh;
            background-color: transparent;
            margin-top: 0px;
            padding: 30px;
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
            width: 40%;
            box-shadow: 0px 0px 1px black;
            margin-left: 300px;
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
        #complete{
           margin-left: 30%;
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
        }
        @media(max-width:915px){
            .header {
            width: 100%;
            height: 60px;
            background-color: white;
            justify-content: space-between;
            align-items: center;
            display: flex;
            color: black;
            box-shadow: 0px 0px 4px black;
            padding-left: 20px;
            padding-right: 20px;
            position: fixed;
            top: 0px;
            z-index: 7000;
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

            .body .menu2 button {
                margin-top: 15px;
                margin-bottom: 15px;
            }

            .body .menu2 a {
                font-size: 22px;
            }

            .header .right i {
                display: inherit;
            }

        .body {
            width: 100%;
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

        .btn-dark:hover {
            background-color: transparent !important;
            border: 1px solid #ffc107 !important;
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
            border: 1px solid #ffc107 !important;
            color: black !important;
        }

        .btn-danger:hover a {
            color: black
        }

        .btn-danger a {
            text-decoration: none;
            color: white;
        }
        #profil{
            border: 2px solid #ffc107;
            width: 100px;
            height: 100px;
            border-radius: 100%;
            position: absolute;
            top: 70px;
            right: 70px;
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
            margin-top: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .body .word p{
           font-size: 23px;
           margin-top: 40px;
        }

        .body .content {
            height: 30vh;
            background-color: transparent;
            margin-top: 0px;
            padding: 30px;
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
            width: 40%;
            height: 300px;
            box-shadow: 0px 0px 1px black;
            margin-left: 300px;
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
        #complete{
           margin-left: 30%;
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
        }
        @media(max-width:896px){
            .header {
            width: 100%;
            height: 60px;
            background-color: white;
            justify-content: space-between;
            align-items: center;
            display: flex;
            color: black;
            box-shadow: 0px 0px 4px black;
            padding-left: 20px;
            padding-right: 20px;
            position: fixed;
            top: 0px;
            z-index: 7000;
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

            .body .menu2 button {
                margin-top: 15px;
                margin-bottom: 15px;
            }

            .body .menu2 a {
                font-size: 22px;
            }

            .header .right i {
                display: inherit;
            }

        .body {
            width: 100%;
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

        .btn-dark:hover {
            background-color: transparent !important;
            border: 1px solid #ffc107 !important;
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
            border: 1px solid #ffc107 !important;
            color: black !important;
        }

        .btn-danger:hover a {
            color: black
        }

        .btn-danger a {
            text-decoration: none;
            color: white;
        }
        #profil{
            border: 2px solid #ffc107;
            width: 100px;
            height: 100px;
            border-radius: 100%;
            position: absolute;
            top: 70px;
            right: 70px;
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
            margin-top: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .body .word p{
           font-size: 23px;
           margin-top: 40px;
        }

        .body .content {
            height: 30vh;
            background-color: transparent;
            margin-top: 0px;
            padding: 30px;
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
            width: 40%;
            height: 300px;
            box-shadow: 0px 0px 1px black;
            margin-left: 150px;
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
        #complete{
           margin-left: 30%;
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
        }
        @media(max-width:820px){
            .header {
            width: 100%;
            height: 60px;
            background-color: white;
            justify-content: space-between;
            align-items: center;
            display: flex;
            color: black;
            box-shadow: 0px 0px 4px black;
            padding-left: 20px;
            padding-right: 20px;
            position: fixed;
            top: 0px;
            z-index: 7000;
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

            .body .menu2 button {
                margin-top: 15px;
                margin-bottom: 15px;
            }

            .body .menu2 a {
                font-size: 22px;
            }

            .header .right i {
                display: inherit;
            }

        .body {
            width: 100%;
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

        .btn-dark:hover {
            background-color: transparent !important;
            border: 1px solid #ffc107 !important;
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
            border: 1px solid #ffc107 !important;
            color: black !important;
        }

        .btn-danger:hover a {
            color: black
        }

        .btn-danger a {
            text-decoration: none;
            color: white;
        }
        #profil{
            border: 2px solid #ffc107;
            width: 100px;
            height: 100px;
            border-radius: 100%;
            position: absolute;
            top: 70px;
            right: 70px;
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
            margin-top: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .body .word p{
           font-size: 23px;
           margin-top: 40px;
        }

        .body .content {
            height: 30vh;
            background-color: transparent;
            margin-top: 0px;
            padding: 30px;
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
            width: 80%;
            box-shadow: 0px 0px 1px black;
            margin-left: 80px;
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
        #complete{
           margin-left: 30%;
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
        }
        @media(max-width:700px){
            .header {
            width: 100%;
            height: 60px;
            background-color: white;
            justify-content: space-between;
            align-items: center;
            display: flex;
            color: black;
            box-shadow: 0px 0px 4px black;
            padding-left: 20px;
            padding-right: 20px;
            position: fixed;
            top: 0px;
            z-index: 7000;
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

            .body .menu2 button {
                margin-top: 15px;
                margin-bottom: 15px;
            }

            .body .menu2 a {
                font-size: 22px;
            }

            .header .right i {
                display: inherit;
            }

        .body {
            width: 100%;
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

        .btn-dark:hover {
            background-color: transparent !important;
            border: 1px solid #ffc107 !important;
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
            border: 1px solid #ffc107 !important;
            color: black !important;
        }

        .btn-danger:hover a {
            color: black
        }

        .btn-danger a {
            text-decoration: none;
            color: white;
        }
        #profil{
            border: 2px solid #ffc107;
            width: 100px;
            height: 100px;
            border-radius: 100%;
            position: absolute;
            top: 70px;
            right: 70px;
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
            margin-top: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .body .word p{
           font-size: 23px;
           margin-top: 40px;
        }

        .body .content {
            height: 30vh;
            background-color: transparent;
            margin-top: 0px;
            padding: 30px;
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
            width: 80%;
            height: 200px;
            box-shadow: 0px 0px 1px black;
            margin-left: 55px;
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
        #complete{
           margin-left: 30%;
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
        }
        @media(max-width:540px){
            .header {
            width: 100%;
            height: 60px;
            background-color: white;
            justify-content: space-between;
            align-items: center;
            display: flex;
            color: black;
            box-shadow: 0px 0px 4px black;
            padding-left: 20px;
            padding-right: 20px;
            position: fixed;
            top: 0px;
            z-index: 7000;
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

            .body .menu2 button {
                margin-top: 15px;
                margin-bottom: 15px;
            }

            .body .menu2 a {
                font-size: 22px;
            }

            .header .right i {
                display: inherit;
            }

        .body {
            width: 100%;
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

        .btn-dark:hover {
            background-color: transparent !important;
            border: 1px solid #ffc107 !important;
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
            border: 1px solid #ffc107 !important;
            color: black !important;
        }

        .btn-danger:hover a {
            color: black
        }

        .btn-danger a {
            text-decoration: none;
            color: white;
        }
        #profil{
            border: 2px solid #ffc107;
            width: 100px;
            height: 100px;
            border-radius: 100%;
            position: absolute;
            top: 70px;
            right: 70px;
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
            margin-top: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .body .word p{
           font-size: 23px;
           margin-top: 40px;
        }

        .body .content {
            height: 30vh;
            background-color: transparent;
            margin-top: 0px;
            padding: 30px;
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
            width: 80%;
            box-shadow: 0px 0px 1px black;
            margin-left: 55px;
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
        #complete{
           margin-left: 30%;
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
        }
        @media(max-width:414px){
            .header {
            width: 100%;
            height: 60px;
            background-color: white;
            justify-content: space-between;
            align-items: center;
            display: flex;
            color: black;
            box-shadow: 0px 0px 4px black;
            padding-left: 20px;
            padding-right: 20px;
            position: fixed;
            top: 0px;
            z-index: 7000;
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

            .body .menu2 button {
                margin-top: 15px;
                margin-bottom: 15px;
            }

            .body .menu2 a {
                font-size: 22px;
            }

            .header .right i {
                display: inherit;
            }

        .body {
            width: 100%;
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

        .btn-dark:hover {
            background-color: transparent !important;
            border: 1px solid #ffc107 !important;
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
            border: 1px solid #ffc107 !important;
            color: black !important;
        }

        .btn-danger:hover a {
            color: black
        }

        .btn-danger a {
            text-decoration: none;
            color: white;
        }
        #profil{
            border: 2px solid #ffc107;
            width: 100px;
            height: 100px;
            border-radius: 100%;
            position: absolute;
            top: 70px;
            right: 70px;
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
            margin-top: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .body .word p{
           font-size: 23px;
           margin-top: 40px;
        }

        .body .content {
            height: 30vh;
            background-color: transparent;
            margin-left: 6%;
            margin-top: 0px;
            padding: 30px;
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
            width: 80%;
            box-shadow: 0px 0px 1px black;
            margin-left: 40px;
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
        #complete{
           margin-left: 30%;
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
        }
        @media(max-width:280px){
            .header {
            width: 100%;
            height: 60px;
            background-color: white;
            justify-content: space-between;
            align-items: center;
            display: flex;
            color: black;
            box-shadow: 0px 0px 4px black;
            padding-left: 20px;
            padding-right: 20px;
            position: fixed;
            top: 0px;
            z-index: 7000;
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

            .body .menu2 button {
                margin-top: 15px;
                margin-bottom: 15px;
            }

            .body .menu2 a {
                font-size: 22px;
            }

            .header .right i {
                display: inherit;
            }

        .body {
            width: 100%;
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

        .btn-dark:hover {
            background-color: transparent !important;
            border: 1px solid #ffc107 !important;
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
            border: 1px solid #ffc107 !important;
            color: black !important;
        }

        .btn-danger:hover a {
            color: black
        }

        .btn-danger a {
            text-decoration: none;
            color: white;
        }
        #profil{
            border: 2px solid #ffc107;
            width: 100px;
            height: 100px;
            border-radius: 100%;
            position: absolute;
            top: 70px;
            right: 70px;
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
            margin-top: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .body .word p{
           font-size: 23px;
           margin-top: 40px;
        }

        .body .content {
            height: 30vh;
            background-color: transparent;
            margin-top: 0px;
            padding: 30px;
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
            width: 80%;
            box-shadow: 0px 0px 1px black;
            margin-left: 30px;
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
        #complete{
           margin-left: 30%;
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
        }


    </style>
</head>
<body>
    <main>
        <main>
            <div class="header">
                <div class="right d-flex">
                    <h2 class="mt-2">Welcome {{auth()->user()->fullname}}</h2>
                    <i class="fa fa-bars text-primary" onclick="handleMenu()"></i>
                </div>
                <div class="left">
                    <button class="btn btn-danger"><a href="/user/logout">LOGOUT</a></button>
                </div>
            </div>
            <div class="body">
                <div class="menu2" id="menu2" hidden>
                    <div> <button><a href="/user/logout">Logout</a></button></div>

                </div>
                <div class="word p-4">
                    <p>We need to setup your account. Therefore, Enter your secret code and click the button buttton</p>
                </div>
        <form action="{{url('user/home')}}" method="post" id="completeReg" class="content card">
                            <div>
                                <span>Secret Code:</span>
                                <div>
                                    @error('secretCode')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                    @if ($u=Session::get('error'))
                                    <span class="text-danger">{{$u}}</span>
                                    @endif
                                    <input id="profilepic"  type="text" value="{{old('secreCode')}}" name="secretCode"
                                    class="{{$errors->has('secretCode') ? 'is-inavlid' : '' }}">
                                </div>
                            </div>
                            @csrf
                            <div>
                                <button id="complete" class="btn btn-warning">Setup Account</button>
                            </div>

                        </form> 
                        <div>
                            <img src="" id="profil">
                        </div>
            </div>
            </div>
        </main>
    </main>
</body>
</html>
<script>
    let image=@json($profilepic);
    console.log(image);
    setTimeout(() => {
       document.getElementById('profil').src=`{{url('/storage/${image}')}}`; 
    }, 100);
    function handleMenu(params) {
        document.getElementById('menu2').hidden = !document.getElementById('menu2').hidden;
    } 
</script>
