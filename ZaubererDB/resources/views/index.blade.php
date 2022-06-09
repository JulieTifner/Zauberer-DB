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
    @include('components.dropdown')
    <h2>Fritz's Datenbank</h2>
            <div class="wrapper">
                @foreach($tricks as $trick)
                    <div class="box">1
                        <div class="content">
                            <h3>{{ $trick->trickname }}</h3>
                                <table>
                                <tr>
                                    <td><strong>Art</strong></td>
                                    <td>{{ $trick->style->type }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Form</strong></td>
                                    <td>{{ $trick->performance->name }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Rating</strong></td>
                                    <td>{{ $trick->rating }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Lagerort</strong></td>
                                    <td>{{ $trick->person_storage->firstname }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Zeit</strong></td>
                                    <td>{{ $trick->time }} min</td>
                                </tr>
                                  <tr>
                                    <td><strong>Erfassung</strong></td>
                                    <td>{{ date('d-m-Y', strtotime($trick->created_at)); }}</td>
                                </tr>
                                </table>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
    </body>
</html>
