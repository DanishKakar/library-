<div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
    @if (Session::has('message'))
        <script>
            swal("!Good Job", "{{ Session::get('message')}} ", 'success', {
                button: true,
                button: "ok"
            });
        </script>
    @endif
    
</div>