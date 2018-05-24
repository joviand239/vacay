@extends('cms.layouts.authorized')

@section('headerCustom')
    @php
        $id = 0;
        if (!empty($model) && !empty($model->getKey())) $id = $model->getKey();

        if(empty($id)) $title = getPrefixTitleDetails() . ' ' . $model::getTitleDetails();
        else $title = $model::getTitleDetails();

        $formUrl = $model->getUrlDetails(['id' => $id]);
        $cancelUrl = $model->getUrlIndex();

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

                            @include('cms.form.section')

                            @yield('button')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    @if($id != 0)
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-add">
                        <span>Review List</span>
                        <a type="button" class="btn btn-success btn-xs pull-right" href="{{ route('vacaypal-review', ['parentId' => $id, 'id' => 0]) }}">
                            <i class="icon fa fa-plus"></i>
                            <span class="help-text">Create new Review</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="datatable table table-striped primary">
                            <thead>
                            <tr>
                                @foreach(@$modelReview::INDEX_FIELD as $field)
                                    <th>{{ keyToLabel($field) }}</th>
                                @endforeach
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($model->reviews as $item)
                                <tr>
                                    <td>
                                        {!! @$item->name !!}
                                    </td>
                                    <td>
                                        {!! @$item->rating !!}
                                    </td>
                                    <td>
                                        {!! getDateOnly(@$item->reviewDate) !!}
                                    </td>
                                    <td>
                                        {!! @$item->review !!}
                                    </td>
                                    <td class="text-center td-button">
                                        <a href="{{ route('vacaypal-review', ['parentId' => $id, 'id' => $item->id]) }}">
                                            <button type="button" class="btn btn-default btn-xs"> Edit Details</button>
                                        </a>
                                        <button type="button" class="btn btn-default btn-xs delete-button-modal" data-toggle="modal" data-target="#modal-delete-alert" data-url="{!! route('vacaypal-review-delete', ['id' => $item->id]) !!}"> Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif


@endsection

