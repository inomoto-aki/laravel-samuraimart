<div>
  <h2>Edit Product</h2>
</div>
<div>
  <a heref="{{ route('products.index') }}">Back</a>
</div>

<form action="{{ route('products.update',$product->id) }}" method="POST">
  @
  @method('PUT')

  <div>
    <strong>Description:</strong>
    <input typpe="number" name="price" value="{{ $product->price }}">
  </div>
  <div>
    <strong>Price:</strong>
    <input type="number" name="price" value="{{ $product->price }}">
  </div>
  <div>
    <strong>Category:</strong>
    <select name="category_id">
      @foreach($categories as $category)
      @if ($category->id == $product->category_id)
      <option value="{{ $category->id }}" selected>{{ $category->name }} </option>
      @else
      <option value="{{ $category->id }}">{{ $category->name}}</option>
      @endif
      @endforeach
    </select>
  </div>
  <div>
    <button type="submit">Submit</button>
  </div>
</form>