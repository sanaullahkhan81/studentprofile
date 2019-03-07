@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                       <table class="table table-striped">
                  <tr>
                   <th class="tg-0lax">Registration Date</th>
                    <th class="tg-0lax">Name</th>                    
                    <th class="tg-0lax">DOB</th> 
                    <th class="tg-0lax">Country of Birth</th>
                    <th class="tg-0lax">Sibling Y/N</th>
                    <th class="tg-0lax">Action</th>
                  </tr>
                  
                  @foreach($waitingList as $row)
                  <tr>
                  	<td class="tg-0lax">
                    {{
                    date("d/m/Y", strtotime($row->created_at))
                    
                    }}
                    
                    </td>
                    <td class="tg-0lax">{{$row->first_name}}</td>
                    <td class="tg-0lax">{{$row->dob}}</td>    
                    <td class="tg-0lax">{{$row->country}}</td>
                    <td class="tg-0lax">
                    
                    @if($row->sibling == 1)
                     YES
                    @else
                    NO
                    @endif
                   
                    
                    </td>
                    <td class="tg-0lax">
               <a href="#editRegistrationModal" class="btn btn-primary" data-toggle="modal">Edit</a>
               |
               <a href="" class="btn btn-warning">Delete</a>
                    
                    </td>
                  </tr>
                  @endforeach
                </table>
                    
                    
					
                    <table class="table table-striped">
                  <tr>
                    <th class="tg-0lax">Name</th>
                    <th class="tg-0lax">Gender</th>
                    <th class="tg-0lax">DOB</th>
                    <th class="tg-0lax">Course</th>
                    <th class="tg-0lax">Nationality</th>
                    <th class="tg-0lax">Country of Birth</th>
                    <th class="tg-0lax">Action</th>
                  </tr>
                  
                  @foreach($rows as $row)
                  <tr>
                    <td class="tg-0lax">{{$row->first_name}} {{$row->last_name}}</td>
                    <td class="tg-0lax">{{$row->gender}}</td>
                    <td class="tg-0lax">{{$row->dob}}</td>
                    <td class="tg-0lax">{{$row->course}}</td>
                    <td class="tg-0lax">{{$row->nationality}}</td>
                    <td class="tg-0lax">{{$row->country_of_birth}}</td>
                    <td class="tg-0lax"></td>
                  </tr>
                  @endforeach
                </table>
                
                
                
                
                
                </div>
            </div>
        </div>
    </div>
    <div id="editRegistrationModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Edit Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>
    
    
</div>
@endsection
