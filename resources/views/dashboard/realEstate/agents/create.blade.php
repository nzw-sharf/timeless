@extends('dashboard.layout.index')
@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Agents</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('dashboard/agents') }}">Agents</a></li>
                        <li class="breadcrumb-item active">New Agent</li>
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

                            <h3 class="card-title">New Agent Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-boder" id="storeForm" files="true" method="POST" enctype="multipart/form-data"
                            action="{{ route('dashboard.agents.store') }}">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" value="{{ old('name') }}"
                                                class="form-control @error('name') is-invalid @enderror" id="name"
                                                placeholder="Enter Name" name="name">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="select1 form-control  @error('status') is-invalid @enderror" data-placeholder="Select Status" id="status"
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
                                            <label for="email">Email</label>
                                            <input type="email" value="{{ old('email') }}"
                                                class="form-control @error('email') is-invalid @enderror" id="email"
                                                placeholder="Enter Email" name="email" required>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="designation">Designation</label>
                                            <input type="designation" value="{{ old('designation') }}"
                                                class="form-control @error('designation') is-invalid @enderror" id="designation"
                                                placeholder="Enter Designation" name="designation">
                                            @error('designation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="languageIds">Languages</label>
                                            <select multiple="multiple" data-placeholder="Select Languages" style="width: 100%;" class="select2 form-control @error('languageIds') is-invalid @enderror" id="languageIds" name="languageIds[]">
                                                @foreach ($languages as $language)
                                                <option value="{{ $language->id }}">{{ $language->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('languageIds')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="contact_number">Contact Number</label>
                                            <input type="text" value="{{ old('contact_number') }}"
                                                class="form-control @error('name') is-invalid @enderror" id="contact_number"
                                                placeholder="Enter Contact Number" name="contact_number">
                                            @error('contact_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="whatsapp_number">Whatsapp Number</label>
                                            <input type="text" value="{{ old('whatsapp_number') }}"
                                                class="form-control @error('whatsapp_number') is-invalid @enderror" id="whatsapp_number"
                                                placeholder="Enter Whatsapp Number" name="whatsapp_number">
                                            @error('whatsapp_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="linkedin_profile">Linkedin Profile</label>
                                            <input type="text" value="{{ old('linkedin_profile') }}"
                                                class="form-control @error('linkedin_profile') is-invalid @enderror" id="linkedin_profile"
                                                placeholder="Enter Linkedin Profile URL" name="linkedin_profile">
                                            @error('linkedin_profile')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="nationality">Nationality</label>
                                            <input type="text" value="{{ old('nationality') }}"
                                                class="form-control @error('nationality') is-invalid @enderror" id="nationality"
                                                placeholder="Enter Nationality" name="nationality">
                                            @error('nationality')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    
                                    
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="communityIds">Area Specialization</label>
                                            <select multiple="multiple" data-placeholder="Select Communities" style="width: 100%;" class="select2 form-control @error('communityIds') is-invalid @enderror" id="communityIds" name="communityIds[]">
                                                @foreach ($communities as $community)
                                                <option value="{{ $community->id }}">{{ $community->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('communityIds')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="logo">Image<small class="text-danger">(Prefer Size 300x200)</small></label>
                                            <div class="custom-file   @error('image') is-invalid @enderror">
                                                <input type="file" class="custom-file-input" id="image" name="image"
                                                accept="image/*">
                                                <label class="custom-file-label" for="image">Choose file</label>
                                            </div>
                                            @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">License Number</label>
                                            <input type="text" value="{{ old('license_number') }}"
                                                class="form-control @error('license_number') is-invalid @enderror" id="license_number"
                                                placeholder="Enter License Number" name="license_number">
                                            @error('license_number')
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
