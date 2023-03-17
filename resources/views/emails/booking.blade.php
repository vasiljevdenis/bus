<!DOCTYPE html>
<html>
<head>
    <title>New booking!</title>
</head>
<body>
    <h1 style="text-align: center;">New booking!</h1>
    <div style="background: #333333; text-align: center;">
        <img src="https://quickres.store/images/logo.svg" alt="Logo" style="width: 100%; max-width: 250px;">
    </div>
    <br>
    <p><span style="font-weight: semibold">Itinerary:</span>&nbsp;<span>{{ $data->body['itinerary'] }}</span></p>
    <p><span style="font-weight: semibold">Guests:</span>&nbsp;<span>{{ $data->body['guests'] }}</span></p>
    <p><span style="font-weight: semibold">Date:</span>&nbsp;<span>{{ $data->body['date'] }}</span></p>
    <p><span style="font-weight: semibold">Departure time:</span>&nbsp;<span>{{ $data->body['time'] }}</span></p>
    <br>
    <p><span style="font-weight: semibold">Seats:</span></p>
    @foreach ($data->body->seats as $seat)
    <p><span style="font-weight: semibold">{{ $seat['seat'] }}:</span>&nbsp;<span>{{ $seat['price'] }}</span></p>
    @endforeach
    <br>
    <p><span style="font-weight: semibold">Food:</span></p>
    @foreach ($data->body->food as $item)
    <p><span style="font-weight: semibold">{{ $item['name'] }}:</span>&nbsp;<span>{{ $item['price'] }}</span></p>
    @endforeach
    <br>
    <p><span style="font-weight: semibold">Total price:</span>&nbsp;<span>{{ $data->body['total'] }}</span></p>
</body>
</html>