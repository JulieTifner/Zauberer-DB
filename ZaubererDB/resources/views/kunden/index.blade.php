<!DOCTYPE html>
<html>
<head>
    <title>Zauberer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
@include('components.nav')
<div class="page">
    <h2>Kunden Datenbank</h2>
    <div class="wrapper">
        <a class="companyBtn" href="{{ url('customer/profile') }}">
            <div class="box">1
                <div class="content">
                    @include('components.kunden_table')
                </div>
            </div>
        </a>  
        <div class="box">2
            <div class="content">
                @include('components.kunden_table')
            </div>
        </div>
        <div class="box">3
            <div class="content">
                @include('components.kunden_table')
            </div>
        </div>
        <div class="box">4
            <div class="content">
                @include('components.kunden_table')
            </div>
        </div>
        <div class="box">5
            <div class="content">
                @include('components.kunden_table')
            </div>
        </div>
        <div class="box">6
            <div class="content">
                @include('components.kunden_table')
            </div>
        </div>
        <div class="box">7
            <div class="content">
                @include('components.kunden_table')
            </div>
        </div>
        <div class="box">8
            <div class="content">
                @include('components.kunden_table')
            </div>
        </div>
    </div>
</div>
</body>
</html>

