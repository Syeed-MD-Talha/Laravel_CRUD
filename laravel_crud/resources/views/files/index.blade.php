<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <h3>This is Database Table</h3>
     <div>
         @if (session()->has('success'))
             <div>{{session('sucess')}}</div>
         @endif
     </div>
     <table border="2">
         <th>ID</th>
         <th>name</th>
         <th>qty</th>
         <th>price</th>
         <th>description</th>
         <th>Edit</th>
         <th>Delete</th>

         <h2>{{$products[2]->name}}</h2>

         @foreach ($products as $item)
             <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->qty}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->description}}</td>
                <td>
                    <a href="{{route('Edit',['path'=>$item])}}">Edit</a>
                </td>
                <td>
                    <form action="{{route('destroy',['product'=>$item])}}" method="post">
                         @csrf
                         @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
             </tr>
         @endforeach
     </table>
</body>
</html>