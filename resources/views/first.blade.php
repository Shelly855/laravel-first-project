@extends('layouts.master')

@section('content')
<!--code here will be appear in the yield content section-->

@for ($i=0; $i<$num; $i++)

    <h1>{{ $name }}</h1>

@endfor

@endsection
