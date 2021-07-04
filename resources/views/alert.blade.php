@if(session('errors'))
    <div id='alert' class='normal'>
        <h4 style="margin: 0">Terjadi Error:</h4>
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    <h4>{{ $error }}</h4>
                </li>
            @endforeach
        </ul>
    </div>
    <div style="margin-bottom: 1.5rem"></div>
@endif
@if(session('success'))
    <div id='alert' class='normal'>
        <ul style="margin-top:0">
            <li>
                <h4>{{ session('success') }}</h4>
            </li>
        </ul>
    </div>
    <div style="margin-bottom: 1.5rem"></div>
@endif
