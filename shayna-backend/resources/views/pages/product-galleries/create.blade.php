@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Foto Barang</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{route ('product-galleries.store')}}" method="POST" enctype="multipart/form-data" {{-- untuk menambah gambar--}}>
            @csrf
            <div class="form-group">
                <label for="name" class="form-control-label">nama barang</label>
                <select name="products_id"
                        class="form-control @error('products_id') is-invalid @enderror">

                @foreach($products as $product)
                    <option value="{{$product->id}}">{{$product->name}}</option>
                @endforeach
                </select>
                @error('products_id') <div class="text-muted">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="photo" class="form-control-label">Foto barang</label>
                <input  type="file"
                        name="photo"
                        value="{{old('photo')}}"
                        accept="image/*"
                        class="form-control @error('photo') is-invalid @enderror">
                @error('photo') <div class="text-muted">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="is-default" class="form-control-label">Jadikan Default</label>
                <br>
                {{-- <label>
                    <input  type="radio"
                            name="is-default"
                            value="1"
                            class="form-control @error('is-default') is-invalid @enderror">YA
                </label>
                &nbsp;
                <label>
                    <input  type="radio"
                            name="is-default"
                            value="0"
                            class="form-control @error('is-default') is-invalid @enderror">TIDAK
                </label> --}}
                <div class="custom-control custom-radio custom-control-inline">
                    <input  type="radio"
                            id="customRadioInline1"
                            name="is_default"
                            class="custom-control-input @error('is_default') is-invalid @enderror"
                            value="1">
                    <label class="custom-control-label" for="customRadioInline1">Ya</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input  type="radio"
                            id="customRadioInline2"
                            name="is_default"
                            class="custom-control-input @error('is_default') is-invalid @enderror"
                            value="0">
                    <label class="custom-control-label" for="customRadioInline2">Tidak</label>
                </div>
                @error('is_default') <div class="text-muted">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">
                Tambah Foto Barang
                </button>
            </div>
            </form>
        </div>
    </div>
@endsection
