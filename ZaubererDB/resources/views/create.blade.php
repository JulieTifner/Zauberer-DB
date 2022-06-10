<!DOCTYPE html>
<html>
<head>
<title>Zauberer</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
    <body>
        @include('components.nav')
    <div class="page">
        <form action="{{route('store') }}" enctype="multipart/form-data" method="POST">
        <div class="contents" style="display: flex;">

            <div class="left-bar">
                <div class="image">
                    <img id="preview-image-before-upload">
                </div>
                
                <h3>Titel</h3>
                <table>
                    <tr>
                        <td><strong>Art</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Zeit</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Form</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Rating</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Lagerort</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Erfassung</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Vorführung</strong></td>
                    </tr>
            
                </table>
                    <br>
                        <p><strong>Trick Info</strong></p>

                    <div class="info">
                    <p>Beschreibung, sonstige Infos</p>
                    </div> 
            
            </div>
            <div class="right-bar">
    
                    @csrf
                    <label for="Trickname">Trickname</label><br>
                    <input type="text" name="trickname" id="">
                    <textarea name="description"></textarea>

                    <div class="categories">
                        <p>Kategorien</p>
                        <table>
                            <tr>
                                <td><strong>Art</strong></td>
                                <td>
                                    <div class="dropdown">
                                        <select class="dropbtn" id="type" name="type">
                                            @foreach($styles as $style)
                                                <option value="{{ $style->id }}" name="type">{{ $style->type }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </td>
                            </tr>
                
                            <tr>
                                <td><strong>Form</strong></td>
                                <td>
                                    <div class="dropdown">
                                        <select class="dropbtn" id="name" name="performance_name">
                                            @foreach($performances as $performance)
                                                <option value="{{ $performance->id }}" name="ame">{{ $performance->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Rating</strong></td>
                                <td>
                                    <div class="dropdown">
                                        <select class="dropbtn" id="cars" name="rating"> 
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>     
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Lagerort</strong></td>
                                <td>
                                    <div class="dropdown">
                                        <select class="dropbtn" id="firstname" name="firstname_storage">
                                            @foreach($persons as $person)
                                                <option value="{{ $person->id }}" name="firstname_storage">{{ $person->firstname }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Vorführung</strong></td>
                                <td>
                                    <div class="dropdown">
                                        <select class="dropbtn" id="firstname" name="firstname_act">
                                            @foreach($persons as $person)
                                                <option value="{{ $person->id }}" name="firstname_act">{{ $person->firstname }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Zeit</strong></td>
                                <td>
                                        <input type="text" name="time" value="" id="">
                                </td>
                            </tr>                 
                            </table>
                        </div>
                        <button class="btn">Speichern</button>
                        <input type="file" name="image" placeholder="Bild wählen" id="image">
        </form>
        </div> 
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 
    <script type="text/javascript">
          
        $(document).ready(function (e) {
       
        $('#image').change(function(){
                
        let reader = new FileReader();
     
        reader.onload = (e) => { 
     
          $('#preview-image-before-upload').attr('src', e.target.result); 
        }
     
        reader.readAsDataURL(this.files[0]); 
       
       });
       
    });
     
    </script>
    </div>

    </body>
</html>