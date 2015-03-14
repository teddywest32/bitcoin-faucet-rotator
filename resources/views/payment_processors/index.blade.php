@extends('app')

@section('content')
    <h1 class="page-heading">Current Payment Processors</h1>

    @if (Session::has('success_message_delete'))
        <div class="alert alert-success">
            <span class="fa fa-thumbs-o-up fa-2x space-right"></span>
            {{ Session::get('success_message_delete') }}
        </div>
    @endif

    @if (Session::has('success_message_alert'))
        <div class="alert alert-info">
            <span class="fa fa-warning fa-2x space-right"></span>
            {{ Session::get('success_message_alert') }}
        </div>
    @endif

    <div class="table-responsive">

        <table class="table table-striped bordered tablesorter" id="payment_processors_table">
            <thead>
            <th>Payment Processor Name</th>
            </thead>
            <tbody>
            @foreach($payment_processors as $payment_processor)
                <tr>
                    <td>{!! link_to_route('payment_processors.show', $payment_processor->name, array($payment_processor->id)) !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    <script src="/js/accordion.js"></script>
    <script src="/js/jquery.tablesorter.min.js"></script>
    <script src="/js/tablesorter_custom_code.js"></script>
@endsection