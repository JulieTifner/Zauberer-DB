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
    <h2>Profil</h2>

        <div class="contentProfile" style="display: flex;">
            <div class="left-bar-profile">
                <div class="placeholder">
                </div>
                <h3>Max Muster</h3>
                    <hr>
                <p>Admin</p>
            </div>
            <div class="profile-customer">
                <table>
                    <tr>
                        <td><strong>Adresse</strong></td>
                        <td>Musterstrasse 23</td>
                    </tr>
                    <tr>
                        <td><strong>PLZ</strong></td>
                        <td>8617</td>
                    </tr>
                    <tr>
                        <td><strong>Ort</strong></td>
                        <td>Narnja</td>
                    </tr>
                    <tr>
                        <td><strong>Webseite</strong></td>
                        <td>webseite.ch</td>
                    </tr>
                    <tr>
                        <td><strong>E-Mail</strong></td>
                        <td>riese.lauch@gmail.ch</td>
                    </tr>
                    <tr>
                        <td><strong>Registriert seit</strong></td>
                        <td>1.2.2000</td>
                    </tr>
            
                
                </table>
            </div>
        </div>
        <div class="profile-customers-btns">
          <a class="button" href="">Profil Bearbeiten</a>
        </div>
    
</div>
</body>
</html>


