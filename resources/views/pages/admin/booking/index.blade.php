@extends('layouts.app')

@section('title', 'Daftar Booking')

@section('content')
    <td>
        <form action="{{ route('admin.booking.updateStatus') }}" method="POST">
            @csrf
            <input type="hidden" name="booking_id" value="{{ $item->id }}">
            <select name="status" onchange="this.form.submit()" class="form-select form-select-sm">
                <option value="pending" {{ $item->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="confirmed" {{ $item->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                <option value="canceled" {{ $item->status == 'canceled' ? 'selected' : '' }}>Canceled</option>
            </select>
        </form>
    </td>

@endsection
