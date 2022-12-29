@extends('layout.layout')

@section('title')
    {{__('Добавить товар')}}
@endsection

@section('content')
    @include('partials.header')


    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">Добавить Продукт</h3>
        <div class="mt-8">
            <form enctype="multipart/form-data" class="mt-8" method="POST" action="{{ route('admin.posts.store') }}">
                @csrf

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
                    <input
                        type="text"
                        class="form-control mt-1"
                        id="title"
                        name="title"
                        placeholder="title"
                        value="{{ old('title') }}"
                        style="line-height: 2.5;"
                    >
                </div>
                <div class="form-group col-md-6 mb-3 ">
                    <input
                        type="text"
                        class="form-control mt-1"
                        id="price"
                        name="price"
                        placeholder="150"
                        value="{{ old('price') }}"
                        style="line-height: 2.5;"
                    >
                </div>
                <div class="form-group col-md-6 mb-3 ">
                    <input
                        type="text"
                        class="form-control mt-1"
                        id="rating"
                        name="rating"
                        placeholder="5"
                        value="{{ old('rating') }}"
                        style="line-height: 2.5;"
                    >
                </div>
                <div class="form-group col-md-6 mb-3 ">
                    <input
                        type="text"
                        class="form-control mt-1"
                        id="comments"
                        name="comments"
                        placeholder="160"
                        value="{{ old('comments') }}"
                        style="line-height: 2.5;"
                    >
                </div>
                <div class="form-group col-md-6 mb-3 ">
                    <input
                        type="text"
                        class="form-control mt-1"
                        id="brand"
                        name="brand"
                        placeholder="brand"
                        value="{{ old('brand') }}"
                        style="line-height: 2.5;"
                    >
                </div>
                <div class="form-group col-md-6 mb-3 ">
                    <textarea
                        class="form-control mt-1"
                        id="description"
                        name="description"
                        rows="8">{{ old('description') }}
                    </textarea>
                </div>
                <div class="form-group col-md-6 mb-3 ">
                    <input
                        type="text"
                        class="form-control mt-1"
                        id="color"
                        name="color"
                        placeholder="color"
                        value="{{ old('color') }}"
                        style="line-height: 2.5;"
                    >
                </div>
                <div class="form-group col-md-6 mb-3 ">
                    <input
                        type="text"
                        class="form-control mt-1"
                        id="specification"
                        name="specification"
                        placeholder="specification"
                        value="{{ old('specification') }}"
                        style="line-height: 2.5;"
                    >
                </div>
                @if(isset($product) && $product->thumbnail)
                    <div class="form-group col-md-6 mb-3 ">
                        <img src="assets/img/feature_prod_01.jpg">
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
