
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
            <input type="number" name="bedroom" id="bedroom" class="form-control">
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