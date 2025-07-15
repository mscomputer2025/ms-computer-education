@extends('master.master')
@section('title', 'Basic Computer Course')

@section('content')
@include('courses.partials.course_detail', [
    'image' => 'basic_banner.png',
    'title' => 'Basic Computer Course',
    'description' => 'Learn computer fundamentals including Windows, Internet, Typing, and MS Office to build a strong digital foundation.',
    'duration' => '2 Months',
    'rating' => 4.5,
    'reviews' => 52,
    'curriculum' => [
        'CCC (Certificate on Computer Concept)',
        'Windows (Paint, Notepad, Control Panel)',
        'Internet & Multimedia',
        'Gujarati, Hindi & English Typing (MS Office)',
        'Word - Excel - PowerPoint',
        'Input (Urdu Software)'
    ]
])
@endsection
