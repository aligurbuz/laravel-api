@php

    $page = ucwords(\Illuminate\Support\Str::snake($config['endpoint'],' '));
    $singlePage = \Illuminate\Support\Str::singular($page);
    unset($config['data']['created_at']);
    unset($config['data']['updated_at']);
    unset($config['data']['updated_at']);
    unset($config['data']['created_by']);
    unset($config['data']['updated_by']);
    unset($config['data']['deleted_by']);
    unset($config['data']['deleted_at']);

 @endphp

@if(count($config['data']) == '0')
    <div class="alert alert-success">{{__('admin/table.no_entries')}} </div>
@else

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$singlePage}} Edit Form</h4>
                    <h6 class="card-subtitle"> You can edit the form fields specified below. </h6>
                    <form class="mt-4">
                        @foreach($config['data'] as $columnKey => $columnValue)
                            @php
                                $columnKeyString = str_replace('_',' ', $columnKey);
                                $type = 'type=text';
                                $visible = true;

                                if($config['code_column']==$columnKey){
                                    $type = 'type=hidden';
                                    $visible = false;
                                }
                             @endphp

                        @if(is_bool($columnValue))

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">{{ucwords($columnKeyString)}}</label>
                                    <select name="{{$columnKey}}" class="form-control form-select">
                                        @if($columnValue=='0')
                                            <option value="0">False</option>
                                            <option value="1">True</option>
                                        @else
                                            <option value="1">True</option>
                                            <option value="0">False</option>
                                        @endif

                                    </select>
                                </div>

                            @else

                                <div class="form-group">

                                    @if($visible)
                                    <label for="exampleInputEmail1" class="form-label">{{ucwords($columnKeyString)}}</label>
                                    @endif

                                    @if(isset($config['types'][$columnKey]) && $config['types'][$columnKey]=='timestamp')
                                            <input type="datetime-local" id="example-datetime-local-input" name="{{$columnKey}}" class="form-control" value="{{$columnValue}}">

                                        @else
                                            <input {{$type}} name="{{$columnKey}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$columnValue}}">
                                        @endif
                                    </div>

                            @endif


                        @endforeach


                        <button type="submit" class="btn btn-primary text-white">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif


