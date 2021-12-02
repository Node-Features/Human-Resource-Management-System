@extends('layouts.admin')
@section('page-title')
{{__('Create')}}
    {{__('Payroll')}}
@endsection
@section('content')

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
                                    
                                        <th>Year</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    
                                </tfoot>
                                <tbody>
                                    <tr class="gradeA">
                                        
                                        <td>
                                            <a href="monthe/{{$years}}" >{{$years}}</a>
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