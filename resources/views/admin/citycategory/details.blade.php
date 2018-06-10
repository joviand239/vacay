@extends('cms.layouts.authorized')

@section('headerCustom')
    @php
        $id = 0;
        if (!empty($model) && !empty($model->getKey())) $id = $model->getKey();

        if(empty($id)) $title = getPrefixTitleDetails() . ' ' . $model::getTitleDetails();
        else $title = $model::getTitleDetails();

        $formUrl = $model->getSaveUrl($parentId, $id);
        $cancelUrl = $model->getCancelUrl($parentId);

        $language = '';
    @endphp
@endsection

@section('button')

    @include('cms.form.button')

@endsection

@section('content')

    @include('cms.form.errorbox')

    <form id="form" action="{{ $formUrl }}" class="create-project form-horizontal" method="POST"  enctype="multipart/form-data">

        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ $model->getTitleDetails() }}</div>
                    <div class="card-body">
                        <div class="row">


                            <div class="col-md-12">
                                <div class="col-md-3">
                                    <label class="control-label">Category</label>
                                </div>
                                <div class="col-md-9">
                                    <select  class="form-control" name="categoryId" value="{!! @$model->categoryId !!}" {{ $model->isRequired('categoryId') }} {{ $model->isDisabled('categoryId') }} label="{{ $model->label('categoryId') }}">
                                        @foreach(GetCategoryList($parentId, @$id) as $selectKey=>$selectLabel)
                                            <option value="{{ $selectKey }}"
                                                    @if($selectKey == @$model->categoryId) selected @endif>{{ $selectLabel }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>



                            @include('cms.form.section')

                            @yield('button')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection

