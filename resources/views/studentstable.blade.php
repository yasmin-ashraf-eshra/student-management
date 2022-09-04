<x-app-layout>
        <body>
            <table width="400px" align="center">
                <caption>Students Data</caption>
                <thead>
                    <tr>
                        <th width="15%">ID</th>
                        <th>Name</th>
                        <th width="30%">Email</th>
                        <th>Level</th>
                        <th width="15%">GPA</th>
                        <th width="30%">Contact-Info</th>
                    </tr>                
                    <tbody>
                        @foreach($student as $key => $data)
                            <tr>    
                                <th>{{$data->id}}</th>
                                <th>{{$data->name}}</th>
                                <th>{{$data->email}}</th>     
                                <th>{{$data->level}}</th>  
                                <th>{{$data->gpa}}</th> 
                                <th>{{$data->contact}}</th>         
                            </tr>
                        @endforeach
                    </tbody>
                </thead>
            </table>
        </body>
    </x-app-layout>
