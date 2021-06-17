@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Medewerkers
                    <a class="btn btn-outline-primary float-right"
                       href="{{ route('medewerkers.create') }}">
                        +Toevoegen
                    </a>
                </h1>
                @foreach($employees as $employee)
                    <div class="row m-2 p-3 rounded border border-light shadow-sm bg-white">
                        <div class="d-flex flex-column w-50">
                            <div class="h5 m-0 fw-bold">
                                {{ $employee->name }}
                            </div>
                            <p>Rollen:
                                <span hidden>{{ $i = 0 }}</span>
                                @foreach(\App\Models\Role::query()->whereIn('id',
                                    \App\Models\ModelHasRole::query()->where('model_id', '=', $employee->id)->pluck('role_id')
                                )->get() as $role)
                                    @if($i > 0)
                                        -
                                    @endif
                                    {{ ucfirst($role->name) }}
                                    <span hidden>{{ $i++ }}</span>
                                @endforeach</p>
                        </div>
                        <div class="d-flex flex-column justify-content-end w-50 text-right pb-2">
                            <a id="{{ $employee->id }}" class="btn btn-primary"
                               href="{{ route('medewerkers.edit', $employee->id) }}">
                                Aanpassen
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
