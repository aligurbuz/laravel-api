@php
    $request = request()->query->all();
    $range = request()->query->get('range');

    if(is_null($range)){
        $rangeInput = '';
    }
    else{
        $rangeInput = $range;
    }

    $filter = $request['filter'] ?? [];
    $endpoint = $config['endpoint'];
    $page = ucwords(\Illuminate\Support\Str::snake($config['endpoint'],' '));
    $singlePage = \Illuminate\Support\Str::singular($page);

    $forDef = str_replace(' ','/',$page);
    $description = config('documentation.definitions.'.$forDef);

    $repository = $config['resource']['repository'];

    $inputs = array_diff_key($repository->dummy(true),[
        $repository->getModelCode() => 'number',
        'deleted_at' => true
        ]);

    $listCount = $config['resource']['data']['count'] ?? 0;
    $relations = $config['resource']['relations'] ?? [];

    $clientRanges = request()->query->get('range');

    $ranges = [];

    if(!is_null($clientRanges)){
        $ranges = explode(',',$clientRanges);
    }

    $owner = request()->query->get('owner');
    $ownerList = [];

    if(!is_null($owner)){
         $ownerEx = explode('::', $owner);
            foreach ($ownerEx as $ownerItem) {
                $ownerSplit = explode('=', $ownerItem);
                $ownerList[$ownerSplit[0]] = explode(',',$ownerSplit[1]);
            }
    }

    $hasValues = $ownerList['has'] ?? [];
    $doesntHaveValues = $ownerList['doesntHave'] ?? [];

    $lastPage = $config['resource']['last_page'] ?? 1;

    $codeColumn = $config['resource']['code_column'];

    if(count($relations)){
         $relationKeyList = array_keys($relations);
    $firstRelation = $relationKeyList[0];
    $firstPlace = $relations[$firstRelation]['place'];
    $firstRepo = \App\Repositories\Repository::$firstPlace();

    }





