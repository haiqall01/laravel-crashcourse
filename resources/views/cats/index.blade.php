<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cat</title>
</head>
<body>
   <h1>my cat name is laravel</h1>
   
   <table border="1">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Breed</th>
                <th>Age</th>
                <th>Color</th>
                <th>Action</th>
            </tr>    
        </thead>
        <tbody>
            @forelse ($cats as $cat)
                <tr>
                    <td>
                        <img src="{{ $cat->image_url }}" alt="{{ $cat->name }}" width="100">
                    
                    </td>
                    <td>{{ $cat->name }}</td>
                    <td>{{ $cat->breed }}</td>
                    <td>{{ $cat->age }}</td>
                    <td>{{ $cat->color }}</td> 
                    <td>
                        <form action="{{ route('cats.destroy', $cat->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</buttton>
                        </form> 
                    
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No Cats Found</td>
                </tr>
            @endforelse
        </tbody>
   </table>
</body>
</html>