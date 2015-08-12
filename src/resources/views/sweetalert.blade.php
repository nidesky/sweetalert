@if (Session::has('sweetAlert'))
    <script >
        swal({
            title: "{{ array_get(Session::get('sweetAlert'), 'title') }}",
            text: "{{ array_get(Session::get('sweetAlert'), 'msg', '') }}",
            type:  "{{ array_get(Session::get('sweetAlert'), 'type', '') }}",
            confirmButtonText: '确定'
        });
    </script>
@endif