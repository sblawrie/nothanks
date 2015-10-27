@extends('layouts.master')

@section('js')
@parent
<script src="/javascripts/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="/javascripts/plugins/datatables/jquery.dataTables.columnFilter.js" type="text/javascript"></script>
<script src="/javascripts/plugins/datatables/dataTables.overrides.js" type="text/javascript"></script>
@endsection

@section('content')
<hr class="hr">
<div class='row'>
    <div class='col-sm-12'>
        <div class='box bordered-box orange-border' style='margin-bottom:0;'>
            <div class='box-header red-background'>
                <div class='title'>Messages</div>
                <div class='actions'>
                    <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i>
                    </a>

                    <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                    </a>
                </div>
            </div>
            <div class='box-content box-no-padding'>
                <div class='responsive-table'>
                    <div class='scrollable-area'>
                        <table class='data-table-column-filter table table-bordered table-striped' style='margin-bottom:0;'>
                            <thead>
                            <tr>
                                <th>
                                    Date
                                </th>
                                <th>
                                    Recruiter
                                </th>
                                <th>
                                    Employee
                                </th>
                                <th>Content</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($Messages as $Message)
                            <tr>
                                <td>{{{ $Message->created_at }}}</td>
                                <td>{{{ $Message->Recruiter ? $Message->Recruiter->name : 'N/A' }}}</td>
                                <td>
                                    {{{ $Message->Employee->email }}}
                                </td>
                                <td><a class="btn" target="_blank" href="/messages/{{ $Message->id }}">View</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Recruiter</th>
                                <th colspan='3'>Employee</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
