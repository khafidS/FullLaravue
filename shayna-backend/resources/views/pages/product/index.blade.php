@extends('layouts.default')

@section('content')
<div class="order">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="h4 box-title"> Daftar Barang</div>
				</div>
				<div class="card-body --">
					<table class="table-stats order-table ov-h">
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Name</th>
									<th>Type</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Action</th>
								</tr>
                            </thead>
                            <tbody>
                                @forelse($items as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->type}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->quantity}}</td>
                                        <td>
                                            {{-- <a href="{{route ('product.gallery')}}" class="btn btn-info btn-sm">
                                                <i class="fa fa-picture-o"></i>
                                            </a> --}}
                                            <a href="#" class="btn btn-info btn-sm">
                                                <i class="fa fa-picture-o"></i>
                                            </a>
                                            <a href="{{route ('product.edit', $item->id)}}" class="btn btn-primary btn-sm">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <form action="{{route ('product.destroy', $item->id)}}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center p-5">
                                            DATA TIDAK TERSEDIA !
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
