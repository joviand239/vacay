@extends('cms.layouts.authorized')

@section('headerCustom')
    @php
        $id = 0;
        if (!empty($model) && !empty($model->getKey())) $id = $model->getKey();

        if(empty($id)) $title = getPrefixTitleDetails() . ' ' . $model::getTitleDetails();
        else $title = $model::getTitleDetails();

        $language = '';
    @endphp
@endsection

@section('button')

    @include('cms.form.button')

@endsection

@section('content')

    @include('cms.form.errorbox')

    <form id="form" action="{{ route('admin.user-save', ['id' => $model->id]) }}" class="create-project form-horizontal" method="POST"  enctype="multipart/form-data">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">User</div>
                    <div class="card-body">
                        <div class="row">
                            @include('cms.form.section')
                            @yield('button')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


@endsection

@section('jsCustom')
    <script>
        var successMessage = '{!! session('success') !!}';

        if (successMessage) {
            swal('SUCCESS',successMessage,'success');
        }
    </script>
@endsection

