@extends('admin.layout.default')

@section('title', $title)

@section('breadcrumb')
    <li class="breadcrumb-item active">{{ $title }}</li>
@endsection

@section('content')
<section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{ $title }}</h3>
                        </div>
                        <form method="post" action="{{ route('admin.room.save') }}">
                            @csrf
                            @if ($room)
                                <input type="hidden" name="id" value="{{ $room->id }}">
                            @endif
                            <div class="card-body">

                                <div class="form-group">
                                    <label>Stok Sayısı</label>
                                    <input type="text" class="form-control" name="stock" value="{{ $room->stock }}"
                                    >
                                </div>

                                <div class="form-group">
                                    <label>Oda Özellikleri</label>
                                    <!-- burada $key anlamı $obje_ array içerisndeki key kısmı $value kısmıda oradaki değer kısmımız -->
                                    @foreach (App\Models\Room::getSpecR(true) as $key => $value)
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"
                                                   id="cbox-spec-{{ $key }}" value="{{ $key }}"
                                                   name="spec_x[{{ $key }}]" @if(in_array($key , $room->spec_x)) checked="checked" @endif>
                                            <label for="cbox-spec-{{ $key }}" class="custom-control-label">
                                                {{ $value }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Gönder</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
@endsection
