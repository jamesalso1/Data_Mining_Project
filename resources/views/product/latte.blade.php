@extends('layouts.index')
@section('content')
    <div class="content-container d-flex justify-content-center">
        <div class="top-product flex flex-column">
            <span class="label-section">Latte</span>
            <div class="product-section">
                @for ($i = 0; $i < 4; $i++)
                    <div class="row">
                        @for ($j = 0; $j < 4; $j++)
                            <div class="col d-flex justify-content-center">
                                <div class="product-item">
                                    <a href="#" class="product-link">
                                        <div class="product-image">
                                            <img src="{{ asset('asset/images/ca_phe_da.png') }}" alt="Product Image"
                                            class="image">
                                        </div>
                                        <div class="product-name">Cà phê đá </div>
                                        <div class="product-price">50000 VNĐ</div>
                                    </a>
                                </div>
                            </div>
                        @endfor
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
