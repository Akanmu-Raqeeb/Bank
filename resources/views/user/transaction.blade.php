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

        #profil {
            border: 2px solid #ffc107;
            width: 100px;
            height: 100px;
            border-radius: 100%;
            position: absolute;
            top: 220px;
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

        .coin {
            margin-top: 160px;
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

     


        .body .content {
            height: 92vh;
            background-color: transparent;
            margin-left: 20%;
            margin-top: 60px;
            padding: 30px;
            padding-top: 50px;
            font-size: 17px;
            display: flex;
            justify-content: space-between;
        }

        .content .left {
            width: 65%;
            height: 70vh;
            margin-right: 10px;
        }

        .content .right {
            width: 25%;
            height: 70vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #balance{
            min-width: 200px;
            min-height: 200px;
            border-radius: 100%;
            background-color: white;
            box-shadow: 0px 0px 2px black;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 23px;
            margin-bottom: 40px;
        }
        .btn-warning{
            margin-top: 30px;
        }
        .btn-warning a{
            text-decoration: none;
            color: black;
            
        }

        .adjust {
            margin-top: 100px !important
        }

        .body .content p {
            text-decoration: underline
        }

        .body #completeReg {
            display: flex;
            flex-wrap: wrap;
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
            border-bottom: 2px solid #007bff;
        }

        .profile {
            position: absolute;
            right: 40px;
            top: 200px;
        }

        .profile2 {
            position: absolute;
            right: 50px;
            top: 200px;
        }

        .profile2 img {
            width: 100px;
            height: 100px;
            border-radius: 100%;
        }

        .table {
            width: 100%;
        }

        .table table {
            width: 100%;
            border-collapse: collapse
        }

        th,
        td,
        tr {
            border-collapse: collapse;
            text-align: center;
        }

        .tr {
            border: none;
            border-bottom: .5px solid rgb(218, 215, 215);
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
            border-bottom: 2px solid #007bff;
        }

        .menu button a {
            text-decoration: none;
            color: black;
        }

        .menu2 button a {
            text-decoration: none;
            color: black;
        }

        @media(max-width:1024px){
            .content{
                margin-left: 250px !important;
            }
        }

        @media(max-width:915px) {
            .content{
                margin-left: 0px !important;
            }
            .body .menu {
                overflow-y: scroll;
                height: 100%;
            }

            .body .menu button {
                margin-top: 10px;
                margin-bottom: 60px;
            }

            .body #completeReg input {
                width: 350px;

            }
            
            .body .content {
                width: 100%;
                height: 100%;
                background-color: transparent;
                margin-left: 300px;
                position: absolute;
                top: 0px;
                display: block !important;
                padding: 0px;
                font-size: 17px;
                text-align: justify;
            }

         .content .left {
            /* width: 100%; */
            height: 70vh;
            margin-right: 10px;
            padding-left: 10px !important;
            margin-bottom: 20px;
            
        }
        


        .content .right {
            width: 50%;
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        }

        @media(max-width:912px) {
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

            .body .menu2 button {
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
                display: block !important;
                padding: 0px;
                font-size: 17px;
                text-align: justify;
            }

         .content .left {
            width: 100%;
            height: 40vh;
            margin-right: 10px;
            padding-left: 10px !important;
            margin-bottom: 20px;
            
        }
        


        .content .right {
            width: 100%;
            height: 40vh;
            display: flex;
            justify-content: center;
            align-items: center;
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

            .body .menu2 button {
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

            #complete {
                margin-bottom: 20px;
            }
            
            .body .content {
                width: 100%;
                height: 100%;
                background-color: transparent;
                margin-left: 0px;
                position: absolute;
                top: 0px;
                display: block !important;
                padding: 0px;
                font-size: 17px;
                text-align: justify;
            }

         .content .left {
            width: 100%;
            height: 70vh;
            margin-right: 10px;
            padding-left: 10px !important;
            margin-bottom: 20px;
            
        }
        


        .content .right {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        }

        @media(max-width:820px) {
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
                display: block !important;
                padding: 0px;
                font-size: 17px;
                text-align: justify;
            }

         .content .left {
            width: 100%;
            height: 20vh;
            margin-right: 10px;
            padding-left: 20px !important;
            margin-bottom: 20px;
            
        }
        


        .content .right {
            width: 100%;
            height: 40vh;
            display: flex;
            justify-content: center;
            align-items: center;
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

            #complete {
                margin-bottom: 20px;
            }
        }

        @media(max-width:740px){
            
            .body .content {
                width: 100%;
                height: 100%;
                background-color: transparent;
                margin-left: 0px;
                position: absolute;
                top: 0px;
                display: block !important;
                padding: 0px;
                font-size: 17px;
                text-align: justify;
            }

         .content .left {
            width: 100%;
            height: 70vh;
            margin-right: 10px;
            padding-left: 10px !important;
            margin-bottom: 20px;
            
        }
        


        .content .right {
            width: 100%;
            height: 120vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        }


        @media(max-width:700px) {
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

           
            .body .content {
                width: 100%;
                height: 100%;
                background-color: transparent;
                margin-left: 0px;
                position: absolute;
                top: 0px;
                display: block !important;
                padding: 0px;
                font-size: 17px;
                text-align: justify;
            }

         .content .left {
            width: 100%;
            height: 70vh;
            margin-right: 10px;
            padding-left: 10px !important;
            margin-bottom: 20px;
            
        }
        


        .content .right {
            width: 100%;
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
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

            #complete {
                margin-bottom: 20px;
            }
        }

        @media(max-width:667px){
            
            .body .content {
                width: 100%;
                height: 100%;
                background-color: transparent;
                margin-left: 0px;
                position: absolute;
                top: 0px;
                display: block !important;
                padding: 0px;
                font-size: 17px;
                text-align: justify;
            }

         .content .left {
            width: 100%;
            height: 70vh;
            margin-right: 10px;
            padding-left: 10px !important;
            margin-bottom: 20px;
            
        }
        


        .content .right {
            width: 100%;
            height: 140vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        }
        @media(max-width:653px){
            
            .body .content {
                width: 100%;
                height: 100%;
                background-color: transparent;
                margin-left: 0px;
                position: absolute;
                top: 0px;
                display: block !important;
                padding: 0px;
                font-size: 17px;
                text-align: justify;
            }

         .content .left {
            width: 100%;
            height: 90vh;
            margin-right: 10px;
            padding-left: 10px !important;
            margin-bottom: 20px;
            
        }
        


        .content .right {
            width: 100%;
            height: 140vh;
            display: flex;
            justify-content: center;
            align-items: center;
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

            .body .menu2 button {
                margin-top: 17px;
                margin-bottom: 17px;
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
                display: block !important;
                padding: 0px;
                font-size: 17px;
                text-align: justify;
            }

         .content .left {
            width: 100%;
            height: 40vh;
            margin-right: 10px;
            padding-left: 10px !important;
            margin-bottom: 20px;
            
        }
        


        .content .right {
            width: 100%;
            height: 50vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        }

        @media(max-width:414px) {
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

            .body .content {
                width: 100%;
                height: 100%;
                background-color: transparent;
                margin-left: 0px;
                position: absolute;
                top: 0px;
                display: block !important;
                padding: 0px;
                font-size: 17px;
                text-align: justify;
            }

         .content .left {
            width: 100%;
            height: 50vh;
            margin-right: 10px;
            padding-left: 10px !important;
            margin-bottom: 20px;
            
        }
        


        .content .right {
            width: 100%;
            height: 70vh;
            display: flex;
            justify-content: center;
            align-items: center;
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
                margin-left: 10px !important;
                margin-bottom: 20px;
                border: none;
                border-bottom: 2px solid #007bff;
            }

            #complete {
                margin-bottom: 20px;
            }

            .body #completeReg span {
                margin-left: 10px !important;
            }
        }

        @media(max-width:375px) {
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

           
            .body .content {
                width: 100%;
                height: 100%;
                background-color: transparent;
                margin-left: 0px;
                position: absolute;
                top: 0px;
                display: block !important;
                padding: 0px;
                font-size: 17px;
                text-align: justify;
            }

         .content .left {
            width: 100%;
            height: 70vh;
            margin-right: 10px;
            padding-left: 10px !important;
            margin-bottom: 20px;
            
        }
        


        .content .right {
            width: 100%;
            height: 70vh;
            display: flex;
            justify-content: center;
            align-items: center;
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

            #complete {
                margin-bottom: 20px;
                margin-left: 130px;
            }
        }

        @media(max-width:280px) {
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

           
            .body .content {
                width: 100%;
                height: 100%;
                background-color: transparent;
                margin-left: 0px;
                position: absolute;
                top: 0px;
                display: block !important;
                padding: 0px;
                font-size: 17px;
                text-align: justify;
            }

         .content .left {
            width: 100%;
            height: 70vh;
            margin-right: 10px;
            padding-left: 10px !important;
            margin-bottom: 20px;
            overflow-x: scroll;
            
        }
        


        .content .right {
            width: 100%;
            height: 70vh;
            display: flex;
            justify-content: center;
            align-items: center;
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

            #complete {
                margin-bottom: 20px;
                margin-left: 130px;
                width: 200px
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

                <form id="completeReg" class="content">

                    <div class="left card p-5">
                        <div>
                            <h3>Transaction</h3>
                        </div>
                        <table id="table">
                            <th>DATE</th>
                            <th>STATUS</th>
                            <th>REF NUMBER</th>
                            <th>AMOUNT</th>
                        </table>
                    </div>

                    <div class="right card p-5">
                      <div id="balance">
                        {{'NGN' . number_format(auth()->user()->balance , 2)}}
                      </div>
                      <button class="btn btn-primary">Top up Balance</button>
                      <button class="btn btn-warning"><a href="/user/cashout">Withdraw</a></button>
                    </div>

                </form>
            </div>
            </div>
        </main>
    </main>
</body>

</html>
<script>
    transaction =@json($transaction);
    let seen = false;
    if (transaction) {
   for (let i = 0; i < transaction.length; i++) {
            let amount = new Intl.NumberFormat("en-Us", { currency: "NGN", style: "currency" }).format(transaction[i].amount);
            document.getElementById('table').innerHTML += `<tr class="tr">
                                     <td>${transaction[i].date}</td>
                                     <td id="status" class="font-weight-bold">${transaction[i].status}</td>
                                     <td>${transaction[i].reference}</td>
                                     <td>${amount}</td>
                                    </tr>`;


        }
        setTimeout(() => {
            let status = document.querySelectorAll('#status');
            for (let j = 0; j < status.length; j++) {
                if (transaction[j].status=="Credit") {
                    status[j].style.color="red";
                }else{
                    status[j].style.color="green";
                }
            }
        }, 100);


    }
    function handleMenu(params) {
        document.getElementById('menu2').hidden = !document.getElementById('menu2').hidden;
    } 
</script>