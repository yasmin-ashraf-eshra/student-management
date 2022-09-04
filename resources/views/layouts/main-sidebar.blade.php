<div class="wrapper">
    <div class="sidebar">
                <div class="user-info">
                    <img alt="user-img" class="img" src="{{URL::asset('imgs/Grey person.png')}}"><span class="avatar-status profile-status bg-green"></span>
                </div>
        <ul>
            <li><a href="{{ url('/' . $page='dashboard') }}">Home</a></li>
            <li><a href="{{ url('/' . $page='studentstable') }}">Students</a></li>
            <li><a href="{{ url('/' . $page='welcome') }}">About</a></li>
        </ul>
    </div>
</div>
