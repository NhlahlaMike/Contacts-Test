@if(count($errors) > 0)
  @foreach($errors->all() as $error)
    <div id="success" class="alert alert-danger">
        {{$error}}
    </div>
  @endforeach
@endif

@if(session('success'))
  <div id="success" class="alert alert-success">
    {{session('success')}}
  </div>

  <script>
  	setTimeout(function(){
    if ($('#success').length > 0) {
      $('#success').remove();
    }
  }, 3000)
  </script>
@endif

@if(session('failed'))
  <div id="success" class="alert alert-danger">
    {{session('failed')}}
  </div>

<script>
	setTimeout(function(){
  if ($('#success').length > 0) {
    $('#success').remove();
  }
}, 5000)
</script>
@endif
