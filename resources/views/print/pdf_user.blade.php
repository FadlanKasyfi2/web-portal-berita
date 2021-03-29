<div class="container-fluid">
					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary text-center">Data Location</h6>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered"  width="100%" >
									<thead>
										<tr>
											<th>ID</th>
											<th>Role ID</th>
											<th>Nama</th>
                                            <th>Email</th>
                                            <th>Tanggal dibuat</th>
										</tr>
									</thead>
									<tbody>
										@foreach($user as $us)
										<tr>
											<th>{{$us->id}}</th>
											<td>{{$us->role_id}}</td>
											<td>{{$us->name}}</td>
                                            <td>{{$us->email}}</td>
                                            <td>{{$us->created_at}}</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>