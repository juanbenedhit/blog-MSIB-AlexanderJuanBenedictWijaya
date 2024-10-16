<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Author Profile') }}
        </h2>
    </x-slot>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="{{ $user->profile_photo_url ?? 'https://via.placeholder.com/150' }}" alt="avatar"
                             class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3">{{ $user->name }}</h5>
                        <p class="text-muted mb-1">{{ $user->email }}</p>
                        <p class="text-muted mb-4">Author</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Full Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $user->name }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $user->email }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Joined</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $user->created_at->format('F d, Y') }}</p>
                            </div>
                        </div>
                        @if($user->bio)
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Bio</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->bio }}</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="mb-3">Author Posts</h5>
                        @if($user->posts && $user->posts->count() > 0)
                            <ul class="list-group list-group-flush">
                            @foreach($user->posts as $post)
                                    <li class="list-group-item">
                                        <a href="{{ route('posts.show', $post->id) }}" class="text-decoration-none">
                                            {{ $post->title }}
                                        </a>
                                        <small class="text-muted float-end">{{ $post->created_at->format('M d, Y') }}</small>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-muted mb-0">No posts yet.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>