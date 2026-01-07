@extends('layouts.app')

@section('content')
    <h2 style="margin-left: 1%">{{ __('Customers') }}</h2>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>{{ __('ID') }}</th>
                <th>{{ __('First Name') }}</th>
                <th>{{ __('Last Name') }}</th>
                <th>{{ __('Email') }}</th>
                <th>{{ __('Website') }}</th>
                <th>{{ __('Actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach(\App\Customer::all() as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->first_name }}</td>
                    <td>{{ $customer->last_name }}</td>
                    <td>{{ $customer->getMainEmail() ?? '-' }}</td>
                    <td>
                        @if(method_exists($customer, 'getWebsites'))
                            @foreach($customer->getWebsites() as $website)
                                <a href="{{ $website }}" target="_blank">{{ $website }}</a><br>
                            @endforeach
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('customers.update', ['id' => $customer->id]) }}" class="btn btn-xs btn-primary">
                            {{ __('Edit') }}
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection