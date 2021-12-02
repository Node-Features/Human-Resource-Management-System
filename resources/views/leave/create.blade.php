<div class="card bg-none card-box">
    {{Form::open(array('url'=>'leave','method'=>'post'))}}
    @if(\Auth::user()->type !='employee')
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {{Form::label('employee_id',__('Employee'))}}
                    {{Form::select('employee_id',$employees,null,array('class'=>'form-control select2','id'=>'employee_id','placeholder'=>__('Select Employee')))}}
                </div>
            </div>
        </div>
    @endif
            

@php
$dayscarried=($totaldaysbefore[0]->DAY)-($daysusedbefore[0]->DAY); 

@endphp


    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                {{Form::label('leave_type_id',__('Leave Type'))}}
                <select name="type_id" id="leave_type_id" class="form-control select2">
                        @foreach($leavetypes as $leave)
                        @php
                            if($leave->type_id == 1){
                                    $daysallowed=$leave->days+$dayscarried;
                            }else{
                                $year=date('Y');
                                $daysused=\App\Leave::select(\DB::raw('round(SUM(total_leave_days),0) as DAY'))->where('yearOf','=',$year)
                                ->where('employee_id',$employees[0]->id)
                                ->where('status','Completed')
                                ->where('leave_id',$leave->id)
                                ->get();
                                $daysallowed=($leave->days)-($daysused[0]->DAY); 
                                
                            }
                            
                        @endphp
                      
                        <option value="{{ $leave->type_id }}|{{$daysallowed}}|{{ $leave->id }}">{{ $leave->title }} (<p class="float-right pr-5">{{$daysallowed}}</p>)</option>
                        
                        @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {{Form::label('start_date',__('Start Date'))}}
                {{Form::text('start_date',null,array('class'=>'form-control datepicker'))}}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{Form::label('end_date',__('End Date'))}}
                {{Form::text('end_date',null,array('class'=>'form-control datepicker'))}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                {{Form::label('leave_reason',__('Leave Reason'))}}
                {{Form::textarea('leave_reason',null,array('class'=>'form-control','placeholder'=>__('Leave Reason')))}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                {{Form::label('remark',__('Remark'))}}
                {{Form::textarea('remark',null,array('class'=>'form-control','placeholder'=>__('Leave Remark')))}}
            </div>
        </div>
        <div class="col-12">
            <input type="submit" value="{{__('Create')}}" class="btn-create badge-blue">
            <input type="button" value="{{__('Cancel')}}" class="btn-create bg-gray" data-dismiss="modal">
        </div>
    </div>
    {{Form::close()}}
</div>
