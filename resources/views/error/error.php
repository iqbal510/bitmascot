@if (session("ErrorMsg"))
<div class="alert alert-danger alert-dismissible fade show">
	<strong>Warning!</strong> {{ session("ErrorMsg") }}
	<button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
@endif