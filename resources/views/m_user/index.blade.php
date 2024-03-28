@extends('layout.app')

@section('content')
<div class="container shadow-lg p-3 mb-5 mt-5 bg-light rounded text-center">
    <h2 class="mb-3">CRUD User</h2>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif
    <div class="text-right mb-3">
        <a class="btn btn-success" href="{{ route('m_user.create') }}">Input User</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Level ID</th>
                <th>Level Name</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($useri as $m_user)
            <tr>
                <td>{{ $m_user->user_id }}</td>
                <td>{{ $m_user->level_id }}</td>
                <td>{{ $m_user->level->level_nama }}</td>
                <td>{{ $m_user->username }}</td>
                <td>{{ $m_user->nama }}</td>
                <td>{{ substr($m_user->password, 0, 10) }}</td>
                <td class="text-center">
                    <div class="row">
                        <form action="{{ route('m_user.destroy', $m_user->user_id) }}" method="POST">
                            <a class="btn btn-info btn-sm mx-1" href="{{ route('m_user.show', $m_user->user_id) }}">Show</a>
                            <a class="btn btn-primary btn-sm mx-1" href="{{ route('m_user.edit', $m_user->user_id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm mx-1" onclick="return confirm('Are you sure you want to delete this data?')">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
