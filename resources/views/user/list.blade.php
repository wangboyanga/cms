{{ $page }}
@foreach ($list as $v)
    账号 {{ $v->username }} 密码 {{ $v->userpwd}} 手机号 {{$v->usernum }}}<br/>
@endforeach