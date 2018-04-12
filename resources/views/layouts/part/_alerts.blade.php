<script>
    window.setTimeout(function() {
    $(".alert").fadeTo(200, 0).slideUp(200, function(){
        $(this).remove(); 
    });
}, 2000);
</script>

@if (session('success'))
    <div class="alert alert-success" style="width:50%; margin:auto; text-align:center">
        {{ session('success') }}
    </div>
@endif

@if (session('info'))
    <div class="alert alert-info" style="width:50%; margin:auto; text-align:center">
        {{ session('info') }}
    </div>
@endif

@if (session('danger'))
    <div class="alert alert-danger" style="width:50%; margin:auto; text-align:center">
        {{ session('danger') }}
    </div>
@endif