<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Let's create a Product</h1>
    <div>
       @if ($errors->any())
        <ul>
           @foreach ($errors->all() as $error)
               <li>{{$error}}</li>
           @endforeach
        </ul>
           
       @endif
    </div>

  <form action="{{route('storePage')}}"method="post">
     @csrf
     @method('post')
     <div>
        Name:<input type="text"name="name"/>
     </div> <br>
     <div>
        <label>Qty</label>
        <input type="text" name="qty">
     </div>
     <div><br>
        <label>Price</label>
        <input type="text" name="price" placeholder="Price">
     </div>
     <div><br>
        <label>Description</label>
        <input type="text" name="description">
     </div><br>
     <input type="submit" value="create_table">
  </form>
</body>
</html>