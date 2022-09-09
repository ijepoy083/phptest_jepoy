<!DOCTYPE HTML>
<html>
<head>
   <title>User Card -    {{ $user->name }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>
</head>
<body class="is-preload">
<div id="wrapper">
    <section id="main">
        <header>
            <span class="avatar"><img src="{{ asset('images/users') }}/{{ $user->id }}.jpg" alt="" /></span>
            <h1>{{ $user->name }}</h1>

                <form onsubmit="return confirm('Do you really want to add thi user?');" method="POST" action="{{ url('update_user/'. $user->id ) }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="password" class="form-control" placeholder="Enter Password" value="720DF6C2482218518FA20FDC52D4DED7ECC043AB" name="password" autocomplete="off" required>
                </br>
                <input type="text" class="form-control" placeholder="Enter Comment" value="{{  $user->comments  }}" name="comments" autocomplete="off" required>
            </header>
            @if ($errors->any())
            <div class="alert alert-danger">
               @foreach ( $errors-> all () as $error )
                   <div> {{ $error }} </div>
               @endforeach
            </div>
            @endif
            @if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
            <button type="submit" class="btn btn-primary btn-flat" name="save"><i class="fa fa-save"></i> Save</button>
                  </form>
        </section>
    <footer id="footer">
        <ul class="copyright">
            <li>&copy; Pictureworks</li>
        </ul>
    </footer>

</div>
<script>
    if ('addEventListener' in window) {
        window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
        document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
    }
</script>
</body>
</html>
