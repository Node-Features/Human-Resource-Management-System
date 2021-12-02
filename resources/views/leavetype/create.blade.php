<div class="card bg-none card-box">
    {{Form::open(array('url'=>'leavetype','method'=>'post'))}}
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                {{Form::label('title',__('Leave Type'),['class'=>'form-control-label'])}}
                {{Form::text('title',null,array('class'=>'form-control','placeholder'=>__('Enter Leave Type Name')))}}
                @error('title')
                <span class="invalid-name" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        {{Form::label('type',__('Leave Type'))}}
                <select name="type_id" id="leave_type_id" class="form-control select2">
                   
                <option value="1">Carrying allowed </option>   
                <option value="0">Carrying not allowed</option>    
                
                       
                </select>
        <div class="col-md-12">
            <div class="form-group">
                {{Form::label('year',__('Year'),['class'=>'form-control-label'])}}
                {{Form::text('year',null,array('class'=>'form-control','placeholder'=>__('Year')))}}
                @error('year')
                <span class="invalid-name" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                {{Form::label('days',__('Days Per Year'),['class'=>'form-control-label'])}}
                {{Form::number('days',null,array('class'=>'form-control','placeholder'=>__('Enter Days / Year')))}}
            </div>
        </div>
        <div class="col-12">
            <input type="submit" value="{{__('Create')}}" class="btn-create badge-blue">
            <input type="button" value="{{__('Cancel')}}" class="btn-create bg-gray" data-dismiss="modal">
        </div>
    </div>
    {{Form::close()}}
</div>
