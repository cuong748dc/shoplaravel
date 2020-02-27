<h1>Hi, {{ \Illuminate\Support\Facades\Auth::user()->name }}</h1>

<h4 class="d-flex justify-content-between align-items-center mb-3">
    <span class="text-muted"></span>
    <span class="badge badge-secondary badge-pill">
        You have ordered {{Session('cart')->totalQty}} products
    </span>
</h4>
<!-- Cart -->
<ul class="list-group mb-3 z-depth-1">
    @foreach(Session('cart')->items as $item)
        <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
                <span>Product: </span>
                <strong>{{$item['items']['name']}}</strong>
                <br>
                <span>Price: </span>
                <strong>@if($item['items']['promotion_price']==0)
                        ${{number_format($item['items']['price'])}}
                    @else
                        ${{number_format($item['items']['promotion_price'])}}
                    @endif</strong>
            </div>
            <span>Quantity: </span>
            <strong>{{ $item['qty'] }}</strong>
        </li>
    @endforeach
    <li class="list-group-item d-flex justify-content-between">
        <span>Total (USD)</span>
        <strong>${{number_format(Session('cart')->totalPrice)}}</strong>
    </li>
</ul>

<p>Shop Larevel</p>

