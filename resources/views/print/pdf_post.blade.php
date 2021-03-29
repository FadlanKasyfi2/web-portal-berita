<div class="container-fluid">
					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary text-center">Data article</h6>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered"  width="100%" >
									<thead>
										<tr>
											<th>ID</th>
											<th>ID User</th>
											<th>Judul Article</th>
                                            <th>Tanggal dibuat</th>
										</tr>
									</thead>
									<tbody>
										@foreach($posts as $post)
										<tr>
											<th>{{$post->id}}</th>
											<td>{{$post->author_id}}</td>
											<td>{{$post->title}}</td>
                                            <td>{{$post->created_at}}</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>