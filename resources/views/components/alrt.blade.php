@if (Session::has('message'))
    <script>
        swal("message", "{{ Session::get('message')}} ", 'success', {
            button: true,
            button: "ok"
            });
    </script>
@endif

