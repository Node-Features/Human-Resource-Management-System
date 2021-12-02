@extends('layouts.admin')
@section('page-title')
{{__('Index')}}
    {{__('Payroll')}}/
    
    {{$years}}/
    {{$month}}
@endsection
@section('content')
@php
    $date=date('Y-m-d');
@endphp

    <div class="container-fluid">
       

                        @if (Session::has('message'))
                        <div class=" container-fluid alert alert-info">{{ Session::get('message') }}</div>
                        @endif 
        
        <!-- Main content goes here -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                   
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Base Salary</th>
                                        
                                        <th>NSSF</th>
                                        <th>HESLB</th>
                                        <th>Loans</th>
                                        <th>Advances</th>
                                        <th>Deductions</th>
                                        <th>Earnings</th>
                                        <th>Net Salary</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Base Salary</th>
                                      
                                        <th>NSSF</th>
                                        <th>HESLB</th>
                                        <th>Loans</th>
                                        <th>Advances</th>
                                        <th>Deduction</th>
                                        <th>Earnings</th>
                                        <th>Net Salary</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                @php
                                        $i=0
                                    @endphp
                                @foreach ( $names as $name )
                                    @php
                                    $i=$i+1;
                                    @endphp
                                    <tr class="gradeA">
                                        <td>{{$i}}</td>
                                        <td>
                                             @php
                                                $userid=$name->employee_id;
                                                $generals=App\GeneralPayroll::select()
                                                ->where('EMPLOYEEID',$userid)             
                                                ->get();
                                                
                                            @endphp
                                            
                                            @if(count($generals)==1)
                                            <a href="/finance/updatepay/{{$name->employee_id}}">{{$name->name}} </a>
                                            @else
                                            <a href="/finance/addpay/{{$name->employee_id}}">{{$name->name}} </a>
                                            @endif
                                        </td>
                                        <td>{{$name->BASESALARY}}</td>
                                
                                        <td>
                                            @php
                                                $nssf=$name->BASESALARY*(10/100)
                                            @endphp
                                            -{{$nssf}}
                                        </td>
                                        <td>
                                            @php
                                                if(($name->ISHESLB)==1){
                                                    $heslb=$name->BASESALARY*(15/100);
                                                }else{
                                                    $heslb=0;  
                                                }
                                                
                                            @endphp
                                            -{{$heslb}}
                                        </td>
                                        <td>
                                            
                                            @foreach ( $generals as $general)
                                            -{{$general->LOAN}}
                                            @endforeach
                                            
                                        </td>
                                        <td>
                                          
                                            @foreach ( $generals as $general)
                                            -{{$general->ADVANCE}}
                                            @endforeach
                                        </td>
                                        <td>
                                    
                                            @foreach ( $generals as $general)
                                            -{{$general->DEDUCTIONS}}
                                            @endforeach
                                        </td>
                                        <td>
                                        @foreach ( $generals as $general)
                                            {{$general->EARNINGS}}
                                            @endforeach
                                        </td>
                                        <th>
                                        @foreach ( $generals as $general)
                                            {{$general->NETSALARY}}
                                            @endforeach
                                        </th>
                                    </tr>
                             
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection