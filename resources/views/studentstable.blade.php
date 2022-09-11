<x-app-layout>
        <body>
            <table width="700px" align="center" style="border-style: solid; border-width:10px;">
                <caption>Students Data</caption>
                <thead style="border-style: solid; border-width:10px;">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>GPA</th>
                        <th>Contact-Info</th>
                    </tr>                
                    <tbody  style="border-style: solid; border-width:10px;">
                        @foreach($student as $data)
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
