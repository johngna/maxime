@extends('backend.layouts.app2')


@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.users.management') }} <small class="text-muted">Usuários Ativos</small>
                </h4>
            </div><!--col-->

            <div class="col-sm-7">
                @include('backend.auth.user.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col-md-12">

                    <table class="table table-xs table-condensed table-responsive" id="basic_table" style="min-height:300px">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>Email</th>
                            <th>Confirmado</th>
                            <th>Papéis</th>
                            <th>Permissões</th>
                            <th>Social</th>
                            {{-- <th>Atualização</th> --}}
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>@include('backend.auth.user.includes.confirm', ['user' => $user])</td>
                                <td>{{ $user->roles_label }}</td>
                                <td>{{ $user->permissions_label }}</td>
                                <td>@include('backend.auth.user.includes.social-buttons', ['user' => $user])</td>
                                {{-- <td>{{ $user->updated_at->diffForHumans() }}</td> --}}
                                <td class="btn-td">@include('backend.auth.user.includes.actions', ['user' => $user])</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

            </div><!--col-->
        </div><!--row-->
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    {!! $users->total() !!} {{ trans_choice('labels.backend.access.users.table.total', $users->total()) }}
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $users->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection

@section('before-scripts')



<script src="{{url('')}}/js/plugins.js"></script>
<script src="{{url('')}}/js/bootstrap.js"></script>



@endsection
