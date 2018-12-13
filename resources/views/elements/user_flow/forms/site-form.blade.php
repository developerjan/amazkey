<div class="step-container" id="site-form-container">
    <form id="site-form" class="site-form" data-parsley-validate>
        <div class="row">
            {{--@foreach($site_types as $site_type)--}}
                {{--<div class="col-md-3">--}}
                    {{--<input type="checkbox" class="site-type-cb hidden" name="site_type" id="site-type-{{ $site_type->id }}" value="{{ $site_type->type_name }}">--}}
                    {{--<label class="image-cb-label" for="site-type-{{ $site_type->id }}">--}}
                        {{--<span class="fa {{ $site_type->icon }}"></span>--}}
                        {{--<p>{{ $site_type->type_name }}</p>--}}
                    {{--</label>--}}
                {{--</div>--}}
            {{--@endforeach--}}
        </div>
        <div class="md-form">
            <input type="text" name="site_name" id="site-name" class="form-control" data-parsley-required>
            <label for="site-name">Site Name</label>
        </div>

        <div class="text-right">
            <button type="submit" class="btn btn-md btn-primary">
                Next Step &raquo;
            </button>
        </div>
    </form>
</div>