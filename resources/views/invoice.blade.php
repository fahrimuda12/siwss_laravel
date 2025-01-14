<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<style>
/* reset */

*
{
	border: 0;
	box-sizing: content-box;
	color: inherit;
	font-family: inherit;
	font-size: inherit;
	font-style: inherit;
	font-weight: inherit;
	line-height: inherit;
	list-style: none;
	margin: 0;
	padding: 0;
	text-decoration: none;
	vertical-align: top;
}

/* content editable */

.block { border-radius: 0.25em; min-width: 1em; outline: 0; }

span.block { display: inline-block; }

/* heading */

h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

h1.recipient {
	letter-spacing: 0;
	text-align: left;
}

/* table */

table { font-size: 75%; table-layout: fixed; width: 100%; }
table { border-collapse: separate; border-spacing: 2px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: center; }
th, td { border-radius: 0.25em; border-style: solid; }
th { background: #EEE; border-color: #BBB; }
td { border-color: #DDD; }

/* page */

html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
html { background: #999; cursor: default; }

body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

/* header */

header { margin: 0 0 3em; }
header:after { clear: both; content: ""; display: table; }

header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em; }
header span, header img { display: block; float: right; }
header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* article */

article, article address, table.meta, table.inventory { margin: 0 0 3em; }
article:after { clear: both; content: ""; display: table; }

article address { float: left; font-size: 125%; font-weight: bold; }

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }

/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th { font-weight: bold; text-align: center; }

/* table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { text-align: right; width: 12%; }
table.inventory td:nth-child(4) { text-align: right; width: 12%; }
table.inventory td:nth-child(5) { text-align: right; width: 12%; } */

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: center; }

/* aside */

aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
aside h1 { border-color: #999; border-bottom-style: solid; }

/* javascript */

.add, .cut
{
	border-width: 1px;
	display: block;
	font-size: .8rem;
	padding: 0.25em 0.5em;	
	float: left;
	text-align: center;
	width: 0.6em;
}

.add, .cut
{
	background: #9AF;
	box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);
	background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);
	border-radius: 0.5em;
	border-color: #0076A3;
	color: #FFF;
	cursor: pointer;
	font-weight: bold;
	text-shadow: 0 -1px 2px rgba(0,0,0,0.333);
}

.add { margin: -2.5em 0 0; }

.add:hover { background: #00ADEE; }

.cut { opacity: 0; position: absolute; top: 0; left: -1.5em; }
.cut { -webkit-transition: opacity 100ms ease-in; }

tr:hover .cut { opacity: 1; }

@media print {
	* { -webkit-print-color-adjust: exact; }
	html { background: none; padding: 0; }
	body { box-shadow: none; margin: 0; }
	span:empty { display: none; }
	.add, .cut { display: none; }
}

@page { margin: 0; }

.checkout {
	background-color: #29c232;
	color: white;
	cursor: pointer;
}

.back {
	background-color: #ee0082;
	color: white;
	cursor: pointer;
}
</style>
<body>
    
<html>
	<head>
		<meta charset="utf-8">
		<title>Tagihan</title>
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
	</head>
	<body>
		<header>
			<h1>Tagihan</h1>
		</header>
		<article>
			<address class="block">
				<h1 class="recipient">Penerima :</h1>
				<p>{{ auth()->user()->name }} {{ auth()->user()->last_name }}</p>
			</address>
			<table class="meta">
				<tr>
					<th><span class="block">Tagihan #</span></th>
					<td><span class="block">{{ $invoiceData['payment_id'] }}</span></td>
				</tr>
				<tr>
					<th><span class="block">Tanggal</span></th>
					<td><span class="block">{{ $invoiceData['order_date'] }}</span></td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span class="block">Nama Paket</span></th>
						<th><span class="block">Hari Mulai</span></th>
						<th><span class="block">Hari Selesai</span></th>
						<th><span class="block">Hari dan Waktu Mulai</span></th>
						<th><span class="block">Hari dan Waktu Selesai</span></th>
						<th><span class="block">Jumlah Orang</span></th>
						<th><span class="block">Harga</span></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($invoiceData['invoice_table'] as $invoice)	
					<tr>
						<td><span class="block">{{ $invoice['package_name'] }}</span></td>
						<td><span class="block">{{ $invoice['booking_start'] }}</span></td>
						<td><span class="block">{{ $invoice['booking_end'] }}</span></td>
						<td><span class="block">{{ $invoice['time_start'] }}</span></td>
						<td><span class="block">{{ $invoice['time_end'] }}</span></td>
						<td><span class="block">{{ $invoice['attendant'] }}</span></td>
						<td><span data-prefix>Rp.</span><span>{{ $invoice['price'] }}</span></td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<table class="balance">
				<tr>
					<th><span class="block">Total</span></th>
					<td><span data-prefix>Rp.</span><span>{{ $invoiceData['total_pay'] }}</span></td>
				</tr>
				<tr>
					<th class="back" onclick="backtocart()">kembali</th>
					<td class="checkout" onclick="gotoinvoice()">
						<form action="{{ url('/checkout') }}" method="post" id="bayar">
							@csrf
							<span>Bayar</span>
						</form>
					</td>
				</tr>
			</table>
		</article>
	</body>
</html>

<script>
	function backtocart() {
		window.location.href = "{{ url('/cart1') }}"
	}

	function gotoinvoice() {
		let form = document.getElementById("bayar")
		form.submit()
	}
</script>
</body>
</html>