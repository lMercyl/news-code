@extends('layout.layout')
@section('content')
    <div class="index-page">
        <section class="section">
            <div class="main-container">
                <x-tape-news />
                <x-exclusive-news />
                <div class="banner">
                </div>
            </div>

            <div class="sidebar">
                <x-main-page-news />
                <div class="sidebar__sticky">
                    <div class="banner">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
