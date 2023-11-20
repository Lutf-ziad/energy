@extends('layouts.admin')
@section('title', 'تفاصيل')
@section('page', '  تفاصيل')

<!-- resources/views/products/show.blade.php -->
<style>

/* CSS to style the image gallery */
.image-gallery {
    display: flex;
    flex-wrap: wrap;
    gap: 20px; /* Adjust the spacing between image cards */
}
/* Image hover effect */
.image-card:hover {
    transform: scale(1.05);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    cursor: pointer;
}

.image-card {
    border: 1px solid #ddd;
    padding: 10px;
    width: 360px; /* Adjust the image card width as needed */
    display: flex;
    flex-direction: column;
}

.image-container {
    text-align: center; /* Center-align the image */
}

.image-container img {
    max-width: 100%;
    height: auto;
    margin-bottom: 10px; /* Add spacing between the image and buttons */
}

.image-buttons {
    text-align: center; /* Center-align the buttons */
}
</style>
@section('content')
<!-- resources/views/products/show.blade.php -->

<div class="container">
    <h1>صور البطاريه</h1>
    <div class="image-gallery">
      @foreach($product->images as $record)
        @foreach(json_decode($record->picture) as $picture)
        <div class="image-card">
            <div class="image-container">
                <img src="{{ asset('images/' . $picture) }}" alt="Product Image">
            </div>

            <div class="image-buttons">
                <a href="{{ route('images.update', $record->id) }}" class="btn btn-primary btn-sm">تعديل</a>
                <form action="{{ route('images.destroy', $record->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('هل أنت متأكد أنك تريد حذف هذه الصورة؟')">حذف</button>
                </form>
            </div>
        </div>

       @endforeach
     @endforeach
    </div>
</div>
@endsection

