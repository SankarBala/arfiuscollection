@extends('layouts.app')
@section('pagename', 'Categories')
@section('breadcrumb')
    <li class="active">Categories</li>
@endsection
@section('content')
    <div id="content">
        <section class="section bg-white shadow-md rounded">
            <div class="container">
                <h2 class="text-9 font-weight-500 text-center">Categories list</h2>
                <p class="lead text-center mb-5"></p>
                <div class="row">
                    @if ($categories->isNotEmpty())
                        @foreach ($categories as $index => $category)
                            <div class="col-md-6 col-lg-4">
                                <div class="accordion accordion-alternate popularRoutes mx-lg-2" id="popularRoutes">
                                    <div class="card">
                                        <div class="card-header" id="one">
                                            <a href="{{ route('category', $category) }}">
                                                <h4 class="d-flex">
                                                    {{ $category->name }}
                                                    <span
                                                        class="ml-auto text-center">{{ $category->posts->count() }}</span>
                                                </h4>
                                            </a>

                                        </div>
                                        <div id="collapse_{{ $index }}" class="nocollapse" aria-labelledby="one"
                                            data-parent="#popularRoutes">
                                            <div class="card-body pl-2">
                                                <ul class="routes-list">

                                                    @foreach ($category->children as $child)
                                                        <li>
                                                            <a href="{{ route('category', $child) }}">
                                                                {{ $child->name }}
                                                                <span
                                                                    class="ml-auto">{{ $child->posts->count() }}</span>
                                                            </a>
                                                            <ul class="">
                                                                <li>
                                                                    <a href="{{ route('category', $child) }}">
                                                                        {{ $child->name }}
                                                                        <span
                                                                            class="ml-auto">{{ $child->posts->count() }}</span>
                                                                    </a>
                                                                </li>
                                                                </ul>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center mt-5 w-100">
                            <p>No categories found</p>
                        </div>
                    @endif

                </div>
            </div>
        </section>
    </div>
@endsection
