<div class="mt-10 max-w-xl mx-auto">
            @foreach($users as $user)
                <div class="border-b mb-5 pb-5 border-gray-200">
                    <a href="/user/{{ $user->id }}" class="text-2xl font-bold mb-2">{{ $user->name }}</a>
                    <p>E-mail: {!! $user->email !!}</p>
                    <p>User ID: {!! $user->id !!}</p>
                    <p>Registered: {!! $user->created_at !!}</p>
                </div>
            @endforeach
            {{ $users->links() }}
        </div>