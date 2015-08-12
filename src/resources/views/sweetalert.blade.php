@if (Session::has('sweetAlert'))
    <script >
        swal("{{ array_get(Session::get('sweetAlert'), 'title') }}", "{{ array_get(Session::get('sweetAlert'), 'msg', '') }}", "{{ array_get(Session::get('sweetAlert'), 'type', '') }}");
    </script>
@endif