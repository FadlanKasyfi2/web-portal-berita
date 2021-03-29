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
											<th>Longtitude</th>
											<th>Lattitude</th>
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>Tanggal dibuat</th>
										</tr>
									</thead>
									<tbody>
										@foreach($lokasi as $map)
										<tr>
											<th>{{$map->id}}</th>
											<td>{{$map->lat}}</td>
											<td>{{$map->long}}</td>
                                            <td>{{$map->title}}</td>
                                            <td>{{$map->description}}</td>
                                            <td>{{$map->created_at}}</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>