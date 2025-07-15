    @extends('master.master')
@section('title', 'Microsoft Office')

@section('content')
@include('courses.partials.course_detail', [
    'image' => 'ms_office_banner.png',
    'title' => 'Microsoft Office',
    'description' => 'Learn Microsoft Word, Excel, and PowerPoint to manage documents, data, and presentations effectively for professional use.',
    'duration' => '2 Months',
    'rating' => 4.3,
    'reviews' => 36,
    'curriculum' => [
        'Computer Fundamentals',
        'Notpad',
        'Microsoft Word - Formatting, tables, templates, letters',
        'Microsoft Excel - Functions, formulas, charts, data analysis',
        'Microsoft PowerPoint - Slides, transitions, animations',
        'Document Styling & Print Setup',
        'Mail Merge & Templates',
        'Internal & Multimedia'
    ]
])
@endsection
