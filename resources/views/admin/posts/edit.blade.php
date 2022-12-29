@extends('layout.layout')

@section('title')
    {{__('Редактировать Продукт')}}
@endsection

@section('content')
    @include('partials.header')


    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">Редактировать Продукт</h3>
        <div class="mt-8">
            <form enctype="multipart/form-data" class="mt-8" method="POST" action="{{ route('admin.posts.update', $product->id) }}">
                @csrf
                @method('PUT')

                @if ($errors->any())
                    <div class="alert alert-danger row m-auto text-center">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group col-md-6 mb-3 ">
                    <h5>Title</h5>
                    <input
                        type="text"
                        class="form-control mt-1"
                        id="title"
                        name="title"
                        value="{{ $product->title }}"
                        style="line-height: 2.5;"
                    >
                </div>
                <div class="form-group col-md-6 mb-3 ">
                    <h5>Price</h5>
                    <input
                        type="text"
                        class="form-control mt-1"
                        id="price"
                        name="price"
                        value="{{ $product->price }}"
                        style="line-height: 2.5;"
                    >
                </div>
                <div class="form-group col-md-6 mb-3 ">
                    <h5>Rating</h5>
                    <input
                        type="text"
                        class="form-control mt-1"
                        id="rating"
                        name="rating"
                        value="{{ $product->rating }}"
                        style="line-height: 2.5;"
                    >
                </div>
                <div class="form-group col-md-6 mb-3 ">
                    <h5>Comments</h5>
                    <input
                        type="text"
                        class="form-control mt-1"
                        id="comments"
                        name="comments"
                        value="{{ $product->comments }}"
                        style="line-height: 2.5;"
                    >
                </div>
                <div class="form-group col-md-6 mb-3 ">
                    <h5>Brand</h5>
                    <input
                        type="text"
                        class="form-control mt-1"
                        id="brand"
                        name="brand"
                        value="{{ $product->brand }}"
                        style="line-height: 2.5;"
                    >
                </div>
                <div class="form-group col-md-6 mb-3 ">
                    <h5>Description</h5>
                    <textarea
                        class="form-control mt-1"
                        id="description"
                        name="description"
                        rows="8">
                        {{ $product->description }}
                    </textarea>
                </div>
                <div class="form-group col-md-6 mb-3 ">
                    <h5>Color</h5>
                    <input
                        type="text"
                        class="form-control mt-1"
                        id="color"
                        name="color"
                        value="{{ $product->color }}"
                        style="line-height: 2.5;"
                    >
                </div>
                <div class="form-group col-md-6 mb-3 ">
                    <h5>specification</h5>
                    <input
                        type="text"
                        class="form-control mt-1"
                        id="specification"
                        name="specification"
                        value="{{ $product->specification }}"
                        style="line-height: 2.5;"
                    >
                </div>
                @if(isset($product) && $product->thumbnail)
                    <div class="form-group col-md-6 mb-3 ">
                        <img src="/storage/posts/{{ $product->thumbnail }}">
                    </div>
                @endif
                <div class="form-group col-md-6 mb-3 ">
                    <input type="file" placeholder="Обложка" name="thumbnail"><br>
                </div>
                <div class="form-group col-md-6 mb-3 ">
                    <button type="submit"
                            class="btn btn-success col-md-8 btn-lg px-2"
                            style="background-color: #59AB6E !important; color: rgb(14, 27, 11);">
                        Сохранить
                    </button>
                </div>
            </form>
        </div>
    </div>


@endsection
