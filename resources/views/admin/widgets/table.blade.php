<div class="card">
    <div class="card-body">
        <h4 class="card-title">Contact Emplyee list</h4>
        <h6 class="card-subtitle"></h6>
        <button type="button" class="btn btn-info btn-rounded m-t-10 float-end text-white" data-bs-toggle="modal"
                data-bs-target="#add-contact">Add New Contact
        </button>
        <!-- Add Contact Popup Model -->
        <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title" id="myModalLabel">Add New Contact</h4></div>
                    <div class="modal-body">
                        <from class="form-horizontal form-material">
                            <div class="form-group">
                                <div class="col-md-12 m-b-20">
                                    <input type="text" class="form-control" placeholder="Type name"></div>
                                <div class="col-md-12 m-b-20">
                                    <input type="text" class="form-control" placeholder="Email"></div>
                                <div class="col-md-12 m-b-20">
                                    <input type="text" class="form-control" placeholder="Phone"></div>
                                <div class="col-md-12 m-b-20">
                                    <input type="text" class="form-control" placeholder="Designation"></div>
                                <div class="col-md-12 m-b-20">
                                    <input type="text" class="form-control" placeholder="Age"></div>
                                <div class="col-md-12 m-b-20">
                                    <input type="text" class="form-control" placeholder="Date of joining"></div>
                                <div class="col-md-12 m-b-20">
                                    <input type="text" class="form-control" placeholder="Salary"></div>
                                <div class="col-md-12 m-b-20">
                                    <div class="fileupload btn btn-primary btn-rounded waves-effect waves-light">
                                        <span><i class="ion-upload m-r-5"></i>Upload Contact Image</span>
                                        <input type="file" class="upload"></div>
                                </div>
                            </div>
                        </from>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info waves-effect text-white" data-bs-dismiss="modal">
                            Save
                        </button>
                        <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Cancel
                        </button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div id="add-ranges" class="modal bs-example-modal-lg fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title" id="myModalLabel">{{__('admin/general.rangeList')}}</h4></div>
                    <div class="modal-body">
                        <table id="demo-foo-addrow" class="table table-bordered m-t-30 table-hover contact-list" data-paging="true"
                               data-paging-size="7">

                            <thead>


                            <tr>
                                <th>Seçim</th>
                            <th>Range Name</th>
                                <th>Range Description</th>
                            </tr>
                            </thead>

                            @if(isset($config['resource']['ranges']))
                                @foreach($config['resource']['ranges'] as $rangeName => $rangeDescription)
                                    <tr>
                                        <th><input type="checkbox" value="{{$rangeName}}" class="ranges"></th>
                                        <th>{{$rangeName}}</th>
                                        @if(is_array($rangeDescription))
                                            <th>{{$rangeDescription[0]}}</th>
                                        @else
                                            <th>{{$rangeDescription}}</th>
                                        @endif

                                    </tr>
                                @endforeach
                            @endif


                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Cancel
                        </button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div class="table-responsive">
            @php
                $columnCount = count($values['columns']) +1;
                $indexCountPlus = count($values['indexes']) +2;
                if($indexCountPlus>4){
                    $indexCountDivMeasure = 12;
                    $space = '<br><br>';
                }
                else{
                    $indexCountDivMeasure = 12/$indexCountPlus;
                    $space = '';
                }

            @endphp

            <br><br>

            <form action="">
                <div class="row">
                    @foreach($values['indexes'] as $index)
                        <div class="col-md-{{$indexCountDivMeasure}}">
                            <input type="text" style="background-color: #eeeeee;" name="filter[{{$index}}]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter {{$index}}">
                        </div>
                        {!! $space !!}
                    @endforeach

                        <div class="col-{{$indexCountDivMeasure}}">
                            <div class="input-group mb-3">
                                <input type="text" style="background-color: #eeeeee;" name="range" class="form-control rangeform" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                     <span style="color: #ffffff;">-</span> <button class="btn btn-info text-white" type="button"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#add-ranges">Show Ranges</button>
                                </div>
                            </div>
                            </div>


                    <div class="col-{{$indexCountDivMeasure}}">
                        <button type="submit" class="btn btn-primary text-white">Filter</button>
                    </div>
                </div>
            </form>

            <table id="demo-foo-addrow" class="table table-bordered m-t-30 table-hover contact-list" data-paging="true"
                   data-paging-size="7">

                <thead>


                <tr>
                    @foreach($values['columns'] as $column)
                        @php
                            $replace = (str_replace('_',' ',$column));
                            $langKey = 'admin/table.headers.'.$column;
                            $langCol = __($langKey);
                            if($langKey===$langCol){
                                $langCol = ucfirst($replace);
                            }

                        @endphp
                        <th>{{$langCol}}</th>
                    @endforeach
                        <th>{{__('admin/general.action')}}</th>
                </tr>

                </thead>
                <tbody>
                @if(isset($values['data'][0]))

                    @foreach($values['data'] as $item)
                        <tr>
                            @foreach($values['columns'] as $itemColumn)
                                @if(is_bool($item[$itemColumn]))
                                    @if($item[$itemColumn]===false)
                                        <td><span class="label label-danger">false</span></td>
                                    @else
                                        <td><span class="label label-info">true</span></td>
                                    @endif

                                @else
                                    <td>{{$item[$itemColumn]}}</td>
                                @endif

                            @endforeach
                                <td>
                                    <i class="far fa-edit"></i>
                                </td>
                        </tr>

                    @endforeach

                @endif


                </tbody>
            </table>
        </div>
    </div>
</div>
