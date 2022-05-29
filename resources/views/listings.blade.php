<h1>{{$heading}}</h1>
<h1>Listings</h1>

@unless (count($listings) == 0)
    @foreach($listings as $listing)
        <h2>
           <a href="/listings/{{$listing['id']}}"> {{$listing['id']}}</a>
        </h2>
        <p>{{$listing['description']}}</p>
    @endforeach
    @else <p>No listings found</p>
@endunless