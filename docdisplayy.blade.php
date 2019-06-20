<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="product-status mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
<table>
<thead>


<th>email</th>
<th>Adharcard</th>
<th>TaxReceipt</th>
<th>Plan</th>
<th>Aadharam</th>


</thead>
@foreach($data as $user)
<tbody>
<tr>
<td>{{$user->email}}</td>
<td><a href="{{asset('storage/upload/'.$user->aadharcard)}}" download="{{$user->aadharcard}}"><button type="button" class="btn btn-primary">
<i class="	glyphicon glyphicon-download">Download</i></button></a></td>
<td><a href="{{asset('storage/upload/'.$user->taxreceipt)}}" download="{{$user->taxreceipt}}"><button type="button" class="btn btn-primary">
<i class="	glyphicon glyphicon-download">Download</i></button></a></td>
<td><a href="{{asset('storage/upload/'.$user->plan)}}" download="{{$user->plan}}"><button type="button" class="btn btn-primary">
<i class="	glyphicon glyphicon-download">Download</i></button></a></td>
<td><a href="{{asset('storage/upload/'.$user->aaharam)}}" download="{{$user->aaharam}}"><button type="button" class="btn btn-primary">
<i class="	glyphicon glyphicon-download">Download</i></button></a></td>

</tr>

@endforeach

</tbody>


</table>
</div>
                    </div>
                </div>
            </div>
        </div>
					
				

</body></html>