@endphp
<div class="card">
    <div style="display: none;" class="lastPage">{{$lastPage}}</div>
     <div class="card-body">
        <h4 class="card-title">{{$page}} List</h4>
        @if(!is_null($description))
            <h6>
                {{$description}}
            </h6>
        @endif
        <h6 class="card-subtitle"></h6>
        <button type="button" class="btn btn-info btn-rounded m-t-10 float-end text-white" data-bs-toggle="modal"
                data-bs-target="#add-contact">Add New {{$singlePage}}
        </button>


         @if(count($relations))
             <div id="show-relations" class="modal bs-example-modal-lg fade in" tabindex="-1" role="dialog"
                  aria-labelledby="myModalLabel"
                  aria-hidden="true">
                 <div class="modal-dialog modal-xl">
                     <div class="modal-content">
                         <div class="modal-header">
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                             <h4 class="modal-title" id="myModalLabel">Show Relations</h4></div>
                         <div class="modal-body overflow-auto" style="white-space: nowrap;">
                             <div style="display:none;" id="r_code"></div>
                             <div style="display:none;" id="list_code"></div>
                             <div class="row">
                                 <div class="col-md-12">
                                     <div class="card">
                                         <div class="card-body">
                                             <h4 class="card-title">{{$singlePage}} Relations</h4>
                                             <ul class="nav nav-pills m-t-30 m-b-30">
                                                 @php
                                                     $count = 0;
                                                 @endphp
                                                 @foreach($relations as $relationName => $relationValue)
                                                     @php

                                                         $place = $relationValue['place'];
                                                             $repos = \App\Repositories\Repository::$place();
                                                             $modelCode = $repos->getModelCode();
                                                             $endpointR = $repos->getEndpoint();

                                                             if($endpointR=='no-endpoint'){
                                                                 continue;
                                                             }

                                                             $adminLinks = explode('/', $endpointR);

                                                             if(isset($adminLinks[1])){
                                                                 $adminLink = $adminLinks[0] .ucwords($adminLinks[1]);
                                                             }
                                                             else{
                                                                 $adminLink = $adminLinks[0];
                                                             }

                                                                $adminLinkRequest = route('admin.pages.index', ['route' => $adminLink]);
                                                             $relationNameStr = ucwords(\Illuminate\Support\Str::snake($relationName, ' '));
                                                                 if($count=='0'){
                                                                     $activate = 'active';
                                                                 }
                                                                 else{
                                                                     $activate = '';
                                                                 }

                                                                 $count++;
                                                     @endphp
                                                     <li class=" nav-item"> <a href="#navpills-{{$count}}" codec="{{$codeColumn}}" modelcode="{{$modelCode}}" counter="{{$count}}" link="{{$adminLinkRequest}}" class="nav-link reltab {{$activate}}" data-bs-toggle="tab" aria-expanded="false">{{$relationNameStr}}</a> </li>

                                                 @endforeach

                                             </ul>
                                             <div class="tab-content br-n pn">

                                                 @php
                                                     $count = 0;
                                                 @endphp
                                                 @foreach($relations as $relationName => $relationValue)

                                                     @php
                                                         $place = $relationValue['place'];
                                                         $repos = \App\Repositories\Repository::$place();
                                                         $modelCode = $repos->getModelCode();
                                                         $endpointR = $repos->getEndpoint();

                                                             if($endpointR=='no-endpoint'){
                                                                 continue;
                                                             }

                                                         $adminLinks = explode('/', $endpointR);

                                                              if(isset($adminLinks[1])){
                                                                 $adminLink = $adminLinks[0] .ucwords($adminLinks[1]);
                                                             }
                                                             else{
                                                                 $adminLink = $adminLinks[0];
                                                             }

                                                            $adminLinkRequest = route('admin.pages.index', ['route' => $adminLink]);

                                                             if($count=='0'){
                                                                 $activate = 'active';
                                                                 $defReq='<div id="defReq" defcodec="'.$codeColumn.'" codec="'.$modelCode.'" style="display:none;">'.$adminLinkRequest.'</div>';
                                                             }
                                                             else{
                                                                 $activate = '';
                                                                 $defReq = '';
                                                             }

                                                             $count++;
                                                     @endphp

                                                     {!! $defReq !!}

                                                     <div id="rload"></div>

                                                     <div id="navpills-{{$count}}" class="tab-pane {{$activate}}">
                                                         <div class="row relContent_{{$count}} relall">
                                                             {{$adminLinkRequest}}
                                                         </div>
                                                     </div>

                                                 @endforeach

                                             </div>
                                         </div>
                                     </div>
                                 </div>

                             </div>




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
         @endif


        <!-- Add Contact Popup Model -->
        <div id="add-contact" class="modal bs-example-modal-lg fade in" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title" id="myModalLabel">Add New {{$singlePage}}</h4></div>
                    <div class="modal-body">
                        <form id="postPage" class="form-horizontal form-material">
                            @csrf
                            <input type="hidden" name="__page" value="{{$endpoint}}">
                            <div class="form-group">
                                <div class="card-header bg-theme">
                                    <h4 class="m-b-0 text-white">{{ucfirst($singlePage)}} Values</h4>
                                </div>
                                <br>
                                @foreach($inputs as $inputName => $inputType)
                                    @if(!is_array($inputType))
                                        @if($inputType=='timestamp')
                                            <div class="col-md-12 m-b-20">
                                                <input class="form-control" type="datetime-local" value=""
                                                       id="example-datetime-local-input">
                                            </div>
                                        @else
                                            <div class="col-md-12 m-b-20">
                                                <input type="text" name="{{$inputName}}" class="form-control"
                                                       placeholder="{{$inputName}}">
                                            </div>
                                        @endif

                                    @endif

                                    @if(is_array($inputType))

                                        <div class="form-group">
                                            <div class="card-header bg-megna">
                                                <h4 class="m-b-0 text-white">{{ucfirst($inputName)}} Values</h4>
                                            </div>
                                            <br>
                                            @if(isset($inputType[0]))
                                                @foreach($inputType[0] as $postKey=> $postType)
                                                    @if(!is_array($postType))
                                                        <div class="col-md-12 m-b-20">
                                                            <input class="form-control"
                                                                   name="{{$inputName}}[0][{{$postKey}}]" type="text"
                                                                   placeholder="{{$postKey}}">
                                                        </div>
                                                    @endif
                                                @endforeach

                                            @endif

                                        </div>
                                    @endif
                                @endforeach


                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <a id="loading"></a>
                        <a class="btn btn-info waves-effect text-white posting">
                            Save
                        </a>
                        <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Cancel
                        </button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div id="add-owners" class="modal bs-example-modal-lg fade in" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title" id="myModalLabel">{{__('admin/general.ownerList')}}</h4></div>
                    <div class="modal-body">
                        <table id="demo-foo-addrow" class="table table-bordered m-t-30 table-hover contact-list"
                               data-paging="true"
                               data-paging-size="7">

                            <thead>


                            <tr>
                                <th>Owner Relation</th>
                                <th>Target</th>
                            </tr>
                            </thead>

                            @if(count($relations))
                                @foreach($relations as $key => $value)
                                    <tr>
                                        <th>{{$key}}</th>
                                        <th>

                                            @if(in_array($key,$hasValues,true))
                                                    <select name="{{$key}}" class="form-control ownerSelect form-select">
                                                        <option value="1">Owner</option>
                                                        <option value="none">---None---</option>
                                                        <option value="0">Not Owner</option>
                                                    </select>
                                                @elseif(in_array($key,$doesntHaveValues,true))
                                                    <select name="{{$key}}" class="form-control ownerSelect form-select">
                                                        <option value="0">Not Owner</option>
                                                        <option value="1">Owner</option>
                                                        <option value="none">---None---</option>
                                                    </select>
                                                @else
                                                    <select name="{{$key}}" class="form-control ownerSelect form-select">
                                                        <option value="none">---None---</option>
                                                        <option value="1">Owner</option>
                                                        <option value="0">Not Owner</option>
                                                    </select>
                                                @endif

                                        </th>

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

        <div id="add-ranges" class="modal bs-example-modal-lg fade in" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title" id="myModalLabel">{{__('admin/general.rangeList')}}</h4></div>
                    <div class="modal-body">
                        <table id="demo-foo-addrow" class="table table-bordered m-t-30 table-hover contact-list"
                               data-paging="true"
                               data-paging-size="7">

                            <thead>


                            <tr>
                                <th>Choose</th>
                                <th>Range Name</th>
                                <th>Range Description</th>
                            </tr>
                            </thead>

                            @if(isset($config['resource']['ranges']))
                                @foreach($config['resource']['ranges'] as $rangeName => $rangeDescription)
                                    @php

                                    if(in_array($rangeName,$ranges,true)){
                                        $checked = 'checked';
                                    }
                                    else{
                                        $checked = '';
                                    }

                                    @endphp
                                    <tr>
                                        <th><input type="checkbox" {{$checked}} value="{{$rangeName}}" class="ranges"></th>
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
                if(count($relations)){
                    $columnCount = count($values['columns']) +2;
                }
                else{
                    $columnCount = count($values['columns']) +1;
                }

                $indexCountPlus = count($values['indexes']) +2;

                $indexCountPlus += count($relations);

                if($indexCountPlus>4){
                    if(count($relations)){
                        $indexCountDivMeasure = 6;
                    }
                    else{
                        $indexCountDivMeasure = 12;
                    }

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
                            @php

                                if(isset($filter[$index])){
                                    $filterValue = $filter[$index];
                                }
                                else{
                                    $filterValue = '';
                                }
                            @endphp


                            <input type="text" style="background-color: #eeeeee;" value="{{$filterValue}}"
                                   name="filter[{{$index}}]" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Enter {{str_replace('_',' ',$index)}}">
                        </div>
                        {!! $space !!}
                    @endforeach

                    <div class="col-{{$indexCountDivMeasure}}">
                        <div class="input-group mb-3">
                            <input type="text" style="background-color: #eeeeee;" name="range" value="{{$rangeInput}}"
                                   class="form-control rangeform" placeholder="" aria-label=""
                                   aria-describedby="basic-addon1">
                            <div class="input-group-append">
                                <span style="color: #ffffff;">-</span>
                                <button class="btn btn-info text-white" type="button"
                                        data-bs-toggle="modal"
                                        data-bs-target="#add-ranges">Show Ranges
                                </button>
                            </div>
                        </div>
                    </div>

                        @if(count($relations))

                            @php
                                if(is_null($owner)){
                                    $owner = '';
                                }
                             @endphp

                            <div class="col-{{$indexCountDivMeasure}}">
                                <div class="input-group mb-3">
                                    <input type="text" style="background-color: #eeeeee;" name="owner" value="{{$owner}}"
                                           class="form-control ownerform" placeholder="" aria-label=""
                                           aria-describedby="basic-addon1">
                                    <div class="input-group-append">
                                        <span style="color: #ffffff;">-</span>
                                        <button class="btn btn-success text-white" type="button"
                                                data-bs-toggle="modal"
                                                data-bs-target="#add-owners">Show Owners
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endif




                    <div class="col-{{$indexCountDivMeasure}}">
                        <button type="submit" class="btn btn-primary text-white">Filter</button>
                    </div>
                </div>
            </form>

            <!--table-->
            <div id="page-table-content">
                <table id="demo-foo-listrow" class="table table-bordered m-t-30 table-hover contact-list" data-paging="true"
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
                        @if(count($relations))
                        <th>{{__('admin/general.relationshipList')}}</th>
                            @endif
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
                                        @if(!is_array($item[$itemColumn]))
                                            <td class="{{$itemColumn}}__{{$item[$codeColumn]}}">{{$item[$itemColumn]}}</td>
                                        @else
                                            <td>{{json_encode($item[$itemColumn])}}</td>
                                        @endif

                                    @endif

                                @endforeach

                                @if(count($relations))

                                    @php

                                    $firstRelCode = $firstRepo->getModelCode();
                                    if(isset($item[$firstRelCode])){
                                        $modelCodex = $item[$firstRelCode];
                                        $cc = 0;
                                    }
                                    else{
                                        $modelCodex = $item[$codeColumn];
                                        $cc = 1;
                                    }



                                     @endphp
                                <td>
                                    <a class="gorel" data-bs-toggle="modal" listCode="{{$item[$codeColumn]}}" modelCode="{{$modelCodex}}" cc="{{$cc}}"
                                       data-bs-target="#show-relations">
                                        <i class="icon-layers"></i>
                                    </a>

                                    @endif

                                </td>
                                <td>
                                    <!--edit-->
                                    <a target="__blank" href="{{route('admin.pages.edit', ['route' => $config['endpoint'],'code' => $item[$codeColumn]])}}"><i class="far fa-edit"></i></a>
                                </td>
                            </tr>

                        @endforeach

                    @endif

                    @if($listCount=='0')
                        <tr>
                            <th colspan="{{$columnCount}}"
                                style="background-color: #e2e8f0;"> {{__('admin/table.no_entries')}}</th>
                        </tr>
                    @endif


                    </tbody>
                </table>
            </div>


            @if($listCount>0)
                <b>{{$listCount}}</b>  {{__('admin/table.list_count_def')}}
            @endif

            <div class="mt-5">
                <div class="lastPage" style="display: none;">{{$lastPage}}</div>
                <nav>
                    <ul class="pagination" id="pagination"></ul>
                </nav>
            </div>

        </div>
    </div>
</div>

</script>
