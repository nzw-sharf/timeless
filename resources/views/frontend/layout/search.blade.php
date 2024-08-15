
<form action="{{route('properties')}}" method="post" class="searchForm" id="searchForm">
    @csrf
    <div class="row g-2">
        <div class="col-6 col-md col-lg  my-auto">
            <label for="">Property Name</label>
            <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Type your keyword...">
        </div>
        <div class="col-6 col-md col-lg my-auto">
            <label for="">Buy/Sell/Rent</label>
            <select class="form-select" name="category" id="category">
                <option value="" hidden></option>
                @foreach ($offerType as $key => $offer)
                    <option value="{{ $key }}">{{ $offer }}
                    </option>
                @endforeach
            </select>
        </div>
        
        <div class="col-6 col-md col-lg my-auto">
            <label for="">Type Of Property</label>
            <select class="form-select" name="accomodation" id="accomodation">
                <option value="" hidden></option>
                @foreach ($accomodation as $acc)
                    <option value="{{ '"'.$acc['value'].'"' }}">{{ $acc['key'] }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-6 col-md col-lg my-auto">
            <label for="">No.of Bedrooms</label>
            
            <select class="form-select" name="bedroom" id="bedroom">
                <option value="" hidden></option>
                
                @foreach ($bedrooms as $key => $bedroom)
                    <option value="{{ $bedroom }}">{{ $bedroom }}
                    </option>
                @endforeach
            </select>
            {{-- <input type="number" name="bedroom" id="bedroom" class="form-control"> --}}
        </div>
        <div class="col my-auto">
            <label for="">Price</label>
            <div class="dropdown">
                {{-- <a class="form-control dropdown-toggle show" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true" data-bs-auto-close="outside">
                    Price
                </a> --}}
                <input type="text"  class="form-control dropdown-toggle show" placeholder="Price" readonly role="button" data-bs-toggle="dropdown" aria-expanded="true" data-bs-auto-close="outside">
                <div class="dropdown-menu"  data-popper-placement="bottom-start">
                    <div class="p-2">
                        <div class="row g-2">
                            <div class="col-lg-6 my-auto">
                                <div class="">
                                    <label for="min-price" class="text-black">Min Price</label>
                                    <input type="number" class="form-control  form-control-sm" id="minPrice" name="minPrice" placeholder="400000" min="400000">


                                </div>
                            </div>
                            <div class="col-lg-6 my-auto">
                                <div class="">
                                    <label for="max-price" class="text-black">Max Price</label>
                                    <input type="number" class="form-control  form-control-sm" id="maxPrice" name="maxPrice" placeholder="500000" min="500000">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           {{-- <input type="number" name="price" id="price" class="form-control"> --}}
        </div>
        <div class="col-auto mt-auto">
            <button type="submit" class="btn btn-primary">SEARCH</button>
        </div>
    </div>
</form>