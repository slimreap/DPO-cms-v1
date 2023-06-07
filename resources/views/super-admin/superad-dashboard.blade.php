
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Admin Dashboard</title>
</head>
<body class="">


          


    {{-- Container for displaying all users --}}

<section class="container">



   <a href="{{route('logout')}}" class="ml-2">logout</a>

   {{-- My profile for superadmin --}}
   <x-Modals.superadmin-prfmodal>
    <form action="" method="post">
      @csrf
      <x-Forms.profile-picture imgurl="{{asset('storage/img/')}}" />

      <div class="flex flex-col place-items-center">
        <x-Forms.input class="" name="name" placeholder="{{$superadmin->name}}"/>
          <br>
        <x-Forms.input type="password" name="password" placeholder="" class=""/>
      
        <button class="rounded-lg bg-red-900 text-white w-10 h-10 mt-2">Save</button>
      </div>

    </form>
   </x-Modals.superadmin-prfmodal>
   <button type="button"
   x-data x-on:click="$dispatch('open-modal-2')"
   >My profile</button>
   

    {{-- Modal for confirmation of changed user role --}}

    <table class="table relative">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Role</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
          
          <tr>
              <td>{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->role}}</td>
              <td>
                <button type="button"
                x-data x-on:click="$dispatch('open-modal')"
                class=""
                onclick="myfunction({{$user->id}})"
                id="id"
                >Change Role</button>
              </td>
        
            </tr>    
              
          @endforeach
        </tbody>
      
      </table>

    
  <form action="{{route('super-admin.update')}}" method="post" class="">
        @csrf
 <x-Modals.superadmin-modal>
        
      <div class="flex flex-col place-items-center mt-5">
        <span class="font-bold text-white">Choose a role</span>
        
    <input type="hidden" name="userid" id="userid">
            <select name="role" id="" class="">
                <option value="1">Admin</option>
                <option value="2">Editor</option>
             </select>
    
             <div class="flex flex-row gap-4">
                <button type="submit">
                    Save
                </button>

                 <button>
                    Cancel
                </button>
          </div>
             </div>
    
  </x-Modals.superadmin-modal>
    
    
    </form>
      {{-- <button type="submit">Save</button> --}}
    </section>


    <script>

        function myfunction(id){
        user_id = document.getElementById('userid');
        
        user_id.value = id;

         //The id where to pass the value

         //The id of the modal to show
          };

       </script>

       
</body>
</html>