@auth()
	<form action="{{ route('productos.destroy', $product->id) }}" method="post">
		@csrf
		@method('DELETE')
		<input type="submit" class="btn btn-danger" value="Eliminar">
	</form>
@endauth
