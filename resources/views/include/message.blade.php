@if(session('success'))
<div class="alert alert-success">
{{session('success')}}
</div>
  @endif


  @if(session('edit_success'))
  <div class="alert alert-success">
  {{session('edit_success')}}
  </div>
  @endif


 @if(session('delete_success'))
  <div class="alert alert-success">
  {{session('delete_success')}}
  </div>
  @endif



  

