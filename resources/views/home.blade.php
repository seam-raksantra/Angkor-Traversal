<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Angkor Traversal</title>
  <link rel="icon" href="{{ asset('Logo.png') }}" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
@extends('layouts.app')
@section('content')

  <!-- Hero Carousel -->
  @include('partials.hero_carousel')

  <!-- Top Tour Section -->
  @include('partials.top_tours')

  <!-- Question Banner -->
  @include('partials.qna_banner')

  <!-- Things To Do Section -->
  @include('partials.todo_banner')

  <!-- Discount Banner -->
  @include('partials.discount_banner')
@endsection
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>