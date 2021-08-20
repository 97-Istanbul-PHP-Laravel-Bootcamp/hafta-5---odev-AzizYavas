@extends('admin.layout.default')

@section('title', $title)

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.room') }}">Oteller</a></li>
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
                                    <label>Oteller</label>
                                    <x-select name="hotel_id" selected="{{$room->hotel_id}}" :list=$hotel_ />
                                </div>

                                <div class="form-group">
                                    <label>Stok Sayısı</label>
                                    <input type="text" class="form-control" name="stock" value="{{ $room->stock }}"
                                    >
                                </div>

                                <div class="form-group">
                                    <label>Oda İsmi</label>
                                    <input type="text" class="form-control" name="name" value="{{ $room->name }}"
                                    >
                                </div>

                                <div class="form-group">
                                    <label>Yetişkin Kapasitesi</label>
                                    <input type="number" class="form-control" name="adt_cnt"
                                           value="{{ $room->adt_cnt }}"
                                    >
                                </div>

                                <div class="form-group">
                                    <label>Çocuk Kapasitesi</label>
                                    <input type="number" class="form-control" name="kid_cnt"
                                           value="{{ $room->kid_cnt }}"
                                    >
                                </div>

                                <div class="form-group">
                                    <label>Oda Metrekaresi</label>
                                    <input type="number" class="form-control" name="info_s[roomland]"
                                           value="{{ $room->info_s['roomland'] }}">
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
