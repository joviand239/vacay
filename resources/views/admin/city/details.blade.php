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

                            <div class="col-md-12">
                                <div class="col-md-3">
                                    <label class="control-label">Itenerary File</label>
                                </div>
                                <div class="col-md-4">
                                    @if(@$model->iteneraryFile)
                                        <div class="input-group">
                                            <input type="text" class="form-control" disabled value="{!! @$model->iteneraryFile !!}">
                                            <input type="hidden" class="form-control" name="iteneraryFile" value="{!! @$model->iteneraryFile !!}">
                                            <span class="input-group-addon change">Delete</span>
                                        </div>
                                        <div class="input-group hide">
                                            <input type="file" class="form-control" accept="application/pdf" name="iteneraryFile">
                                        </div>
                                    @else
                                        <input type="file" class="form-control" accept="application/pdf" name="iteneraryFile">
                                    @endif
                                </div>
                            </div>

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
                        <span>Category List</span>
                        <a type="button" class="btn btn-success btn-xs pull-right" href="{{ route('city-category', ['parentId' => $id, 'id' => 0]) }}">
                            <i class="icon fa fa-plus"></i>
                            <span class="help-text">Create new Category</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="datatable table table-striped primary">
                            <thead>
                            <tr>
                                @foreach($modelCategory::INDEX_FIELD as $field)
                                    <th>{{ keyToLabel($field) }}</th>
                                @endforeach
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($model->categories as $item)
                                <tr>
                                    <td>
                                        {!! @$item->category->name !!}
                                    </td>
                                    <td>
                                        {!! @$item->price !!}
                                    </td>
                                    <td class="text-center td-button">
                                        <a href="{{ route('city-category', ['parentId' => $id, 'id' => $item->id]) }}">
                                            <button type="button" class="btn btn-default btn-xs"> Edit Details</button>
                                        </a>
                                        <button type="button" class="btn btn-default btn-xs delete-button-modal" data-toggle="modal" data-target="#modal-delete-alert" data-url="{!! route('city-category-delete', ['id' => $item->id]) !!}"> Delete</button>
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


    @if($id != 0)
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-add">
                        <span>Testimonial List</span>
                        <a type="button" class="btn btn-success btn-xs pull-right" href="{{ route('city-testimonial', ['parentId' => $id, 'id' => 0]) }}">
                            <i class="icon fa fa-plus"></i>
                            <span class="help-text">Create new Testimonial</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="datatable-second table table-striped primary">
                            <thead>
                            <tr>
                                @foreach($modelTestimonial::INDEX_FIELD as $field)
                                    <th>{{ keyToLabel($field) }}</th>
                                @endforeach
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($model->testimonials as $item)
                                <tr>
                                    <td>
                                        {!! $item->name !!}
                                    </td>
                                    <td>
                                        {!! $item->designation !!}
                                    </td>
                                    <td>
                                        {!! $item->details !!}
                                    </td>
                                    <td class="text-center td-button">
                                        <a href="{{ route('city-testimonial', ['parentId' => $id, 'id' => $item->id]) }}">
                                            <button type="button" class="btn btn-default btn-xs"> Edit Details</button>
                                        </a>
                                        <button type="button" class="btn btn-default btn-xs delete-button-modal" data-toggle="modal" data-target="#modal-delete-alert" data-url="{!! route('city-testimonial-delete', ['id' => $item->id]) !!}"> Delete</button>
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


@section('jsCustom')
    <script>
        $(document).ready(function () {

            datatable = $('.datatable-second').DataTable({
                "dom": '<"top"fl<"clear">>rt<"bottom"ip<"clear">>',
                "oLanguage": {
                    "sSearch": "",
                    "sLengthMenu": "_MENU_"
                },
                "initComplete": function initComplete(settings, json) {
                    $('div.dataTables_filter input').attr('placeholder', 'Search...');
                    initAllElement();

                    $('.datatable').fadeIn('slow');
                },
                "fnDrawCallback": function (oSettings) {
                    initAllElement();
                },
                "aaSorting": [],
                "scrollX": true
            }).columns.adjust();


            $('.change').click(function (e) {
                e.preventDefault();

                $(this).parent().find('[type=hidden]').val('DELETE_FILE');

                $(this).parent().toggleClass('hide');
                $(this).parent().next().toggleClass('hide');
            })

        })


    </script>
@endsection

