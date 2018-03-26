@extends('layouts.admin')

@section('content')
    <h1>Users</h1>
     <table class="table table-striped">
        <thead>
           <tr>
             <th>ID</th>
             <th>Photo</th>
             <th>Name</th>
             <th>Email</th>
             <th>Role</th>
             <th>Status</th>
             <th>Created</th>
             <th>Updated</th>
           </tr>
         </thead>
         <tbody>
         @if($users)
             @foreach($users as $user)
          <tr>
             <td>{{$user->id}}</td>
             <td><img height="50px" class="" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/50x50'}}" alt=""></td>
             <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
             <td>{{$user->email}}</td>
             <td>{{$user->role ? $user->role->name : "user has no role"}}</td>
             <td>{{$user->is_active = 1 ? 'Active': 'Not active'}}</td>
             <td>{{$user->created_at->diffForHumans()}}</td>
             <td>{{$user->updated_at->diffForHumans()}}</td>

              {{--<td>{{$user->id}}</td>--}}
              {{--<td>{{$user->name}}</td>--}}
              {{--<td>{{$user->email}}</td>--}}
              {{--<td>{{$user->roles->name}}</td>--}}
              {{--<td>{{$user->email}}</td>--}}
              {{--<td>{{$user->created_at->diffForHumans()}}</td>--}}
              {{--<td>{{$user->updated_at->diffForHumans(}}</td>--}}
          </tr>
            @endforeach
         @endif
        </tbody>
      </table>
@stop