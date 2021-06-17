@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-body">
                    <h1 class="float-left h2">Bewerkpagina voor {{ $employee->name }}
                        <form action="{{ route('medewerkers.destroy', $employee->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger float-right">
                                Verwijderen
                            </button>
                        </form>
                    </h1>

                    @if ($errors->any())
                        <div class="alert alert-danger" id="errors">
                            <strong>Er zijn een aantal errors!</strong><br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('medewerkers.update', $employee->id ) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input name="old_email" value="{{ $employee->email }}" hidden>
                        <div class="row">
                            <div class="col">
                                <div class="form-group ml-3">
                                    <label class="ml-1">Naam</label>
                                    <input type="text" name="name" placeholder="Vul naam in" required
                                           class="form-control @error('first_name') is-invalid @enderror"
                                           @if(old('name') != null)
                                           value="{{ old('name') }}"
                                           @else
                                           value="{{ $employee->name }}"
                                        @endif>
                                </div>
                                @foreach($roles as $role)
                                    <div>
                                        <input type="checkbox" name="{{ $role->name }}"
                                               @if(in_array($role->name, \App\Models\Role::query()->whereIn('id',
                                                    \App\Models\ModelHasRole::query()->where('model_id', '=', $employee->id)->pluck('role_id')
                                                    )->pluck('name')->toArray()))
                                               checked
                                            @endif
                                        >
                                        <label>&nbsp; {{ ucfirst($role->name) }}</label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col">
                                <div class="form-group ml-3">
                                    <label class="ml-1">E-mailadres</label>
                                    <input type="text" name="email" placeholder="Vul e-mailadres in" required
                                           class="form-control @error('email') is-invalid @enderror"
                                           @if(old('email') != null)
                                           value="{{ old('email') }}"
                                           @else
                                           value="{{ $employee->email }}"
                                        @endif>
                                </div>
                            </div>
                        </div>
                        <br>
                        <a href="{{ route('medewerkers.index') }}" class="btn btn-default"
                           title="Terug naar vorige pagina">Terug</a>

                        <button type="submit" class="float-right btn btn-primary text-light">
                            Opslaan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
