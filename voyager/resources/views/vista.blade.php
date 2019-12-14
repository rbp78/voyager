@extends('layouts.app')

@section('content')

<div class="table-responsive-sm">

<table class="table table-dark table-bordered">
	<thead>
    <tr>
      <th scope="col">Key</th>
      <th scope="col">Table Name</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    	@forelse($permission as $permissionItem)
      	<th scope="row">{{$permissionItem['key']}}</th>
      	<td>{{$permissionItem['table_name']}}</td>
    </tr>
		@empty
			no hay persmisos q mostrar
		@endforelse
  </tbody>

</table>
</div>
@endsection

