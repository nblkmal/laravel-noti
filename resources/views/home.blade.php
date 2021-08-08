@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            @php
                $notifications = auth()->user()->notifications;
            @endphp
            <div class="card">
                <div class="card-body">
                    <table class="table-responsive">
                        <thead>
                            <tr>
                                <th>Notify</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notifications as $noti)
                                <tr>
                                    {{-- <td>{{ $item->type }}</td> --}}
                                    <td>
                                        @include('notifications'.Str::snake(class_basename($noti->type)))
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
