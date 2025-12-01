    @extends('layout.master')
@section('title', 'User Profile')

@section('content')

<div class="container mt-5">

    <div class="row">

        {{-- LEFT PROFILE CARD --}}
        <div class="col-md-4">
            <div class="card">

                <div class="card-body text-center">
                    <img src="{{ $user->photo ?? '/images/default-avatar.png' }}"
                         class="rounded-circle mb-3"
                         width="120" height="120">

                    <h4>{{ $user->name }}</h4>

                    @if($user->badge)
                        <p class="text-muted">{{ $user->badge }}</p>
                    @endif

                    <button class="btn btn-secondary btn-sm w-100">
                        Update Profile Visibility
                    </button>
                </div>

            </div>
        </div>

        {{-- RIGHT CONTENT --}}
        <div class="col-md-8">

            {{-- PROFILE INFORMATION --}}
            <div class="card mb-4">
                <div class="card-header">
                    Profile
                </div>

                <div class="card-body">

                    <div class="mb-3">
                        <label>Username</label>
                        <input type="text" value="{{ $user->username }}" class="form-control" readonly>
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="text" value="{{ $user->email }}" class="form-control" readonly>
                    </div>

                </div>
            </div>

            {{-- PUBLISHED TOOLS --}}
            <div class="card mb-4">
                <div class="card-header">
                    Published Tools
                </div>

                <div class="card-body">

                    @if($publishedTools->isEmpty())
                        <p class="text-muted">No published tools.</p>
                    @else
                        <div class="row">
                            @foreach($publishedTools as $tool)
                            <div class="col-md-4 mb-3">
                                <div class="card">

                                    @if($tool->picture)
                                        <img src="{{ asset($tool->picture) }}"
                                             class="card-img-top"
                                             style="height: 120px; object-fit: cover;">
                                    @else
                                        <img src="https://via.placeholder.com/150"
                                             class="card-img-top">
                                    @endif

                                    <div class="card-body p-2">
                                        <p class="mb-1">{{ $tool->name }}</p>
                                        <a href="{{ route('showdetail', [$tool->category_id, $tool->id]) }}"
                                           class="btn btn-primary btn-sm w-100">
                                            View
                                        </a>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                        </div>
                    @endif

                </div>
            </div>

            {{-- ACTIVITY (OPTIONAL) --}}
            <div class="card mb-5">
                <div class="card-header">
                    Activity
                </div>

                <div class="card-body">
                    <div class="row">

                        @for ($m = 1; $m <= 12; $m++)
                            <div class="col text-center">
                                <div style="background: #ccc; height: 80px; position: relative;">
                                    <div style="
                                        background: #888;
                                        position: absolute;
                                        width: 100%;
                                        bottom: 0;
                                        height: {{ ($activity[$m] ?? 0) * 10 }}px;
                                    "></div>
                                </div>
                                <small>{{ $m }}</small>
                            </div>
                        @endfor

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
