@extends('layouts.master')

@section('title', 'Config')

@section('content')
<div class="container">
	<div class="col-xs-12">
		<h1>Select server</h1>
		<p>
			Hi {{ $user->username }}!<br />
                        Check out this video how to set-up a secure Discord server with Valkyrja!<br />
                        <a href="https://youtu.be/KDQeN7FXO-4">youtu.be/KDQeN7FXO-4</a>
		</p>
		<p>
			Required permissions to be able to configure Valkyrja are <code>Administrator</code> & <code>ManageServer</code>, and you need to already have it on your server, before you can configure anything. <a href="/invite">Invite the bot!</a></p>
		</p>
		<p>
			Which server would you like to configure?
		</p>
		<form action="{{ url('config/edit') }}" class="form-inline" method="post">
			<select class="form-control" name="serverId">
				@foreach ($guilds as $guild)
					<option value="{{ $guild->id }}">{{ $guild->name }}</option>
				@endforeach
			</select>
			<input type="hidden" name="userId" value="{{ $user->id }}">
			{{ csrf_field() }}
			<input type="submit" class="btn btn-primary" value="Select server">
			<a href="{{ route('logout') }}" class="btn btn-danger" style="color: white;">Logout</a>
		</form>
		</p>
	</div>
</div>
@endsection
