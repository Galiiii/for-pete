@include('partials.header')

<br>
<br>
<br>
<h5>Edit item</h5>
<form action="/updateProduct" method="POST">
    @csrf
    
    <input type="hidden" id="id" name="id" value="{{$product->id}}"> 
 
<div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <input 
      type="text" 
      class="form-control" 
      name="description"
      aria-describedby="emailHelp"
      value="{{$product->description}}">
     
    </div>


    <div class="mb-3">
      <label for="quantity" class="form-label">Quantity</label>
      <input 
      type="text" 
      class="form-control" 
      aria-describedby="emailHelp"
      name="quantity"
      value="{{$product->quantity}}">
    </div>



    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input 
      type="text" 
      class="form-control" 
      id="exampleInputEmail1" 
      aria-describedby="emailHelp"
      name="price"
      value="{{$product ->price}}">
    </div>


   
    
       

    <button type="submit" class="btn btn-success">Update</button>
  </form>