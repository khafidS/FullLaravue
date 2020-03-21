<table class="table table-bordered">
    <tr>
        <th>nama</th>
        <td>{{ $items->name }}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{ $items->email }}</td>
    </tr>
    <tr>
        <th>nomor</th>
        <td>{{$items->number}}</td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td>{{$items->address}}</td>
    </tr>
    <tr>
        <th>Total Transaksi</th>
        <td>{{$items->transaction_total}}</td>
    </tr>
    <tr>
        <th>Status Transaksi</th>
        <td>{{$items->transaction_status}}</td>
    </tr>
    <tr>
        <th>Pembelian Produk</th>
        <table class="table table-bordered w-100">
            <tr>
                <th>Nama</th>
                <th>Tipe</th>
                <th>Harga</th>
            </tr>
            @foreach ($items->details as $detail)
                <tr>
                    <td>{{$detail->product->name}}</td>
                    <td>{{$detail->product->type}}</td>
                    <td>{{$detail->product->price}}</td>
                </tr>
            @endforeach
        </table>
    </tr>
</table>
<div class="row">
    <div class="col-4">
        <a href="{{ route ('transactions.status', $items->id) }}?status=SUCCESS" class="btn btn-success btn-block">
            <i class="fa fa-check"></i> set Sukses
        </a>
    </div>
    <div class="col-4">
        <a href="{{ route ('transactions.status', $items->id) }}?status=FAILED" class="btn btn-warning btn-block">
            <i class="fa fa-times"></i> set Gagal
        </a>
    </div>
    <div class="col-4">
        <a href="{{ route ('transactions.status', $items->id) }}?status=PENDING" class="btn btn-info btn-block">
            <i class="fa fa-check"></i> set Pending
        </a>
    </div>
</div>



