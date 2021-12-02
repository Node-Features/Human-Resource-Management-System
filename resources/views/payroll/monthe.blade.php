@extends('layouts.admin')
@section('page-title')
    {{__('Edit')}}
    {{__('Payroll')}}
    {{$years}}
@endsection

@section('content')
<br>

    <div class="container-fluid">
    

        <!-- Main content goes here -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                   
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover  ">
                                <thead>
                                    <tr>
                                    
                                        <th>Month</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        
                                        <th>Month</th>

                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr class="gradeA">
                                       
                                        <td>
                                            
                                            <a href="../edit/{{$years}}/{{1}}">January</a>
                                        </td> 
                                    </tr>
                                    <tr class="gradeA">
                                       
                                        <td>
                                            <a href="../edit/{{$years}}/{{2}}" >February</a>
                                        </td> 
                                    </tr>
                                    <tr class="gradeA">
                                        
                                        <td>
                                            <a href="../edit/{{$years}}/{{3}}" >March</a>
                                        </td> 
                                    </tr>
                                    <tr class="gradeA">
                                        
                                        <td>
                                            <a href="../edit/{{$years}}/{{4}}">April</a>
                                        </td> 
                                    </tr>
                                    <tr class="gradeA">
                                        
                                        <td>
                                            <a href="../edit/{{$years}}/{{5}}" >May</a>
                                        </td> 
                                    </tr>
                                    <tr class="gradeA">
                                      
                                        <td>
                                            <a href="../edit/{{$years}}/{{6}}" >June</a>
                                        </td> 
                                    </tr>
                                    <tr class="gradeA">
                                        
                                        <td>
                                            <a href="../edit/{{$years}}/{{7}}" >July</a>
                                        </td> 
                                    </tr>
                                    <tr class="gradeA">
                                        
                                        <td>
                                            <a href="../edit/{{$years}}/{{8}}" >August</a>
                                        </td> 
                                    </tr>
                                    <tr class="gradeA">
                                        
                                        <td>
                                            <a href="../edit/{{$years}}/{{9}}">September</a>
                                        </td> 
                                    </tr>
                                    <tr class="gradeA">
                                        
                                        <td>
                                            <a href="../edit/{{$years}}/{{10}}">October</a>
                                        </td> 
                                    </tr>
                                    <tr class="gradeA">
                                        
                                        <td>
                                            <a href="../edit/{{$years}}/{{11}}">November</a>
                                        </td> 
                                    </tr>
                                    <tr class="gradeA">
                                        
                                        <td>
                                            <a href="../edit/{{$years}}/{{12}}" >December</a>
                                        </td> 
                                    </tr>
                              
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>





@endsection