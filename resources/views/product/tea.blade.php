@extends('layouts.index')
@section('content')
    <div class="content-container d-flex justify-content-center">
        <div class="top-product flex flex-column">
            <span class="label-section">Trà</span>
            <div class="product-section">
                @for ($i = 0; $i < 4; $i++)
                    <div class="row">
                        @for ($j = 0; $j < 4; $j++)
                            <div class="col d-flex justify-content-center">
                                <div class="product-item">
                                    <a href="#" class="product-link">
                                        <div class="product-image">
                                            <img src="{{ asset('asset/images/tra_sua.png') }}" alt="Product Image"
                                            class="image">
                                        </div>
                                        <div class="product-name">Trà sữa olong</div>
                                        <div class="product-price">30000 VNĐ</div>
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
