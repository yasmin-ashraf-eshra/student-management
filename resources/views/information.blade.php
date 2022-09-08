<x-app-layout>
<div>
 @foreach($student as $key => $data)
    @if ($data->name == Auth::user()->name)
      <p> ID:{{$data->id}}</p><br>                        
      <p>Name:{{$data->name}}</p><br>                              
      <p>Email:{{$data->email}}</p><br>                              
      <p>Level:{{$data->level}}</p><br>                                    
       <p>GPA:{{$data->gpa}}</p><br>                                
       <p>Contact:{{$data->contact}}</p><br>    
    @endif                         
@endforeach
</div>
</x-app-layout>