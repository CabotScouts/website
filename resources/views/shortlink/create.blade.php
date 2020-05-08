@extends('layouts.main')
@section('title', "Shortlinks")
@section('content')
@include('component.alerts')
<section class="page container pad space">
  <div class="row">
    <div class="col col-12">
      <h1>New Shortlink</h1>
    </div>

    <div class="page-content col col-12 mt-3">
      <form method="post" action="{{ route('shortlink.create.store') }}" novalidate>
				@csrf

				@if($errors->any())
					@include('form.errors')
				@endif

				<div class="form-group row">
					<label for="url" class="col-lg-6 col-sm-4 col-form-label">URL*</label>
          <div class="col-lg-6 col-sm-8">
            <input class="form-control" type="text" name="url" id="url" placeholder="https://" required />
          </div>
				</div>

        <div class="form-group row">
					<label for="code" class="col-lg-6 col-sm-4 col-form-label">Shortlink</label>
          <div class="col-lg-6 col-sm-8">
            <input class="form-control" type="text" name="code" id="code" placeholder="abcdef" />
          </div>
          <div class="col-lg-6 col-sm-8 ml-auto">
            <small>Leave blank for a randomly generated code</small>
          </div>
				</div>

        <div class="form-group row">
          <div class="col col-lg-6 col-sm-8 ml-auto">
            <input class="form-control btn btn-outline-primary" type="submit" name="submit" value="Create Shortlink" />
          </div>
				</div>
			</form>
    </div>
  </div>
</section>
@endsection
