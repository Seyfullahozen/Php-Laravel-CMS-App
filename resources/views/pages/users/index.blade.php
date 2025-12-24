@extends('layouts.App.app')

@section('content')
    <span> Yapım aşamasında... </span>
@endsection

@section('js')
    <script type="text/javascript">
        var checkInterval = setInterval(function () {
            if (app.loader !== undefined && app.loader !== null) {
                app.loader.setModule("Users")
                clearInterval(checkInterval);
            }
        }, 500)
    </script>
@endsection
