@extends('master.master')
@section('title', 'Financial Accounting with GST')

@section('content')
@include('courses.partials.course_detail', [
    'image' => 'fa_banner.png',
    'title' => 'Financial Accounting with GST',
    'description' => 'Master accounting principles and practical GST application using tools like Tally and Excel for real-world business scenarios.',
    'duration' => '2 Months',
    'rating' => 4.5,
    'reviews' => 62,
    'curriculum' => [
        'Introduction to Accounting - Basics of bookkeeping and ledgers',
        'Tally ERP 9 / Tally Prime - Setup, company creation, voucher entry, reports',
        'GST - Input/output tax, filing returns, GST in Tally',
        'Microsoft Excel - Functions, formatting, and data entry for accounting',
        'Microsoft Word - Preparing documents like invoices and letters'
    ]
])
@endsection
