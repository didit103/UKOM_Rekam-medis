<!DOCTYPE HTML>
<html>
<head>
    <title>Rekam Medis</title>
    @include("includes.head")
</head>
<body class="metro">
    @include("includes.navbar2")
    <div class="container">
    		<h3>Beranda Rekam Medis</h3>
    		<form action="{{ URL::to('login/post') }}" method="post">
    		<label>Nama</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Nama" name="name"/>
                           
                        </div>
                        <label>Username</label>
                        <div class="input-control text" date-role="input-control">
                            <input type="text" placeholder="Username" name="username"/>
                            
                        </div>
                        <label>Email</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Email" name="email"/>
                           
                        </div>
                        <label>Password</label>
                        <div class="input-control text" date-role="input-control">
                            <input type="text" placeholder="Password" name="password"/>
                        </div>
                           <a href="{{ URL::to("login/store")}}"><button class="button large info" style="">Tambah</button></a>
                    <button class="button large">Batal</button>
       @yield("content")
    </div>
</body>
</html>