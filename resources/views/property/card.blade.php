<div class="card" style="width: 18rem;">
    @if ($property->image)
        <img src="/storage/{{$property->image}}" class="card-img-top" alt="">

    @endif
    <div class="card-body">
        <h5 class="car-title">
            <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property]) }} ">{{ $property->title}} </a>
        </h5>
        <p class="card-text">{{$property->surface}}m² - {{$property->city}} ({{$property->postal_code}}) </p>
        <div class="text-primary fw-bold">
            {{number_format($property->price, thousands_separator: ' ')}} GNF
        </div>
    </div>
</div>




