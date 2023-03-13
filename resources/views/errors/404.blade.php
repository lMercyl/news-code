@extends('layout.layout')

@php
    $_meta = ['title' => 'Страница не найдена'];
@endphp

@section('content')
    <div class="wrap category">
        <div class="row row_main">

            <div class="row_main__col1 col-lg-auto order-xl-2">

                <div style="margin: 0 auto;font-size: 50px;display: flex;align-content: center;justify-content: center; margin-top: 25vh">
                    <span>404</span>
                </div>

                <div style="margin: 0 auto;font-size: 30px;display: flex;align-content: center;justify-content: center;margin-bottom: 25vh;">
                    <span>Страница не найдена!</span>
                </div>

            </div>

        </div>
    </div>
@endsection
