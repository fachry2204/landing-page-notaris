<!doctype html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masuk Admin — Notaris</title>
  <style>body{margin:0;min-height:100vh;display:grid;place-items:center;background:#0c0b09;color:#f7f2e7;font-family:Inter,Arial,sans-serif}.login{width:min(400px,calc(100% - 40px));padding:38px;border:1px solid #6a5218;border-radius:16px;background:linear-gradient(145deg,#1d1911,#100f0c);box-shadow:0 24px 70px #0008}.mark{color:#dfb33d;letter-spacing:.16em;font-size:12px;font-weight:800}.login h1{font-family:Georgia,serif;font-size:31px;margin:13px 0 8px}.login p{color:#bdb5a3;margin:0 0 26px;line-height:1.55}label{display:block;font-size:13px;margin:16px 0 7px;color:#e6d7ad}input{box-sizing:border-box;width:100%;padding:13px;border:1px solid #4d4126;border-radius:8px;background:#0b0a08;color:#fff;font-size:15px}button{width:100%;margin-top:24px;padding:13px;border:0;border-radius:8px;background:#d4a72c;color:#171209;font-weight:800;font-size:14px;cursor:pointer}.error{padding:10px;border-radius:7px;background:#492021;color:#ffcfcb;font-size:13px}.remember{display:flex;gap:8px;align-items:center;margin-top:14px;color:#bdb5a3;font-size:13px}.remember input{width:auto}</style>
</head>
<body><form class="login" method="POST" action="{{ route('admin.login.store') }}">@csrf
  <div class="mark">⚖ CMS NOTARIS</div><h1>Masuk ke Admin</h1><p>Kelola seluruh konten halaman depan dari ruang kerja terpisah.</p>
  @if ($errors->any())<div class="error">{{ $errors->first() }}</div>@endif
  <label for="email">Email</label><input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus>
  <label for="password">Kata sandi</label><input id="password" name="password" type="password" required>
  <label class="remember"><input type="checkbox" name="remember"> Ingat saya di perangkat ini</label><button type="submit">Masuk ke dashboard</button>
</form></body></html>
