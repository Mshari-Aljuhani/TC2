@if($deal->status == "Valid")
<form action="{{route('orders.store', $deal)}}"  method="POST">
    @csrf
    <input type="hidden" name="deal_id" value="{{$deal->id}}">
    <input type="hidden" name="price" value="{{$deal->price}}">
    <input type="hidden" name="total"  value="{{$deal->price}}">
    <input type="hidden" name="status"  value="{{$deal->status}}">
        <label for="quantity">Quantity:</label>
        <input class="form-control" style="display: inline-block; width: 80px" type="number" id="quantity" name="quantity" min="1" max="50" value="1"><br><br>
        <button type="submit" class="btn MainButt" >Buy now</button>
</form>
    @else
    <button type="submit" class="btn btn-danger mt-3" >The deal is invalid</button>
@endif
