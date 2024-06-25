@extends('dashboard.layout.index')
@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Floor Plans</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('dashboard/floorPlans') }}">Floor Plans</a></li>
                        <li class="breadcrumb-item active">New Floor Plan</li>
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
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">New Floor Plan Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-boder" id="storeForm" files="true" method="POST" enctype="multipart/form-data"
                            action="{{ route('dashboard.floorPlans.store') }}">
                            @csrf
                            <div class="card-body">
                               
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" value="{{ old('title') }}"
                                                class="form-control @error('title') is-invalid @enderror" id="title"
                                                placeholder="Enter Title" name="title">
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control select1 @error('status') is-invalid @enderror" id="status"
                                                name="status">
                                                @foreach (config('constants.statuses') as $key=>$value)
                                                <option value="{{ $key }}">{{ $value }}</option>
                                                @endforeach
                                            </select>
                                            @error('status')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="project_name">Select Project</label>
                                            <select data-placeholder="Select Project" style="width: 100%;" class="search_select form-control @error('project_name') is-invalid @enderror" id="project_name" name="project_name">
                                                @foreach ($projects as $project)
                                                <option value="{{ $project->title }}">{{ $project->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('project_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="community_id">Select Community</label>
                                            <select data-placeholder="Select Community" style="width: 100%;" class="select2 form-control @error('community_id') is-invalid @enderror" id="community_id" name="community_id">
                                                <option value="">Select Community</option>
                                                @foreach ($communities as $community)
                                                <option value="{{ $community->id }}">{{ $community->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('community_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="sub_community_id">Sub Community</label>
                                            <select data-placeholder="Select Community"
                                                class=" form-control select1 @error('sub_community_id') is-invalid @enderror"
                                                id="sub_community_id" name="sub_community_id">

                                            </select>
                                            @error('sub_community_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="mainImage">Image</label>
                                            <div class="custom-file   @error('mainImage') is-invalid @enderror">
                                                <input type="file" class="custom-file-input  @error('mainImage') is-invalid @enderror" id="mainImage" name="mainImage" accept="image/*">
                                                <label class="custom-file-label" for="mainImage">Choose file</label>
                                            </div>
                                            @error('mainImage')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div> --}}
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="floorPlanFile">Floor Plan File</label>
                                            <div class="custom-file   @error('floorPlanFile') is-invalid @enderror">
                                                <input type="file" class="custom-file-input  @error('floorPlanFile') is-invalid @enderror" id="floorPlanFile" name="floorPlanFile" accept=".pdf" required>
                                                <label class="custom-file-label" for="floorPlanFile">Choose file</label>
                                            </div>
                                            @error('floorPlanFile')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="meta_title">Meta Title</label>
                                            <input type="text" value="{{ old('meta_title') }}"
                                                class="form-control @error('meta_title') is-invalid @enderror" id="meta_title"
                                                placeholder="Enter Meta Title" name="meta_title">
                                            @error('meta_title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="meta_keywords">Meta Keywords<small class="text-danger">(Multiple keywords separated with comas)</small></label>
                                            <input type="text" value="{{ old('meta_keywords') }}"
                                                class="form-control @error('meta_keywords') is-invalid @enderror" id="meta_keywords"
                                                placeholder="Enter Meta Keywords" name="meta_keywords">
                                            @error('meta_keywords')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="meta_description">Meta Description</label>
                                            <textarea class="form-control @error('meta_description') is-invalid @enderror" id="meta_description"
                                                placeholder="Enter Meta Description" name="meta_description">{{ old('meta_description') }}</textarea>
                                            @error('meta_description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                    {{-- <div class="dynamic-field">
                                        <div class="row" style="align-items: center;">
                                            <div class="col-md-10" id="dynamic-field-1">
                                                <div class="row" >
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="images">Image</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="" name="images[]" accept="image/*">
                                                                <label class="custom-file-label" for="images">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="names">Name</label>
                                                            <input type="text" class="form-control" placeholder="Enter Name" name="names[]">

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="areas">Area</label>
                                                            <input type="number" min="0" class="form-control" placeholder="Enter Area" name="areas[]">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="areas">Accommodation</label>
                                                            <select data-placeholder="Select Accommodation" style="width: 100%;"
                                                            class="select1 form-control @error('accommodationIds') is-invalid @enderror"
                                                            id="accommodationIds" name="accommodationIds[]">
                                                            @foreach ($accommodations as $accommodation)
                                                                <option value="{{ $accommodation->id }}">
                                                                    {{ $accommodation->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 mt-25 append-buttons">
                                                <div class="clearfix changeBtn" style="margin-top: 10px;">
                                                    <button type="button" id="add-button" class="btn btn-secondary add-button w-100"><i class="fa fa-plus fa-fw"></i></button>
                                                    <!-- <button type="button" id="remove-button" class="btn btn-danger"><i class="fa fa-times fa-fw"></i></button> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary storeBtn">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
<script type="text/javascript">
        $(document).on('click', '.add-button', function(e) {
            e.preventDefault();
           var btnHtml = '<a href="javascript:void(0);" class="btn btn-danger w-100 remove-row"><i class="fa fa-times fa-fw"></i>\
                                    </a>';
            $(this).parent().closest(".changeBtn").html($(btnHtml));
           var html  =     '<div class="row" style="align-items: center;">\
                            <div class="col-md-10" id="dynamic-field-1">\
                                <div class="row">\
                                    <div class="col-sm-3">\
                                        <div class="form-group">\
                                            <label for="images">Image</label>\
                                            <div class="">\
                                                <input type="file" class="form-control" id="" name="images[]" accept="image/*">\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="col-sm-3">\
                                        <div class="form-group">\
                                            <label for="title">Name</label>\
                                            <input type="text" class="form-control" placeholder="Enter Name" name="names[]" >\
                                        </div>\
                                    </div>\
                                    <div class="col-sm-3">\
                                        <div class="form-group">\
                                            <label for="area">Area</label>\
                                            <input type="number" min="0" class="form-control" placeholder="Enter Area" name="areas[]">\
                                        </div>\
                                    </div>\
                                    <div class="col-sm-3">\
                                        <div class="form-group">\
                                            <label for="areas">Accommodation</label>\
                                            <select data-placeholder="Select Accommodation" style="width: 100%;" class="select1 form-control" id="accommodationIds" name="accommodationIds[]">\
                                                @foreach ($accommodations as $accommodation)\
                                                <option value="{{ $accommodation->id }}">{{ $accommodation->name }}</option>\
                                                @endforeach\
                                            </select>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>\
                            <div class="col-md-2 mt-25 append-buttons">\
                                <div class="clearfix changeBtn" style="margin-top: 10px;">\
                                    <button type="button" id="add-button" class="btn btn-secondary add-button w-100">\
                                                <i  class="fa fa-plus fa-fw"></i></button>\
                                </div>\
                            </div>\
                    </div>';
                                    
                    
            // alert($(this).parent(".dynamic-field"));
             $(".dynamic-field").append($(html));
            
        });

    $(document).on('click', '.remove-row', function() {
        $(this).closest('.row').remove();
    });

</script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function() {
        $('#community_id').on('change', function(e) {
            var category_id = e.target.value;
            $.ajax({
                url: "{{ route('dashboard.community.subcommunities') }}",
                type: "POST",
                data: {
                    category_id: category_id
                },
                success: function(data) {
                    $('#sub_community_id').empty();
                    $.each(data.subcategories, function(index, subcategory) {
                        $('#sub_community_id').append('<option value="' + subcategory.id + '">' + subcategory.name + '</option>');
                    })
                }
            })
        });
    });
</script>
@endsection
