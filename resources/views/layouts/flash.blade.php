@if (Session::has('success.content'))
    <div id="auto-notify-success"
        data-title="{{Session('success.title')}}"
        data-content="{{Session('success.content')}}"
    ></div>
@endif
@if (Session::has('danger.content'))
    <div id="auto-notify-danger"
        data-title="{{Session('danger.title')}}"
        data-content="{{Session('danger.content')}}"
    ></div>
@endif
<!--

    <div class="container-fluid m-0 fixed-bottom alert alert-dark">
        <span class="align-middle">
            {{ Session()->get('permission_cookies','session flash ici') }}
        </span>
            <form action="/permissions" method="POST" class="form-inline float-right">
                {{ csrf_field() }}
                <input type="submit" value="Ok" class="btn btn-outline-warning">
            </form>
    </div>
-->