<div class="options">
    <div class="dropdown">
        <select class="dropbtn" id="type" name="type">
            <option value="" name="type">A-Z</option>
            <option value="" name="type">Z-A</option>

        </select>
    </div>
    <div class="dropdown">
        <select class="dropbtn" id="type" name="type" value="ddd">
            <option style="display: none;">Vorführer</option>
            @foreach($persons as $person)
                <option value="{{ $person->firstname }}" name="type">{{ $person->firstname }}</option>
            @endforeach
        </select>
    </div>
    <div class="dropdown">
        <select class="dropbtn" id="type" name="type" value="ddd">
            <option style="display: none;">Art</option>
            @foreach($styles as $style)
                <option value="{{ $style->type }}" name="type">{{ $style->type}}</option>
            @endforeach
        </select>
    </div>
    <div class="dropdown">
        <select class="dropbtn" id="type" name="type" value="ddd">
            <option style="display: none;">Form</option>
            @foreach($performances as $performance)
                <option value="{{ $performance->name }}" name="type">{{ $performance->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="dropdown">
        <select class="dropbtn" id="type" name="type" value="ddd">
            <option style="display: none;">Vorführer</option>
            @foreach($persons as $person)
                <option value="{{ $person->firstname }}" name="type">{{ $person->firstname }}</option>
            @endforeach
        </select>
    </div>
    <div class="dropdown">
        <select class="dropbtn" id="type" name="type" value="ddd">
            <option style="display: none;">Zeit (min)</option>
            @foreach($times as $time)
                <option value="{{ $time->time }}" name="type">{{ $time->time}}</option>
            @endforeach
        </select>
    </div>

    <div class="dropdown">
        <select class="dropbtn" id="cars" name="rating"> 
            <option style="display: none;">Rating</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>     
        </select>
    </div>


    <div class="dropdown">
        <select class="dropbtn" id="type" name="type" value="ddd">
            <option style="display: none;">Erfassung</option>
            @foreach($saved_at as $saved)
                <option value="" name="type">{{ date('d-m-Y', strtotime($saved->created_at));}}</option>
            @endforeach
        </select>
    </div>


    <a class="button" href="{{ url('create') }}">Trick Hinzufügen</a>
    
    
    <button class="button">Auftrag Erstellen</button>
    
</div>