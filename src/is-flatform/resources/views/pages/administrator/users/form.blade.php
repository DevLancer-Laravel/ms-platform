<div class="container">
  @includeIf('flash::message')
  {!! Form::open(['url' => route('hr.users.store'), 'class' => 'form-submit', 'role' => 'form', 'id' => 'user-form', 'files' => true]) !!}
    <div class="form-body">
      <div class="row">
        <div class="col-12 col-sm-6">
          <div class="form-group">
            {{ Form::label('first_name', 'First Name') }}
            {{ Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First Name']) }}
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group">
            {{ Form::label('last_name', 'Last Name') }}
            {{ Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) }}
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group">
            {{ Form::label('name', 'Username') }}
            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Username']) }}
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group">
            {{ Form::label('confirm_password', 'Confirm Password') }}
            {{ Form::password('confirm_password', ['class' => 'form-control', 'placeholder' => 'Confirm Password']) }}
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group">
            {{ Form::label('roles', 'Roles') }}
            {{ Form::select('roles[]', $roles, null, ['class' => 'select2', 'multiple' => 'multiple', 'data-placeholder' => 'Select...', 'style' => 'width: 100%;', 'name' => 'roles[]']) }}
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group">
            {{ Form::label('phone', 'Phone') }}
            {{ Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Phone']) }}
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group">
            {{ Form::label('address', 'Address') }}
            {{ Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Address']) }}
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group">
            {{ Form::label('birthday', 'Birthday') }}
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="far fa-calendar-alt"></i>
                </span>
              </div>
              {{ Form::text('birthday', date('Y-m-d', strtotime(\Carbon\Carbon::now())), ['class' => 'form-control float-right datepicker']) }}
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group">
            {{ Form::label('avatar', 'Avatar') }}
            <div class="custom-file">
              {{ Form::file('avatar', ['class' => 'custom-file-input', 'id' => 'customFile']) }}
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group">
            {{ Form::label('zip', 'Zip code') }}
            {{ Form::text('zip', null, ['class' => 'form-control', 'placeholder' => 'Address']) }}
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <label for="gender">Gender</label>
          <div class="form-group clearfix">
            <div class="icheck-primary d-inline">
              {{ Form::radio('gender', 1, true, ['id' => 'gender1']) }}
              {{ Form::label('gender1', 'Male') }}
            </div>
            <div class="icheck-primary d-inline">
              {{ Form::radio('gender', 0, false, ['id' => 'gender2']) }}
              {{ Form::label('gender2', 'Female') }}
            </div>
            <div class="icheck-primary d-inline">
              {{ Form::radio('gender', 2, false, ['id' => 'gender3']) }}
              {{ Form::label('gender3', 'Orther') }}
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <label for="">Status</label>
          <div class="form-group clearfix">
            <div class="icheck-primary d-inline">
              {{ Form::checkbox('status', '1', false, ['data-bootstrap-switch', 'data-on-text' => 'Active', 'data-off-text' => 'In-Active']) }}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container form-footer">
      <div class="row">
        <div class="col-12 text-center">
          <button class="btn btn-primary btn-flat">Save</button>
        </div>
      </div>
    </div>
  {!! Form::close() !!}
</div>
