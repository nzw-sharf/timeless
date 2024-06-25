@extends('dashboard.layout.index')
@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Community({{ $community->name }}) Stat Values</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('dashboard/communities') }}">Communities</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.communities.stats', $community->id) }}">Community Stats</a></li>
                        <li class="breadcrumb-item active">Community Stat Values</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-hover text-nowrap table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $stat->name }}</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Stat Value Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-boder" method="POST" action="{{ route('dashboard.communities.stats.statData.update', [$community->id, $stat->id, $statData->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="key">Key</label>

                                            <select data-placeholder="Select Key" style="width: 100%;" class="search_select form-control @error('key') is-invalid @enderror" id="key" name="key" required>
                                                @foreach ($defaultStat as $data)
                                                <option value="{{ $data->key }}" @if($statData->key == $data->key) selected @endif>{{ $data->key }}</option>
                                                @endforeach
                                            </select>
                                            {{-- <input type="text" value="{{ $statData->key }}" class="form-control @error('key') is-invalid @enderror" id="key" placeholder="Enter Key" name="key" required> --}}
                                            @error('key')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="value">Value</label>
                                            <select data-placeholder="Select Value" style="width: 100%;" class="search_select form-control @error('value') is-invalid @enderror" id="value" name="value" required>
                                                @foreach ($defaultStat as $data)
                                                <option value="{{ $data->value }}" @if($statData->value == $data->value) selected @endif>{{ $data->value }}</option>
                                                @endforeach
                                            </select>
                                            {{-- <input type="text" value="{{ $statData->value }}" class="form-control @error('value') is-invalid @enderror" id="value" placeholder="Enter Value" name="value" required> --}}
                                            @error('value')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>


        </div>
    </section>
@endsection
