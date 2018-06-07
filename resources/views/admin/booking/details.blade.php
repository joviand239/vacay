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

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Category
                                                </th>
                                                <th>
                                                    Price
                                                </th>
                                                <th>
                                                    Qty
                                                </th>
                                                <th>
                                                    Total Price
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(@$model->bookingItems as $bookingItem)
                                                <tr>
                                                    <td>
                                                        {!! @$bookingItem->cityCategory->category->name !!}
                                                    </td>
                                                    <td>
                                                        USD {!! getPriceNumber(@$bookingItem->price) !!}
                                                    </td>
                                                    <td>
                                                        {!! getPriceNumber(@$bookingItem->quantity) !!}
                                                    </td>
                                                    <td>
                                                        USD {!! getPriceNumber(@$bookingItem->totalPrice) !!}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="3" class="text-right">
                                                    Subtotal
                                                </td>
                                                <td>
                                                    USD {!! getPriceNumber(@$model->totalLineItem) !!}
                                                </td>
                                            </tr>
                                            @if(@$model->withItenerary)
                                                <tr>
                                                    <td colspan="3" class="text-right">
                                                        Itenerary Price
                                                    </td>
                                                    <td>
                                                        USD {!! getPriceNumber(@$model->iteneraryPrice) !!}
                                                    </td>
                                                </tr>
                                            @endif
                                            <tr>
                                                <td colspan="3" class="text-right">
                                                    Grand Total
                                                </td>
                                                <td>
                                                    USD {!! getPriceNumber(@$model->grandTotal) !!}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-right">
                                                    Grand Total (IDR)
                                                </td>
                                                <td>
                                                    IDR {!! getPriceNumber(@$model->grandTotalIdr) !!}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>


                            @yield('button')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


@endsection

