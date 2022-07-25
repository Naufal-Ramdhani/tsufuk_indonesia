<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Dashboard Admin</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	@include('include.style')
</head>
<body>
@include('include.navbar')
			
@include('include.sidebar')			
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
                    @yield('content')
                    @csrf
												</div>
											</div>
										</div>
									</div>
								</div>
							</div> 
						</div>
						
						<div class="row row-card-no-pd">
							<div class="col-md-4">
								<div class="card">
								</div>
							</div>
							<div class="col-md-5">
								<div class="card">
									<div class="card-body">
									
									</div>
								</div>
							</div>
							
						</div>
						</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@include('include.footer')
			</div>
		</div>
	</div>
	<!-- Modal -->
</body>
@include('include.script')
</html>