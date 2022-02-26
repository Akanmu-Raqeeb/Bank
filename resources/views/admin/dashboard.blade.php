<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('/bootstrap.css')}}">
    <style>
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

        .bar{
            display: none;
        }
        /* .header .right i {
            display: none;
        } */

        .header .right h2 {
            margin-top: 0px;
        }

        .body {
            width: 100%;
        }


        .left button {
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

        .alluser {
            position: fixed;
            top: 84%;
            left: 70%;
            z-index: 5000;
        }

        .alluser button {
            width: 50px;
            height: 50px;
            outline: none;
            background-color: white;
            box-shadow: 0px 0px 1px black;
            border-radius: 100%;
        }


        .body .content {
            width: 81%;
            height: 100%;
            background-color: transparent;
            margin-left: 250px;
            margin-top: 50px;
            padding: 30px;
            font-size: 17px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .adjust {
            margin-top: 100px !important
        }

        .body .content p {
            text-decoration: underline
        }

        .body .content .picture {
            width: 100%;
            margin-top: 160px;
            display: flex;
            flex-wrap: wrap
        }

        .body .content .picture div {
            width: 200px;
            height: 200px;
            margin-right: 50px;
            margin-bottom: 150px;
        }

        .body .content .picture img {
            width: 220px;
            height: 220px;
        }

        .body .content span {
            font-weight: bold;
        }

        .body .content input {
            outline: none;
            width: 300px;
            padding: 4px;
            /* margin-right: 43px !important; */
            border: none;
            border-bottom: 2px solid #007bff;
            background-color: transparent
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



        table {
            width: 100%;

        }

        th,
        td,
        tr {
            border-collapse: collapse;
            text-align: center;
        }

        .body #courseReg span {
            font-weight: bold;
        }

        .body #mycourse {
            margin-bottom: 40px;
        }

        #complete{
            margin-left: -600px;
            margin-top: 20px;
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

        .myModal {
            width: 100%;
            height: 100vh;
            background-color: rgba(215, 215, 215, 0.7);
            position: absolute;
            top: 0px;
            left: 0px;
            z-index: 14000;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .myModal #content {
            width: 40%;
            height: 400px;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            padding: 50px;
            overflow-y: scroll;
            position: relative;
        }

        #content p {
            font-size: 23px;
        }

        #content i {
            font-size: 20px;
            position: absolute;
            right: 50px;
            top: 30px;
        }

        .newModal {
            width: 100%;
            height: 100vh;
            background-color: rgba(215, 215, 215, 0.7);
            position: absolute;
            top: 0px;
            left: 0px;
            z-index: 14000;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .newModal #newcontent {
            width: 60%;
            height: 600px;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            padding: 50px;
            position: relative;
        }

        #newcontent i {
            font-size: 20px;
            position: absolute;
            right: 50px;
            top: 30px;
        }

        #newModal #completeReg {
            display: flex;
            flex-wrap: wrap;
            margin-top: 50px;
            margin-left: 20px;
        }

        #newModal #completeReg div {
            margin-bottom: 17px;
        }

        #newModal #completeReg input {
            outline: none;
            width: 300px;
            padding: 4px;
            margin-right: 43px;
            border: none;
            border-bottom: 2px solid #007bff;
        }

        #modalImage {
            width: 40px;
            height: 40px;
            border-radius: 100%;
            position: absolute;
            top: 30px;
        }

        @media(max-width:1280px){
            .newModal #newcontent {
            width: 100%;
            height: 600px;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            padding: 50px;
            position: relative;
        }
        }
        @media(max-width:1024px){
            .newModal #newcontent {
            width: 100%;
            height: 600px;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            padding: 50px;
            position: relative;
        }
        }


        @media(max-width:915px) {
            .body .menu {
                overflow-y: scroll
            }

            .body .menu button {
                margin-top: 10px;
                margin-bottom: 50px;
            }

            .body #completeReg input {
                width: 350px;

            }
            #complete{
            margin-left: 0px;
            margin-top: 20px;
        }
        .header .right h2{
            margin-top: -15px;
        }
        }
        @media(max-width:915px) {
            .body .menu {
                overflow-y: scroll
            }

            .body .menu button {
                margin-top: 10px;
                margin-bottom: 50px;
            }

            .body #completeReg input {
                width: 350px;

            }
            #complete{
            margin-left: 0px;
            margin-top: 20px;
        }
        .header .right h2{
            margin-top: -15px;
        }
        }

        @media(max-width:912px) {
            .header {
                padding-left: 20px;
                padding-right: 20px;
            }

            .header .left {
                display: none;
            }

            .header .right {
                width: 90% !important;
                margin-top: 30px;
            }

            .header .right h2 {
                width: 90% !important;
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
            .myModal #content {
            width: 100%;
            height: 400px;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            padding: 50px;
            overflow-y: scroll;
            position: relative;
        }

            .body .menu2 a {
                font-size: 22px;
            }

            .bar{
            display: inherit;
        }


            .body .content {
               /* padding: 0px; */
               display: flex;
               flex-wrap: wrap;
               padding-left: 20px;
               margin-left: 90px;
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

            .body .content input {
            outline: none;
            /* padding: 4px; */
            border: none;
            margin-bottom: 20px;
            border-bottom: 2px solid #007bff;
            background-color: transparent
        }

            #complete {
                margin-bottom: 20px;
            }

            .body .content span {
                margin-left: 10px !important;
            }
            .newModal #newcontent {
            width: 100%;
            height: 100vh;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            padding: 50px;
            position: relative;
            overflow-y: scroll;
            top: 0px;
        }

        #newcontent i {
            font-size: 20px;
            position: absolute;
            right: 50px;
            top: 30px;
        }

        #newModal #completeReg {
            display: flex;
            flex-wrap: wrap;
            margin-top: 50px;
            margin-left: -20px;
        }

        #newModal #completeReg div {
            margin-bottom: 17px;
        }

        #newModal #completeReg input {
            outline: none;
            width: 690px;
            padding: 4px;
            margin-right: 60px;
            border: none;
            border-bottom: 2px solid #007bff;
        }

        #modalImage {
            width: 40px;
            height: 40px;
            border-radius: 100%;
            position: absolute;
            top: 30px;
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
        }

        @media(max-width:768px) {
            .header {
                padding-left: 20px;
                padding-right: 20px;
            }

            .header .left {
                display: none;
            }

            .header .right {
                width: 90% !important;
                margin-top: 30px;
            }

            .header .right h2 {
                width: 90% !important;
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
            .myModal #content {
            width: 100%;
            height: 400px;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            padding: 50px;
            overflow-y: scroll;
            position: relative;
        }

            .body .menu2 a {
                font-size: 22px;
            }

            .bar{
            display: inherit;
        }


            .body .content {
               /* padding: 0px; */
               display: block;
               padding-left: 20px;
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

            .body .content input {
            outline: none;
            min-width: 100%;
            /* padding: 4px; */
            border: none;
            margin-bottom: 20px;
            border-bottom: 2px solid #007bff;
            background-color: transparent
        }

            #complete {
                margin-bottom: 20px;
            }

            .body .content span {
                margin-left: 10px !important;
            }
            .newModal #newcontent {
            width: 100%;
            height: 100vh;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            padding: 50px;
            position: relative;
            overflow-y: scroll;
            top: 0px;
        }

        #newcontent i {
            font-size: 20px;
            position: absolute;
            right: 50px;
            top: 30px;
        }

        #newModal #completeReg {
            display: flex;
            flex-wrap: wrap;
            margin-top: 50px;
            margin-left: -20px;
        }

        #newModal #completeReg div {
            margin-bottom: 17px;
        }

        #newModal #completeReg input {
            outline: none;
            width: 690px;
            padding: 4px;
            margin-right: 60px;
            border: none;
            border-bottom: 2px solid #007bff;
        }

        #modalImage {
            width: 40px;
            height: 40px;
            border-radius: 100%;
            position: absolute;
            top: 30px;
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
                width: 90% !important;
                margin-top: 30px;
            }

            .header .right h2 {
                width: 90% !important;
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
            .myModal #content {
            width: 100%;
            height: 400px;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            padding: 50px;
            overflow-y: scroll;
            position: relative;
        }

            .body .menu2 a {
                font-size: 22px;
            }

            .bar{
            display: inherit;
        }


            .body .content {
               /* padding: 0px; */
               display: block;
               padding-left: 20px;
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

            .body .content input {
            outline: none;
            min-width: 100%;
            /* padding: 4px; */
            border: none;
            margin-bottom: 20px;
            border-bottom: 2px solid #007bff;
            background-color: transparent
        }

            #complete {
                margin-bottom: 20px;
            }

            .body .content span {
                margin-left: 10px !important;
            }
            .newModal #newcontent {
            width: 100%;
            height: 100vh;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            padding: 50px;
            position: relative;
            overflow-y: scroll;
            top: 0px;
        }

        #newcontent i {
            font-size: 20px;
            position: absolute;
            right: 50px;
            top: 30px;
        }

        #newModal #completeReg {
            display: flex;
            flex-wrap: wrap;
            margin-top: 50px;
            margin-left: -20px;
        }

        #newModal #completeReg div {
            margin-bottom: 17px;
        }

        #newModal #completeReg input {
            outline: none;
            width: 690px;
            padding: 4px;
            margin-right: 60px;
            border: none;
            border-bottom: 2px solid #007bff;
        }

        #modalImage {
            width: 40px;
            height: 40px;
            border-radius: 100%;
            position: absolute;
            top: 30px;
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
                width: 90% !important;
                margin-top: 30px;
            }

            .header .right h2 {
                width: 90% !important;
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
            .myModal #content {
            width: 100%;
            height: 400px;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            padding: 50px;
            overflow-y: scroll;
            position: relative;
        }

            .body .menu2 a {
                font-size: 22px;
            }

            .bar{
            display: inherit;
        }


            .body .content {
               /* padding: 0px; */
               display: block;
               padding-left: 20px;
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

            .body .content input {
            outline: none;
            min-width: 100%;
            /* padding: 4px; */
            border: none;
            margin-bottom: 20px;
            border-bottom: 2px solid #007bff;
            background-color: transparent
        }

            #complete {
                margin-bottom: 20px;
            }

            .body .content span {
                margin-left: 10px !important;
            }
            .newModal #newcontent {
            width: 100%;
            height: 100vh;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            padding: 50px;
            position: relative;
            overflow-y: scroll;
            top: 0px;
        }

        #newcontent i {
            font-size: 20px;
            position: absolute;
            right: 50px;
            top: 30px;
        }

        #newModal #completeReg {
            display: flex;
            flex-wrap: wrap;
            margin-top: 50px;
            margin-left: -20px;
        }

        #newModal #completeReg div {
            margin-bottom: 17px;
        }

        #newModal #completeReg input {
            outline: none;
            min-width:80%;
            padding: 4px;
            margin-right: 43px;
            border: none;
            border-bottom: 2px solid #007bff;
        }

        #modalImage {
            width: 40px;
            height: 40px;
            border-radius: 100%;
            position: absolute;
            top: 30px;
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

        @media(max-width:540px) {
            .header {
                padding-left: 20px;
                padding-right: 20px;
            }

            .header .left {
                display: none;
            }

            .header .right {
                width: 90% !important;
                margin-top: 30px;
            }

            .header .right h2 {
                width: 90% !important;
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
            .myModal #content {
            width: 100%;
            height: 400px;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            padding: 50px;
            overflow-y: scroll;
            position: relative;
        }

            .body .menu2 a {
                font-size: 22px;
            }

            .bar{
            display: inherit;
        }


            .body .content {
               /* padding: 0px; */
               display: block;
               padding-left: 20px;
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

            .body .content input {
            outline: none;
            min-width: 100%;
            /* padding: 4px; */
            border: none;
            margin-bottom: 20px;
            border-bottom: 2px solid #007bff;
            background-color: transparent
        }

            #complete {
                margin-bottom: 20px;
            }

            .body .content span {
                margin-left: 10px !important;
            }
            .newModal #newcontent {
            width: 100%;
            height: 100vh;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            padding: 50px;
            position: relative;
            overflow-y: scroll;
            top: 0px;
        }

        #newcontent i {
            font-size: 20px;
            position: absolute;
            right: 50px;
            top: 30px;
        }

        #newModal #completeReg {
            display: flex;
            flex-wrap: wrap;
            margin-top: 50px;
            margin-left: -20px;
        }

        #newModal #completeReg div {
            margin-bottom: 17px;
        }

        #newModal #completeReg input {
            outline: none;
            max-width: 65%;
            padding: 4px;
            margin-right: 43px;
            border: none;
            border-bottom: 2px solid #007bff;
        }

        #modalImage {
            width: 40px;
            height: 40px;
            border-radius: 100%;
            position: absolute;
            top: 30px;
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
                width: 90% !important;
                margin-top: 30px;
            }

            .header .right h2 {
                width: 90% !important;
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
            .myModal #content {
            width: 100%;
            height: 400px;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            padding: 50px;
            overflow-y: scroll;
            position: relative;
        }

            .body .menu2 a {
                font-size: 22px;
            }

            .bar{
            display: inherit;
        }


            .body .content {
               /* padding: 0px; */
               display: block;
               padding-left: 20px;
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

            .body .content input {
            outline: none;
            min-width: 100%;
            /* padding: 4px; */
            border: none;
            margin-bottom: 20px;
            border-bottom: 2px solid #007bff;
            background-color: transparent
        }

            #complete {
                margin-bottom: 20px;
            }

            .body .content span {
                margin-left: 10px !important;
            }
            .newModal #newcontent {
            width: 100%;
            height: 100vh;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            padding: 50px;
            position: relative;
            overflow-y: scroll;
            top: 0px;
        }

        #newcontent i {
            font-size: 20px;
            position: absolute;
            right: 50px;
            top: 30px;
        }

        #newModal #completeReg {
            display: flex;
            flex-wrap: wrap;
            margin-top: 50px;
            margin-left: -20px;
        }

        #newModal #completeReg div {
            margin-bottom: 17px;
        }

        #newModal #completeReg input {
            outline: none;
            min-width: 100%;
            padding: 4px;
            margin-right: 43px;
            border: none;
            border-bottom: 2px solid #007bff;
        }

        #modalImage {
            width: 40px;
            height: 40px;
            border-radius: 100%;
            position: absolute;
            top: 30px;
        }
        }
        @media(max-width:412px) {
            .header {
                padding-left: 20px;
                padding-right: 20px;
            }

            .header .left {
                display: none;
            }

            .header .right {
                width: 90% !important;
                margin-top: 30px;
            }

            .header .right h2 {
                width: 90% !important;
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
            .myModal #content {
            width: 100%;
            height: 400px;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            padding: 50px;
            overflow-y: scroll;
            position: relative;
        }

            .body .menu2 a {
                font-size: 22px;
            }

            .bar{
            display: inherit;
        }


            .body .content {
               /* padding: 0px; */
               display: block;
               padding-left: 20px;
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

            .body .content input {
            outline: none;
            min-width: 100%;
            /* padding: 4px; */
            border: none;
            margin-bottom: 20px;
            border-bottom: 2px solid #007bff;
            background-color: transparent
        }

            #complete {
                margin-bottom: 20px;
            }

            .body .content span {
                margin-left: 10px !important;
            }
            .newModal #newcontent {
            width: 100%;
            height: 100vh;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            padding: 50px;
            position: relative;
            overflow-y: scroll;
            top: 0px;
        }

        #newcontent i {
            font-size: 20px;
            position: absolute;
            right: 50px;
            top: 30px;
        }

        #newModal #completeReg {
            display: flex;
            flex-wrap: wrap;
            margin-top: 50px;
            margin-left: -20px;
        }

        #newModal #completeReg div {
            margin-bottom: 17px;
        }

        #newModal #completeReg input {
            outline: none;
            width: 300px;
            padding: 4px;
            margin-right: 43px;
            border: none;
            border-bottom: 2px solid #007bff;
        }

        #modalImage {
            width: 40px;
            height: 40px;
            border-radius: 100%;
            position: absolute;
            top: 30px;
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
                width: 90% !important;
                margin-top: 30px;
            }

            .header .right h2 {
                width: 90% !important;
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
            .myModal #content {
            width: 100%;
            height: 400px;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            padding: 50px;
            overflow-y: scroll;
            position: relative;
        }

            .body .menu2 a {
                font-size: 22px;
            }

            .bar{
            display: inherit;
        }


            .body .content {
               /* padding: 0px; */
               display: block;
               padding-left: 20px;
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

            .body .content input {
            outline: none;
            min-width: 100%;
            /* padding: 4px; */
            border: none;
            margin-bottom: 20px;
            border-bottom: 2px solid #007bff;
            background-color: transparent
        }

            #complete {
                margin-bottom: 20px;
            }

            .body .content span {
                margin-left: 10px !important;
            }
            .newModal #newcontent {
            width: 100%;
            height: 100vh;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            padding: 50px;
            position: relative;
            overflow-y: scroll;
            top: 0px;
        }

        #newcontent i {
            font-size: 20px;
            position: absolute;
            right: 50px;
            top: 30px;
        }

        #newModal #completeReg {
            display: flex;
            flex-wrap: wrap;
            margin-top: 50px;
            margin-left: -20px;
        }

        #newModal #completeReg div {
            margin-bottom: 17px;
        }

        #newModal #completeReg input {
            outline: none;
            min-width:80%;
            padding: 4px;
            margin-right: 43px;
            border: none;
            border-bottom: 2px solid #007bff;
        }

        #modalImage {
            width: 40px;
            height: 40px;
            border-radius: 100%;
            position: absolute;
            top: 30px;
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
                width: 90% !important;
                margin-top: 30px;
            }

            .header .right h2 {
                width: 90% !important;
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
            .myModal #content {
            width: 100%;
            height: 400px;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            padding: 35px;
            overflow-y: scroll;
            position: relative;
        }

            .body .menu2 a {
                font-size: 22px;
            }

            .bar{
            display: inherit;
        }


            .body .content {
               /* padding: 0px; */
               display: block;
               padding-left: 20px;
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

            .body .content input {
            outline: none;
            width: 60%;
            /* padding: 4px; */
            border: none;
            margin-bottom: 20px;
            border-bottom: 2px solid #007bff;
            background-color: transparent
        }

            #complete {
                margin-bottom: 20px;
            }

            .body .content span {
                margin-left: 10px !important;
            }
            .newModal #newcontent {
            width: 100%;
            height: 100vh;
            background-color: white;
            box-shadow: 0px 0px 3px black;
            padding: 10px;
            position: relative;
            overflow-y: scroll;
            top: 0px;
        }

        #newcontent i {
            font-size: 20px;
            position: absolute;
            right: 50px;
            top: 30px;
        }

        #newModal #completeReg {
            display: flex;
            flex-wrap: wrap;
            margin-top: 50px;
            margin-left: 20px;
        }

        #newModal #completeReg div {
            margin-bottom: 17px;
        }

        #newModal #completeReg input {
            outline: none;
            width:80%;
            padding: 4px;
            margin-right: 43px;
            border: none;
            border-bottom: 2px solid #007bff;
        }

        #modalImage {
            width: 40px;
            height: 40px;
            border-radius: 100%;
            position: absolute;
            top: 30px;
        }
        }
    </style>
