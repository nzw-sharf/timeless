
<form action="" method="post" class="searchForm">
    @csrf
    <div class="row g-2">
        
        <div class="col-6 col-md col-lg my-auto">
            <label for="">Buy/Sell/Rent</label>
            <select class="form-select" name="accomodation" id="accomodation">
                <option value="" hidden></option>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-6 col-md col-lg  my-auto">
            <label for="">Residential/Commercial</label>
            <select class="form-select" name="accomodation" id="accomodation">
                <option value="" hidden></option>
                @foreach ($offerType as $offer)
                    <option value="{{ $offer->id }}">{{ $offer->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-6 col-md col-lg my-auto">
            <label for="">Type Of Property</label>
            <select class="form-select" name="accomodation" id="accomodation">
                <option value="" hidden></option>
                @foreach ($accomodation as $acc)
                    <option value="{{ $acc->id }}">{{ $acc->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-6 col-md col-lg my-auto">
            <label for="">No.of Bedrooms</label>
            <select class="form-select" name="status"  id="status" required>
                <option value="" hidden></option>
                @foreach ($bedrooms as $bed)
                    <option value="{{ $bed->bedrooms }}">{{ $bed->bedrooms }}
                    </option>
                @endforeach
                {{-- <option value="3">Off Plan</option> --}}
            </select>
        </div>
        <div class="col my-auto">
            <label for="">Price</label>
           <input type="number" name="price" id="price" class="form-control">
        </div>
        <div class="col-auto mt-auto">
            <button type="submit" class="btn btn-primary">SEARCH</button>
        </div>
    </div>
</form>