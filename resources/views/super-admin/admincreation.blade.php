<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="{{route('super-admin.create')}}" method="POST">

        @csrf
        <label for="name">name</label>
        <input type="text" name="name" id="name">

        <label for="email">Email</label>
        <input type="text" name="email" id="email">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <label for="role">Role</label>
       <select name="role" id="">
       <option value="0">Super Admin</option>
       <option value="1">Admin</option>
       <option value="2">Editor</option>
       </select>

       <button type="submit">Submit</button>
     
    </form>

</body>
</html>