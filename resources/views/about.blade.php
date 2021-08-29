@extends('layouts.main')
@section('container')
    <h1>about page</h1>
    <h3><?php echo $name ?></h3>
    <h3><?= $email ?></h3>
    <h3>{{ $address }}</h3>
    <img src="img/orange.jpg" alt="orange" width="200">
    <img src="img/<?= $image ?>" alt="<?= $name ?>" width="200" class="img-thumbnail rounded-circle">
@endsection