</head>

<body>
    <main>
        <main>
            <div class="alluser" onclick="handleUser()">
                <button class="text-center">
                    <i class="fa fa-user text-warning"></i>
                </button>
            </div>
            <div class="header">
                <div class="myModal" id="myModal" hidden>
                    <div id="content">
                        <i class="fa fa-close" onclick="handleClose()"></i>
                        <p class="text-center font-weight-bold">All Recent Users</p>
                    </div>
                </div>
                <div class="newModal" id="newModal" hidden>
                    <div id="newcontent">
                        <i class="fa fa-close" onclick="handleCloseTwo()"></i>
                        <form id="completeReg" action="{{url('admin/update')}}" method="POST" class="content">
                            <div>
                                <div>
                                    <img src="" alt="" id="modalImage">
                                </div>
                            </div>
                            <div>
                                <span>Full Name:</span>
                                <div>
                                    <input id="modalName" name="fullname" type="text">
                                </div>
                            </div>
                            <div>
                                <span>Email:</span>
                                <div>
                                    <input name="email" id="modalMail" type="text">
                                </div>
                            </div>
                            <div>
                                <span>BVN:</span>
                                <div>
                                    <input name="bvn" id="modalBvn" type="text">
                                </div>
                            </div>
                            <div>
                                <span>Account Number:</span>
                                <div>
                                    <input name="accountnum" id="modalAccount" type="text">
                                </div>
                            </div>
                            <div>
                                <span>Date of birth:</span>
                                <div>
                                    <input name="dob" id="modalDate" type="text">
                                </div>
                            </div>
                            <div>
                                <span>Phone Number:</span>
                                <div>
                                    <input name="phoneno" id="modalPhone" type="text">
                                </div>
                            </div>
                            <div>
                                <span>Next of kin:</span>
                                <div>
                                    <input name="nok" id="modalKin" type="text">
                                </div>
                            </div>
                            <div>
                                <span>Address of Next of kin:</span>
                                <div>
                                    <input name="addressNok" id="modalAddress" type="text">
                                </div>
                            </div>
                            <div>
                                <span>Phone number of Next of kin:</span>
                                <div>
                                    <input name="phoneNok" id="modalPhoneKin" type="text">
                                </div>
                            </div>
                            <div hidden>
                                <span>Phone number of Next of kin:</span>
                                <div>
                                    <input name="index" id="params" type="text">
                                </div>
                            </div>
                            @csrf
                            <div>
                                <button class="btn btn-success">Update Details</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="right d-flex">
                    <h2>Welcome Admin</h2>
                </div>
                <div class="bar">
                    <i class="fa fa-bars text-warning" onclick="handleMenu()"></i>
                </div>
                <div class="left">
                    <button class="btn btn-dark"><a href="">LOGOUT</a></button>
                    <button class="btn btn-danger"><a href="">HOME</a></button>
                </div>
            </div>
            <div class="body">
                <div class="menu">
                    <div><button><a href="">Restric User</a></button></div>
                    <div><button><a href="">Grant Loan</a></button></div>
                    <div><button><a href="">All Transaction</a></button></div>
                    <div><button><a href="">Account Statement</a></button></div>
                    <div><button><a href="">Complaints</a></button></div>
                    <div><button><a href="">Chat</a></button></div>
                </div>
                <div class="menu2" id="menu2" hidden>
                    <div><button><a href="">Restric User</a></button></div>
                    <div><button><a href="">Grant Loan</a></button></div>
                    <div><button><a href="">All Transaction</a></button></div>
                    <div><button><a href="">Account Statement</a></button></div>
                    <div><button><a href="">Complaints</a></button></div>
                    <div><button><a href="">Chat</a></button></div>
                    <div><button><a href="">Home</a></button></div>
                    <div> <button><a href="">Logout</a></button></div>

                </div>

                <form action="{{url('admin/dashboard')}}" method="post" enctype="multipart/form-data" class="content">
                    <div>
                        <span>Profile Picture:</span>
                        <div>
                            <input id="profilepic" type="file" value="{{old('profilepic')}}" name="profilepic"
                                class="{{$errors->has('profilepic') ? 'is-inavlid' : '' }}">
                            @error('profilepic')
                            <div>
                                <small class="text-danger">{{$message}}</small>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <span>Full Name:</span>
                        <div>
                            <input id="fullname" type="text" value="{{old('fullname')}}" name="fullname"
                                class="{{$errors->has('fullname') ? 'is-inavlid' : '' }}">
                            @error('fullname')
                            <div>
                                <small class="text-danger">{{$message}}</small>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <span>Email:</span>
                        <div>
                            <input type="text" value="{{old('email')}}" name="email"
                                class="{{$errors->has('email') ? 'is-inavlid' : '' }}">
                            @error('email')
                            <div>
                            </div><small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <span>BVN:</span>
                        <div>
                            <input type="text" value="{{old('bvn')}}" name="bvn"
                                class="{{$errors->has('bvn') ? 'is-inavlid' : '' }}">
                            @error('bvn')
                            <div>
                            </div><small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <span>Account Number:</span>
                        <div>
                            <input id="accountnum" type="text" value="{{old('accountnum')}}" name="accountnum"
                                class="{{$errors->has('accountnum') ? 'is-inavlid' : '' }}">
                            @error('accountnum')
                            <div>
                                <small class="text-danger">{{$message}}</small>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <span>Date of birth:</span>
                        <div>
                            <input id="dob" type="date" value="{{old('dob')}}" name="dob"
                                class="{{$errors->has('dob') ? 'is-inavlid' : '' }}">
                            @error('dob')
                            <div>
                                <small class="text-danger">{{$message}}</small>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <span>Phone Number:</span>
                        <div>
                            <input id="phoneno" type="text" name="phoneno" value="{{old('phone')}}"
                                class="{{$errors->has('phoneno') ? 'is-inavlid' : '' }}">
                            @error('phoneno')
                            <div>
                                <small class="text-danger">{{$message}}</small>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <span>Next of kin:</span>
                        <div>
                            <input id="nok" type="text" name="nok" value="{{old('nok')}}"
                                class="{{$errors->has('nok') ? 'is-inavlid' : '' }}">
                            @error('nok')
                            <div>
                                <small class="text-danger">{{$message}}</small>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <span>Address of Next of kin:</span>
                        <div>
                            <input id="addressNok" type="text" name="addressNok" value="{{old('addressNok')}}"
                                class="{{$errors->has('addressNok') ? 'is-inavlid' : '' }}">
                            @error('addressNok')
                            <div>
                                <small class="text-danger">{{$message}}</small>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <span>Phone number of Next of kin:</span>
                        <div>
                            <input id="phoneNok" type="text" name="phoneNok" value="{{old('phoneNok')}}"
                                class="{{$errors->has('phoneNok') ? 'is-inavlid' : '' }}">
                            @error('phoneNok')
                            <div>
                            </div><small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    @csrf
                    <div>
                        <button id="complete" class="btn btn-warning">Complete Registration</button>
                    </div>

                </form>
            </div>
            </div>
        </main>
    </main>
