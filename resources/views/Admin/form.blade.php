@extends('layouts.base')

@section('content')
    <div class="grid  gap-5">

        <div class="lg:col-span-4 xl:col-span-3">
            <div class="card p-5">
                <form
                    action="{{ Route::currentRouteName() == 'EditArticle' ? route('Update', ['slug' => $post->slug]) : route('AddArticle') }}"
                    method="POST" enctype="multipart/form-data">

                    @if (Route::currentRouteName() == 'EditArticle')
                        @method('PUT')
                    @endif
                    @csrf

                    <div class="mb-5 xl:w-1/2">
                        <label class="label block mb-2" for="title">Title</label>
                        <input name="title" class="form-control @error('title') is-invalid @enderror"
                            value="{{ Route::currentRouteName() == 'EditArticle' ? $post->title : old('title') }}">

                        @error('title')
                            <small class="invalid-feedback mt-2 block">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-5 xl:w-1/2">
                        <label class="label block mb-2" for="tumbnail">Tumbnail</label>
                        <img class="max-h-full max-w-full rounded-lg mb-4 {{ Route::currentRouteName() == 'EditArticle' ? '' : 'hidden' }}"
                            src="{{ Route::currentRouteName() == 'EditArticle' ? asset('storage/' . $post->image) : '' }}">

                        <label class="input-group font-normal">
                            <div
                                class="file-name input-addon input-addon-prepend input-group-item is-invalid w-full overflow-x-hidden">
                                No file chosen
                            </div>
                            <input class="@error('tumbnail') is-invalid @enderror hidden" name="tumbnail" type="file">
                            <div class="input-group-item btn btn_primary uppercase">Choose File</div>
                        </label>

                        @error('tumbnail')
                            <small class="invalid-feedback mt-2 block">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label class="label block mb-2" for="content">Content</label>
                        <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="8">{{ Route::currentRouteName() == 'EditArticle' ? $post->content : old('content') }}</textarea>

                        @error('content')
                            <small class="invalid-feedback mt-2 block">{{ $message }}</small>
                        @enderror
                    </div>

                    <button class="btn btn_primary uppercase" type="submit">Publish</button>

                </form>
            </div>
        </div>
    </div>
@endsection
