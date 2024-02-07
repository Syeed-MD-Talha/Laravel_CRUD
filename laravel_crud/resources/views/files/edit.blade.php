<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit here</h1>
    <div>
       @if ($errors->any())
        <ul>
           @foreach ($errors->all() as $error)
               <li>{{$error}}</li>
           @endforeach
        </ul>
           
       @endif
    </div>

  <form action="{{route('update',['product'=>$product])}}"method="post">
     @csrf
     @method('put')
     <div>
        Name:<input type="text"name="name" value="{{$product->name}}"/>
     </div> <br>
     <div>
        <label>Qty</label>
        <input type="text" name="qty" value={{$product->qty}}>
     </div>
     <div><br>
        <label>Price</label>
        <input type="text" name="price" placeholder="Price" value={{$product->price}}>
     </div>
     <div><br>
        <label>Description</label>
        <input type="text" name="description" value={{$product->description}}>
     </div><br>
     <input type="submit" value="Update">
  </form>
</body>
</html>