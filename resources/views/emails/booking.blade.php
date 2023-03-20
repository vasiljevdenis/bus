<!DOCTYPE html>
<html>
<head>
    <title>New booking!</title>
</head>
<body>
    <div style="text-align: center; padding: 5px 1px;">
        <h1 style="text-align: center;">New booking!</h1>
    </div>
    <br>
    <p><span style="font-weight: 600;">Itinerary:</span>&nbsp;<span>{{ $itinerary }}</span></p>
    <p><span style="font-weight: 600;">Guests:</span>&nbsp;<span>{{ $guests }}</span></p>
    <p><span style="font-weight: 600;">Date:</span>&nbsp;<span>{{ $date }}</span></p>
    <p><span style="font-weight: 600;">Departure time:</span>&nbsp;<span>{{ $time }}</span></p>
    <br>
    <p><span style="font-weight: 600;">Seats:</span></p>
    @foreach (json_decode($seats) as $seat)
    <p><span style="font-weight: 600;">{{ $seat->seat }}</span>&nbsp;&nbsp;&nbsp;<span>{{ $seat->price }}</span></p>
    @endforeach
    <br>
    <p><span style="font-weight: 600;">Food:</span></p>
    @foreach (json_decode($food) as $item)
    <p><span style="font-weight: 600;">{{ $item->name }}</span>&nbsp;&nbsp;&nbsp;<span>{{ $item->count }}</span>&nbsp;&nbsp;&nbsp;<span>{{ $item->price }}</span></p>
    @endforeach
    <br>
    <p><span style="font-weight: 600;">Total price:</span>&nbsp;<span>£{{ $total }}</span></p>
</body>
</html>