{{--Template name: lounge--}}
@extends('layouts.app')

@section('content')
  @include('components.banner')
  @include('components.about')
  @include('components.advantages')
  @include('components.menu')
  @include('components.price')
  @include('components.contacts')
  @include('components.modal')
@endsection
