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
                <div class='title'>Skills</div>
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
                                    Name
                                </th>
                                <th>
                                    Messages
                                </th>
                                <th>Last Message</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($Skills as $Skill)
                            <tr>
                                <td>{{{ $Skill->name }}}</td>
                                <td>
                                    {{{ $Skill->Messages()->count() }}}
                                </td>
                                <td>{{ $Skill->Messages()->max('messages.created_at') }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Skill</th>
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