</body>

</html>
<script>
    let allUser =@json($allUser);
    console.log(allUser);
    if (allUser) {
        for (let i = 0; i < allUser.length; i++) {
            document.getElementById('content').innerHTML += `
        <table> 
         <th>S/N</th>   
         <th>Name</th>   
         <th>Id</th>   
         <th>Action</th> 
         <tr>
            <td>${i + 1}</td>
            <td>${allUser[i].fullname}</td>
            <td>${allUser[i].id}</td>
            <td><button class="btn btn-success" onclick="handleMore(${i})">See More</button></td>
            </tr>  
        <table>
        `;
        }
    }

    function handleUser() {
        document.getElementById('myModal').hidden = false;
    }
    function handleClose() {
        document.getElementById('myModal').hidden = true;
    }
    function handleMore(params) {
        document.getElementById('myModal').hidden = true;
        document.getElementById('newModal').hidden = false;
        document.getElementById('modalImage').src = `{{url('/storage/${allUser[params].profilepic}')}}`;
        document.getElementById('modalName').value = allUser[params].fullname;
        document.getElementById('modalMail').value = allUser[params].email;
        document.getElementById('modalPhone').value = allUser[params].phoneno;
        document.getElementById('modalBvn').value = allUser[params].bvn;
        document.getElementById('modalAccount').value = allUser[params].accountnum;
        document.getElementById('modalDate').value = allUser[params].dob;
        document.getElementById('modalKin').value = allUser[params].nok;
        document.getElementById('modalAddress').value = allUser[params].addressNok;
        document.getElementById('modalPhoneKin').value = allUser[params].phoneNok;
        document.getElementById('params').value = [params];
    }
    function handleCloseTwo() {
        document.getElementById('newModal').hidden = true;
        document.getElementById('myModal').hidden = false;
    }

    function handleMenu(params) {
        document.getElementById('menu2').hidden = !document.getElementById('menu2').hidden;
    }

</script>