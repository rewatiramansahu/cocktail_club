<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => ($errors->has('name')) ? 'form-control border-danger' : 'form-control','maxlength' => 255]) !!}
    @error('name')
    <span class="text text-danger">{{ $message }}</span>
    @enderror
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => ($errors->has('email')) ? 'form-control border-danger' : 'form-control','maxlength' => 255]) !!}
    @error('email')
        <span class="text text-danger">{{ $message }}</span>
    @enderror
</div>

<!-- Role Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role_id', 'Role:') !!}
    {!! Form::select('role_id', $roleOption, $roleSelected, ['class' => ($errors->has('role_id')) ? 'form-control border-danger' : 'form-control']) !!}
    
    @error('role_id')
     <span class="text text-danger">{{ $message }}</span>
    @enderror
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', [''=>'Select Status', '1'=> 'Active', '0'=>'Disabled'], $statusSelected, ['class' => ($errors->has('status')) ? 'form-control border-danger' : 'form-control']) !!}
    
    @error('status')
     <span class="text text-danger">{{ $message }}</span>
    @enderror
</div>


    



