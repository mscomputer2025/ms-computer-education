@extends('master.master')
@section('title', 'ADIT (Advanced Diploma in Information Technology)')

@section('content')
@include('courses.partials.course_detail',  [
'image' => 'adit_banner.jpg',
'title' => 'ADIT (Advanced Diploma in Information Technology)',
'description' => 'An advanced course for IT enthusiasts covering networking, advanced programming, web dev, and database management.',
'duration' => '6 Months',
'rating' => 4.8,
'reviews' => 35,
'curriculum' => [
'Computer Fundamentals',
'Windows',
'Microsoft Office(Word,Excel,PowerPoint,Access)',
'Internet,Multimedia',
'English,Gujarati,Hindi& Urdu Typing',
'Inpage(Urdu Software)',
'Accounting Package',
'DTP(corel Draw,Photoshop)',
'Basic Concept Of Hardware',
'Maintenance'
]
])
@endsection