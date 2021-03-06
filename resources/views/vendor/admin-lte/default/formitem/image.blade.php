<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
	<label for="{{ $name }}">{{ $label }}</label>
	<div class="imageUpload" data-target="{{ route('admin.formitems.image.uploadImage') }}" data-token="{{ csrf_token() }}">
		<div>
			<div class="thumbnail">
				<img class="no-value {{ empty($value) ? '' : 'hidden' }}" src="http://fakeimg.pl/200x150/f5f5f5/aaa/?text=No+image&font=lobster" width="200px" height="150px" />
				<img class="has-value {{ empty($value) ? 'hidden' : '' }}" src="{{ asset($value) }}" width="200px" height="150px" />
			</div>
		</div>
		<div>
			<div class="btn btn-primary imageBrowse flat"><i class="fa fa-upload"></i> {{ trans('admin::lang.image.browse') }}</div>
			<div class="btn btn-danger imageRemove flat"><i class="fa fa-times"></i> {{ trans('admin::lang.image.remove') }}</div>
		</div>
		<input name="{{ $name }}" class="imageValue" type="hidden" value="{{ $value }}">
		<div class="errors">
			@include(AdminTemplate::view('formitem.errors'))
		</div>
	</div>
</div>