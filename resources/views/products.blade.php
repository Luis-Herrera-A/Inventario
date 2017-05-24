@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('adminlte_lang::message.products') }}</div>

                    <div class="panel-body">
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>{{ trans('adminlte_lang::message.product_name') }}</th>
                                            <th>{{ trans('adminlte_lang::message.product_price') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($products as $product)
                                            <tr>
                                                <td>{{ $product['name'] }}</td>
                                                <td>{{ $product['price'] }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="2">
                                                    {{ trans('adminlte_lang::message.empty_products') }}
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- /.box-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
